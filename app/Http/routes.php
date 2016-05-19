<?php

Route::get('/', function()
{    return view('welcome.signinform');
})->name('signupwelcome');

Route::match(['POST'],'/login',[
    'uses'=>'LoginController@Login',
    'as'=>'login'
]);
Route::get('/getlogin',[
    'uses'=>'LoginController@getLogin',
    'as'=>'getlogin'
]);
Route::any('/signup',[
    'uses'=>'LoginController@SignUp',
    'as'=>'signup'
]);
Route::get('/logout',[
    'uses'=>'LoginController@logout',
    'as'=>'logout'
]);
Route::post('/createbook',[
    'uses'=>'BookController@createbook',
    'as'=>'book',
    'middleware'=>'auth'
]);
Route::any('/homepage',[
    'uses'=>'BookController@getHomepage',
    'as'=>'homepage',
    'middleware'=>'auth'
]);
Route::get('/getdashboard',[
    'uses'=>'LoginController@getdashboard',
    'as'=>'getdashboard'
]);

