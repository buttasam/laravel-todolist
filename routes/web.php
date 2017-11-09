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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "test";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasklist', function() {
    return view('tasklist');
});

Route::prefix('api')->group(function() {
    Route::resource('tasks', 'TaskController');
    Route::get('tasks/markAsDone/{id}','TaskController@markAsDone');
});

