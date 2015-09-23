<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PageController@getHome');
Route::get('/documentation/{version}/{page}', 'DocumentationController@getIndex');
Route::get('/documentation', function() {

  return Redirect::to('/documentation/1.0.0/installation');

});
Route::get('/screencasts/{version}', 'ScreencastController@getIndex');
Route::get('/screencasts', function() {

  return Redirect::to('/screencasts/1.0.0');

});
