<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/hw', function () {

    return '<h1 style="color:blue;"">Hello World!</h1>';
});
//Route::get('/hw', 'StupidController@renderHW');
Auth::routes();

Route::get('/home', 'HomeController@index');
