<?php

namespace App\Http\Controllers;

use DB;
use View;
use Illuminate\Http\Request;
use App\Models\AttributeType;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Category;
use App\Models\Producer;
use App\Models\Size;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Banner;
use Illuminate\Support\Facades\Redirect;
use App\Models\Characteristics;
use App\Models\Page;
use Session;

class IndexController extends Controller
{
    public function __construct(){
        $categories = Category::where('parent_id','0')->get();
        $result = array();
        foreach($categories as &$category) {
            $parts = explode(' ',$category['name']);
            if(count($parts)>1) $parts[0].="<br>";
            $category['name'] = implode(' ',$parts);
            $result[]= $category;
        }
    	View::share('categories',$result);
    }

    public function index(Request $request){
    	$producers = Producer::all();
		$products = Product::where('discount','>','0')->take(6)->get();
    	$image = Image::where('active','1')->first();
		$banner = Banner::where('active','1')->first();

        return view('index')->with('products',$products)->with('producers',$producers)->with('image',$image)->with('banner',$banner);
    }

    public function productList($cat_title) {


    	$catInfo = Category::where('title',$cat_title)->first();
        $catChilds = Category::where('parent_id',$catInfo['id'])->get();
        $catIds = $catInfo['id'];
        foreach ($catChilds as $value) {
            $catIds .= ',';
            $catIds .= $value['id'];
        }
        $idsArr = explode(",",$catIds);
    	$products = Product::whereIn('cat_id',$idsArr)->paginate(40);
        $producers = Producer::all();

        $attributes = AttributeType::all();
        $size = Size::orderBy('price', 'desc')->first();


        return view('productList')->with('products',$products)->with('cat_id',$cat_title)->with('producers',$producers)->with('attributes',$attributes)->with('size',$size);
    }

    public function productBrandList($brand_title) {

    	$brandInfo = Producer::where('title',$brand_title)->first();
    	$products = Product::where('producer_id',$brandInfo['id'])->paginate(40);
        $producers = Producer::all();

        $attributes = AttributeType::all();
        $size = Size::orderBy('price', 'desc')->first();
        return view('productList')->with('products',$products)->with('brand_title',$brand_title)->with('producers',$producers)->with('attributes',$attributes)->with('size',$size);;
    }
    public function promotionList() {

    	$products = Product::where('discount','>','0')->paginate(40);
        $producers = Producer::all();

        $attributes = AttributeType::all();
        $size = Size::orderBy('price', 'desc')->first();
        return view('productList')->with('products',$products)->with('producers',$producers)->with('attributes',$attributes)->with('size',$size);;
    }

    public function productInfo($prod_title) {
            $product = Product::where('title','like',trim($prod_title))->first();
            $name = 'тип на матрака';
            $typeName = AttributeType::whereRaw('LOWER(name) = ?', [$name])->first();


            if(!$product) {
            	return Redirect::to('/');
            }

            else {
            	$chars = DB::select(DB::raw('Select * from product_characteristics where product_id = '.$product['id']));
            	$charsInfo = array();
            	foreach ($chars as $char) {

            		$charsInfo[] = Characteristics::find($char->char_id);
            	}
            	$type = DB::select(DB::raw('Select * from attributes,product_attributes where attr_type_id='.$typeName->id.' and attributes.id = product_attributes.attr_id and product_id = '.$product['id']));

            	$sizes = Size::where('product_id',$product['id'])->orderBy('created_at')->get();    
            	$contactInfo = Page::where('title','contacts')->first();       	
        		return view('productInfo')->with('product',$product)->with('sizes',$sizes)->with('type',$type)->with('charsInfo',$charsInfo)->with('contacts',$contactInfo);
        }
    }


    public function addToCart(Request $request){
        $flag = false;
        $sessionCart = Session::get('cart',[]);
        foreach($sessionCart as &$cart){
            if($cart['size_id'] == $request->input('size_id')){
                
                $flag = true;
                $cart['count']++;
            }
        }
        Session::set('cart', $sessionCart);
        if (!$flag){
            $productInfo = Product::find($request->input('product_id'));
            Session::push('cart',array('product_id' =>$request->input('product_id'),
                                    'size_id'=>$request->input('size_id'),
                                    'type'=>$request->input('type'),
                                    'size'=>$request->input('size'),
                                    'old_price'=>$request->input('old_price'),
                                    'price'=>$request->input('price'),
                                    'name'=>$request->input('name'),
                                    'count' => 1,
                                    'image' => $productInfo->image
                                    ));
        }
        echo 1;
    }

    public function getCartInfo(){
        $products = Session::get('cart');
        return view('cartInfo')->with('products',$products);
    }

    public function updateCart(Request $request) {
        $sessionCart = Session::get('cart',[]);
        foreach($sessionCart as &$cart){
            if($cart['size_id'] == $request->input('size_id')){
                $cart['count']=$request->input('count');
            }
        }
        Session::set('cart', $sessionCart);
        return 1;
    }
    
    public function removeProduct(Request $request){
        $sessionCart = Session::get('cart');
        foreach($sessionCart as $index => $cart){
            if($cart['size_id'] == $request->input('size_id')){
               unset($sessionCart[$index]);
            }
        }
        Session::set('cart', $sessionCart);
        return $request->input('size_id');
    }

    public function getFilteredProducts(Request $request) {
        $attrArray = json_decode($request->input('attrArray'),true);
        print_r($attrArray);
        print_r($request->input('producerArray'));
        print_r($request->input('FromValue'));
        print_r($request->input('ToValue'));

    }

    public function test($view){

        return view('test/'.$view);
    }
}
