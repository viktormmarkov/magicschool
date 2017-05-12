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
}); 

Route::group(['middleware' => ['teacher']], function () {


});  

Route::group(['middleware' => ['admin']], function () {


});  
