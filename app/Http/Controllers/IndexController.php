<?php

namespace App\Http\Controllers;

use DB;
use View;
use Illuminate\Pagination\Paginator;
use Route;
use Illuminate\Http\Request;
use App\Models\AttributeType;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Producer; 
use App\Models\News;
use App\Models\Size;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Banner;
use Illuminate\Support\Facades\Redirect;
use App\Models\Characteristics;
use App\Models\Page;
use Session;
use App\Models\Order;
use App\Models\User;
use App\Models\libs\DBoricaShell;
use App\Models\libs\DPariba;
use App\Models\libs\paypal_class;
use Validator;
use Auth;

class IndexController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
        
        return view('index');
    }


    public function showLogin() {
        if(Auth::check() && Auth::user()->isAdmin()){
            $controller = app()->make('App\Http\Controllers\AdminController');
            return $controller->callAction('index',array());    
        }
        else if(Auth::check() && Auth::user()->isTeacher()){
            $controller = app()->make('App\Http\Controllers\TeacherController');
            return $controller->callAction('index',array()); 

        }
        else if(Auth::check() && Auth::user()->isStudent()){
            $controller = app()->make('App\Http\Controllers\StudentController');
            return $controller->callAction('index',array()); 

        }
        else {
            return view('auth/login');
        }

    }

    public function userLogin(Request $request){
        if (Auth::attempt(array('username'=> $request->input('username'), 'password'=> $request->input('password')))) {
         
            return Redirect::to('/');
        } else {
            return Redirect::back()->with('errors',array('Невалидни данни ! Опитайте отново'));
        }
    }

    public function userProfile(){
        if(Auth::check()){
            return view('profile');
        }else{
            return Redirect::to('/');
        }
    }

    public function userOrders(){
        if(Auth::check()){
            $orders = Order::where('email',Auth::user()->email)->get();
            $prices = array();
            foreach ($orders as $key=>$order) {
                $price = 0;
                foreach($order->products as $p) {
                    $tempSize = Size::find($p->pivot->size_id);
                    $price += $tempSize['price'];
                }
                $prices[$key] = $price;
            }
            return view('userOrders')->with('orders',$orders)->with('prices',$prices);
        }else{
            return Redirect::to('/');
        }
    }

    public function userLogout(){
        Auth::logout();
        return Redirect::to('/');
    }

    public function showRegister() {
        return view('auth/register');
    }

    public function userRegister(Request $request){

        $validator = Validator::make($request->all(),[
                'name' => 'required|max:255',
                'password' => 'required|min:6|confirmed',
                ]);

            if($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

            else 
                {
                    User::create([
                        'username' => $request->input('username'),
                        'password' => bcrypt($request->input('password')),
                        'name' => $request->input('name')
                    ]);
                }
        return Redirect::to('login');
    } 

 
}
