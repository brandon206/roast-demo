<?php

// Route::get( '/', 'Web\AppController@getApp' )
//       ->middleware('auth');
Route::get( '/', 'Web\AppController@getApp' );

Route::get('/login', 'Web\AppController@getLogin' )
->name('login')
->middleware('guest');

/*
|-------------------------------------------------------------------------------
| Social Login
|-------------------------------------------------------------------------------
| URL:            /login/{social}
| Controller:     Web\AuthenticationController@getSocialRedirect
| Method:         GET
| Description:    Initializes the social login defined by the user. Can be
|                 Facebook, Google +, or Twitter.
*/
Route::get( '/login/{social}', 'Web\AuthenticationController@getSocialRedirect' )
      ->middleware('guest');
/*
|-------------------------------------------------------------------------------
| Social Login
|-------------------------------------------------------------------------------
| URL:            /login/{social}
| Controller:     Web\AuthenticationController@getSocialCallback
| Method:         GET
| Description:    Handles the callback from a social login request
*/
Route::get( '/login/{social}/callback', 'Web\AuthenticationController@getSocialCallback' )
      ->middleware('guest');