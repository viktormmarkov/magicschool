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

class TeacherController extends Controller
{
    public function __construct(){

    }

    public function index($class = null){
        $classes=Auth::user()->classes;
        $students = array();
        if($class) $students=User::where('Class_in_school',$class)->get();
            return view('teacher/index')->with('classes',$classes)->with('students',$students)->with('current_class',$class);
    }
    public function userSkill($studentId,$skillId) {
    		$data=array();
			$skill_info=Skill::find($skillId);
			$user_info=User::find($studentId);
			if($user_info->ap>=$skill_info->ap and $user_info and $skill_info) {
				$user_info->ap -= $skill_info->ap;
				$data['ap']=$user_info->ap;
				$data['status']='Използването на '.$skill_info->name.' се изпълни успешно';	
				$data['success']=1;
				if($data){
					$message = $skill_info->name." беше използван от ".Auth::user()->name;
					$db->execute("Insert INTO messages (user_id, teacher_id, text) VALUES ($uid,$tid,'".$message."')");
				}
			}
			else {
				$data['status']='Недостигат кредити за това умение';	
				$data['success']=0;
			}
			echo json_encode($data);

    }
 
}
