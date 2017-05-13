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
use App\Models\Answer;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Question;
use Illuminate\Support\Facades\Redirect;
use App\Models\Characteristics;
use App\Models\Message;
use App\Models\ClassSchool;
use Session;
use App\Models\Skill;
use App\Models\User;
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

    public function questionList() {


		$questions = Question::where('user_id',Auth::user()->id)->get();

		return view('teacher/questions')->with('questions',$questions);
		
		

    }

    public function addQuestionView() {
		$classes=Auth::user()->classes;
    	return view('teacher/addQuestion')->with('classes',$classes);
    }

    public function addQuestion(Request $request) {
	
		$quest=$request->input('quest');
		$answers=$request->input('answers');
		$right_answer=$request->input('right_answer');
		$time=$request->input('time');
		$classes=$request->input('classes');
		$xp=$request->input('xp');
		$ap=$request->input('ap');
		
		$question = new Question;
		$question->question = $quest;
		$question->time = $time;
		$question->ap = $ap;
		$question->xp = $xp;
		$question->user_id = Auth::user()->id;
		$question->save();

		for($i=0;$i<count($answers);$i++) {
			$answer = new Answer;
			$answer->quest_id = $question->id;
			$answer->answer = $answers[$i];
			$answer->save();
			if($i==$right_answer) { 
				$right_answer_id=$answer->id;
				$question->answer_id=$right_answer_id;
			}
		}


		$all_classes='';
		for($i=0;$i<count($classes);$i++) {
			$all_users=User::where('Class_in_school',$classes[$i])->get();
			$classInfo = ClassSchool::find($classes[$i]);
			$all_classes.=$classInfo->name;
			if(($i+1)<count($classes))$all_classes.=',';
			for($j=0;$j<count($all_users);$j++) {
	       		 DB::statement("Insert into send_question_to_user (question_id,user_id) values (".$question->id.",".$all_users[$j]->id.")");
			}

		$question->classes_id = $all_classes;
		$question->save();

		return $this->questionList();
		
	}
	
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
					$message = $skill_info->name." беше използван от ".Auth::user()->Name;
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

                $message = $data['result'];

				$msg = new Message;

        		$msg->user_id = $user->id;
        		$msg->teacher_id = Auth::user()->id;
        		$msg->text = $message;
        		$msg->save();
            }
            
            $user->save();

            $data['level'] = $user->level;
            $data['ap'] = $user->ap;

            echo json_encode($data); 
    }
 
}
