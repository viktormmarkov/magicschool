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
use App\Models\Message;
use Session;
use App\Models\Skill;
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
					$msg = new Message;

        			$msg->user_id = $studentId;
        			$msg->teacher_id = Auth::user()->id;
        			$msg->text = $message;

					$msg->save();
				}
				$user_info->save();
			}
			else {
				$data['status']='Недостигат кредити за това умение';	
				$data['success']=0;
			}

			echo json_encode($data);

    }

    public function addPoints(Request $request) {
    	$user = User::find($request->input('student_id'));
    	$info['ap'] = $request->input('ap');
    	$info ['xp'] = $request->input('xp');
    	    $passive_skills=$user->skills()->where('passive',1)->get();
            for($i=0;$i<count($passive_skills);$i++) {
                $bonus=explode('%',$passive_skills[$i]["bonus"]);
                if($passive_skills[$i]["bonus_field"]=='xp') {
                    if(count($bonus)>1) {
                        $info['xp']+=$info['xp']*$bonus[0]/100;
                    }
                    else $info['xp']+=$bonus[0];
                }
                else {
                    if(count($bonus)>1) {
                        $info['ap']+=$info['ap']*$bonus[0]/100;
                    }
                    else $info['ap']+=$bonus[0];
                }
                
            }
            $user->xp+=$info['xp'];
            $user->ap+=$info['ap'];
            $next_level_xp=(100*$user->level)+(50*($user->level-1));
            while($user->xp>=$next_level_xp) {
                $user->level++;
                $user->sp++;
                $user->xp-=$next_level_xp;
                $data['result']='Поздравления вдигнахте ниво. Имате '.$user->sp.' точки за умения';
                $next_level_xp=(100*$user->level)+(50*($user->level-1));
            }
            
            $user->save(); 
    }
 
}
