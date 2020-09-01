<?php

use Illuminate\Support\Facades\Route;



Route::resource('/home', 'ClothController');

Route::group(['prefix' => 'user'], function() {
  
  Route::get('/signup',[
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
  ]);
  Route::post('/signup',[
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
  ]); 
  Route::get('/signin',[
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
  ]);
  Route::post('/signin',[
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
  ]);
  
});