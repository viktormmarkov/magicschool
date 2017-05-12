<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






Route::group(['middleware' => ['web']], function () {
    //Login Routes...
	Route::get('/','IndexController@showLogin');
	Route::get('/register','IndexController@showRegister');
	Route::get('/login','IndexController@showLogin');
	Route::post('/login','IndexController@userLogin');
	Route::post('/register','IndexController@userRegister');
	Route::get('/logout','IndexController@userLogout');

});   

Route::group(['middleware' => ['student']], function () {

	Route::post('/set-type','StudentController@setType');
	Route::get('/user_info/{user_id?}','StudentController@getInfo');
	Route::get('/character_skills','StudentController@getCharacterSkills');
	Route::get('/get_skill/{skill_id}','StudentController@addSkillToUser');
	Route::get('/activate_code/{code_id}','StudentController@addCodeToUser');
	Route::get('get_answers/{question_id}','StudentController@getQuestionAnswers');
	Route::get('send_answer/{answer_id}/{question_id}','StudentController@sendQuestionAnswer');
}); 

Route::group(['middleware' => ['teacher']], function () {

	Route::get('/use_skill/{studentId}/{skillId}','TeacherController@userSkill');
	Route::get('/get-class/{class_id}','TeacherController@index');

});  

Route::group(['middleware' => ['admin']], function () {


});  
