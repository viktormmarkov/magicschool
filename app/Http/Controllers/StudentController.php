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
use App\Models\Answer;
use App\Models\Message;
use App\Models\Skill;
use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Character;
use Illuminate\Support\Facades\Redirect;
use App\Models\Characteristics;
use App\Models\Page;
use Session;
use App\Models\Question;
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

    public function getInfo($user_id=null) {

        $user = Auth::user();
        $character = Character::find($user->Character_type);

        $info = $user;
        $info->character_name = $character['Name'];
        $info->src = $character->src;
        $info['skills']=Auth::user()->skills;
        
        echo json_encode($info);
    }

    public function getCharacterSkills() {

       $character = Character::find(Auth::user()->Character_type);

       echo json_encode($character->skills);
    }

    public function addSkillToUser($skill_id) {
        if(!empty(Auth::user()->skills->find($skill_id))) {
            $data['status']='Вече сте вдигнали това умение';
            $data['success']=0;

        }
        if(Auth::user()->sp<=0) {
            $data['status']='Нямате достатъчно точки за умения';
            $data['success']=0;

        }
        $skill = Skill::find($skill_id);
        if($skill->req_skill && empty(Auth::user()->skills->find($skill->req_skill))) {
            $data['status']='Моля вдигнете всички умения които се изискват за даденото';
            $data['success']=0;
        }

        if(!isset($data)) {
            $skills = Auth::user()->skills;
            $data['skills'] = '';
            foreach ($skills as $key => $value) {
                $data['skills'].=$value->id;
                $data['skills'].=',';
            }
            $data['skills'].=$skill_id;
            Auth::user()->skills()->attach([$skill_id]);
            Auth::user()->sp--;
            Auth::user()->save();
            $data['status']='Успешно вдигнахте ново умение';
            $data['success']=1;
        }
        echo json_encode($data);
    }

    public function getMessages() {
        $messages = Message::where('IsRead',0)->where('User_Id',Auth::user()->id)->get();
        foreach ($messages as $message) {
            $message->IsRead = 1;
            $message->save();
        }
        
        return view('student/messages')->with('messages',$messages);
    }
    public function getQuestions() {

        $questions = Auth::user()->questions;
        
        return view('student/questions')->with('questions',$questions);
    }
    public function addCodeToUser($code) {

        $info=Code::where('UniqueName',$code)->get();
        if(count($info)==0) {
            $data['success']=0;
            $data['status']="Кодът, който сте въвели не е активен";
        }
        else {
            $info = $info[0];
            $passive_skills=Auth::user()->skills()->where('passive',1)->get();
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
                        $info['Ap']+=$info['Ap']*$bonus[0]/100;
                    }
                    else $info['Ap']+=$bonus[0];
                }
                
            }
            Auth::user()->xp+=$info['xp'];
            Auth::user()->ap+=$info['Ap'];
            $next_level_xp=(100*Auth::user()->level)+(50*(Auth::user()->level-1));
            while(Auth::user()->xp>=$next_level_xp) {
                Auth::user()->level++;
                Auth::user()->sp++;
                Auth::user()->xp-=$next_level_xp;
                $data['result']='Поздравления вдигнахте ниво. Имате '.Auth::user()->sp.' точки за умения';
                $next_level_xp=(100*Auth::user()->level)+(50*(Auth::user()->level-1));
            }
            
            Auth::user()->save();          
            $info->delete();
            $data['success']=1;
            $data['status']='Успешно въведохте код';
            $data['user_info']=Auth::user();     
        }
        echo json_encode($data);

    }

    public function getQuestionAnswers($question_id) {
        $data=Answer::where('quest_id',$question_id)->get();

        DB::statement("Update send_question_to_user set seen=1 where user_id=".Auth::user()->id." and question_id=".$question_id);
        echo json_encode($data);
    }

    public function sendQuestionAnswer($answer_id,$question_id) {
        $info=Question::find($question_id);
        if($info['answer_id']==$answer_id) {
            $passive_skills=Auth::user()->skills()->where('passive',1)->get();
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

            Auth::user()->xp+=$info['xp'];
            Auth::user()->ap+=$info['ap'];
            $next_level_xp=(100*Auth::user()->level)+(50*(Auth::user()->level-1));
            while(Auth::user()->xp>=$next_level_xp) {
                Auth::user()->level++;
                Auth::user()->sp++;
                Auth::user()->xp-=$next_level_xp;
                $data['result']='Поздравления вдигнахте ниво. Имате '.Auth::user()->sp.' точки за умения';
                $next_level_xp=(100*Auth::user()->level)+(50*(Auth::user()->level-1));
            }
            Auth::user()->save();

            $data['success']=1;
            $data['status']='Вашият отговор беше правилен';
            $data['user_info']=Auth::user();
        }
        else {
            $data['success']=0;
            $data['status']='Вашият отговор не беше правилен';
        }
        echo json_encode($data);
    }

 

 
}
