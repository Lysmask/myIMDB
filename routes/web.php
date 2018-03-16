<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UserController@index');
<<<<<<< HEAD
Route::get('/users/{user}', 'UserController@show');
=======
>>>>>>> 614d8379ba1e7c474a4eb96def02379783ec9cc6
