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
    	$images = Image::where('active','1')->get();
		$banners = Banner::where('active','1')->get();

        return view('index')->with('products',$products)->with('producers',$producers)->with('images',$images)->with('banners',$banners);
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

        $category = Category::where('id',$catInfo["id"])->first();
        $main_cat = Category::where('id',$category->parent_id)->first();
        $url=url('/');
        $menu_html = '<a href="'.$url.'">Начало</a>';
        if(isset($main_cat)) {
            $url = url('/products/'.$main_cat['title']);
            if($menu_html) $menu_html .= '&#187;';
            $menu_html .= '<a href="'.$url.'">'.$main_cat['name'].'</a>';
        }
        if(isset($category)) {
            $url = url('/products/'.$category['title']);
            if($menu_html) $menu_html .= '&#187;';
            $menu_html .= '<a href="'.$url.'">'.$category['name'].'</a>';
        }

        return view('productList')->with('products',$products)->with('cat_id',$cat_title)->with('producers',$producers)->with('attributes',$attributes)->with('size',$size)->with('menu_html',$menu_html);
    }

    public function productBrandList($brand_title) {
    	$brandInfo = Producer::where('title',$brand_title)->first();

        $url=url('/');
        $menu_html = '<a href="'.$url.'">Начало</a>';
        if(isset($brandInfo)) {
            $url = url('/brand/'.$brandInfo['title']);
            if($menu_html) $menu_html .= '&#187;';
            $menu_html .= '<a href="'.$url.'">'.$brandInfo['name'].'</a>';
        }

    	$products = Product::where('producer_id',$brandInfo['id'])->paginate(40);
        $producers = Producer::all();

        $attributes = AttributeType::all();
        $size = Size::orderBy('price', 'desc')->first();
        return view('productList')->with('products',$products)->with('brand_title',$brand_title)->with('producers',$producers)->with('attributes',$attributes)->with('size',$size)->with('menu_html',$menu_html);
    }
    public function promotionList() {
        $url=url('/');
        $menu_html = '<a href="'.$url.'">Начало</a>';
            $url = url('/promotions');
            if($menu_html) $menu_html .= '&#187;';
            $menu_html .= '<a href="'.$url.'">Промоции топ оферти</a>';
        
    	$products = Product::where('discount','>','0')->paginate(40);
        $producers = Producer::all();

        $attributes = AttributeType::all();
        $size = Size::orderBy('price', 'desc')->first();
        return view('productList')->with('products',$products)->with('producers',$producers)->with('attributes',$attributes)->with('size',$size)->with('menu_html',$menu_html);
    }

    public function productInfo($prod_title) {
            $product = Product::where('title','like',trim($prod_title))->first();
            $name = 'вид на матрака';
            $typeName = AttributeType::whereRaw('LOWER(name) = ?', [$name])->first();


            if(!$product) {
            	return Redirect::to('/');
            }

            else {

                $category = Category::where('id',$product["cat_id"])->first();
                $main_cat = Category::where('id',$category->parent_id)->first();
                $url=url('/');
                $menu_html = '<a href="'.$url.'">Начало</a>';
                if(isset($main_cat)) {
                    $url = url('/products/'.$main_cat['title']);
                    if($menu_html) $menu_html .= '&#187;';
                    $menu_html .= '<a href="'.$url.'">'.$main_cat['name'].'</a>';
                }
                if(isset($category)) {
                    $url = url('/products/'.$category['title']);
                    if($menu_html) $menu_html .= '&#187;';
                    $menu_html .= '<a href="'.$url.'">'.$category['name'].'</a>';
                }


                    $url = url('/product/'.$product['title']);
                    if($menu_html) $menu_html .= '&#187;';
                    $menu_html .= '<a href="'.$url.'">'.$product['name'].'</a>';

            	$chars = DB::select(DB::raw('Select * from product_characteristics where product_id = '.$product['id']));
            	$charsInfo = array();
            	foreach ($chars as $char) {

            		$charsInfo[] = Characteristics::find($char->char_id);
            	}
            	$type = DB::select(DB::raw('Select * from attributes,product_attributes where attr_type_id='.$typeName->id.' and attributes.id = product_attributes.attr_id and product_id = '.$product['id']));

            	$sizes = Size::where('product_id',$product['id'])->orderBy('order')->get();
                echo "<pre>";
                print_r($sizes);
            	$contactInfo = Page::where('title','contacts')->first();       	
        		return view('productInfo')->with('product',$product)->with('sizes',$sizes)->with('type',$type)->with('charsInfo',$charsInfo)->with('contacts',$contactInfo)->with('menu_html',$menu_html);
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
        $where = "1=1 ";
        foreach ($attrArray as $attrSet) {
            $tempWhere = '';
            foreach ($attrSet as $value) {
                $tempWhere.=' or attr_id = '.$value;
            }
            if($tempWhere) {
                $tempWhere = ltrim($tempWhere,' or');
                $tempWhere = '('.$tempWhere .')';
                $where .= 'and products.id in (Select product_id from product_attributes where product_id = products.id and '.$tempWhere.')';
            }
        }
        if($request->input('producerArray')) {
            $where.='and producer_id in ('.$request->input('producerArray').')';
        }

        if($request->input('FromValue')) {
            $where .= 'and products.id in (Select product_id from product_sizes where products.id=product_id and price*(100-products.discount)/100 > '.$request->input('FromValue').')';
        }
        if($request->input('ToValue')) {
            $where .= 'and products.id in (Select product_id from product_sizes where products.id=product_id and price*(100-products.discount)/100 < '.$request->input('ToValue').')';
        }

        $products = DB::select(DB::raw("SELECT *,(Select price from product_sizes where product_id=products.id order by price limit 0,1) as product_price,(Select image from producers where producer_id=producers.id limit 0,1) as producer_image FROM products left join product_sizes on products.id = product_sizes.product_id left join product_attributes on products.id = product_attributes.product_id where ".$where." group by products.id"));
        //echo "SELECT *,(Select price from product_sizes where product_id=products.id order by price limit 0,1) as product_price,(Select image from producers where producer_id=producers.id limit 0,1) as producer_image FROM products left join product_sizes on products.id = product_sizes.product_id left join product_attributes on products.id = product_attributes.product_id where ".$where." group by products.id";
        print_r(json_encode($products));

    }


    public function Payment(Request $request)
    {
        $products = Session::get('cart');
        return view('paymentDetails')->with('products',$products)->with('pay-type',$request->input('payment-type'));
    }
    public function test($view){

        return view('test/'.$view);
    }
}
