<?php

Route::get('/', function()
{
    return view('welcome.signinform');
})->name('signup');

Route::any('/signin',[
    'uses'=>'LoginController@Login',
    'as'=>'login'
]);
Route::any('/login',[
    'uses'=>'LoginController@getLogin',
    'as'=>'getlogin'
]);
Route::post('/signup',[
    'uses'=>'LoginController@SignUp',
    'as'=>'signup'
]);
Route::get('/logout',[
    'uses'=>'LoginController@logout',
    'as'=>'logout'
]);
Route::any('/dashboard',[
    'middleware'=>'auth',
    'uses'=>'LoginController@gedDashboard',
    'as'=>'dashboard'
]);