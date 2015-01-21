<?php
//global view
View::share('messagecount', Message::where('view',0)->count());
View::share('messageview', Message::where('view','=',0)->get());



Route::get('/',['uses'=>'HomeController@index','as'=>'getHome']);
Route::get('login',['uses'=>'AuthController@getLogin','as'=>'auth-getLogin']);
Route::post('login',['uses'=>'AuthController@postLogin','as'=>'auth-postLogin']);
Route::get('logout',['uses'=>'AuthController@getLogout','as'=>'auth-getLogout']);
Route::post('messages/sendmessage',['uses'=>'MessagesController@postMessage','as'=>'messages-postMessage']);

Route::group(['prefix'=>'heavenadmin','before'=>'auth'],function(){
	Route::get('/',['uses'=>'AuthController@getLogin','as'=>'auth-getLogin']);
	Route::get('/changepassword',['as'=>'auth-getChange','uses'=>'AuthController@getChangepassword']);
	Route::post('/changepassword',['as'=>'auth-postChange','uses'=>'AuthController@postChangepassword']);
	Route::get('skills',['uses'=>'SkillController@getIndex','as'=>'skill-getIndex']);
	Route::post('skills',['uses'=>'SkillController@postCreate','as'=>'skill-postCreate']);
	Route::get('dashboard',['uses'=>'AdminController@getDashboard','as'=>'admin-getDashboard']);
	Route::get('setting',['uses'=>'SettingsController@getIndex','setting-getIndex']);
	Route::get('setting/update',['uses'=>'SettingsController@getUpdate','setting-getUpdate']);
	Route::post('setting/update',['uses'=>'SettingsController@postUpdate','setting-getUpdate']);
	Route::get('messages/success',['uses'=>'MessagesController@getSuccess']);
	Route::controller('messages','MessagesController');
	Route::resource('users','UsersController');
});

 


