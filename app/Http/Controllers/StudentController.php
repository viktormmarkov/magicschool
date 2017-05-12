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

class StudentController extends Controller
{

    public function __construct(){

    }

    public function index(){

         if(!Auth::user()->Character_type) {
            return view('student/chooseType');
        }
        else {
            return view('student/index');

        }
        
    }

    public function setType(Request $request) {
    	$user = Auth::user();
    	$user->Character_type = $request->input('type');
    	$user->save();
            return view('student/index');

    }


 

 
}
