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

Route::get('/', 'HomeController@wellcome');

Auth::routes();

Route::get('/tasklist/{listId}', 'HomeController@tasklist');

Route::prefix('api')->group(function() {
    Route::get('tasks/{listId}','TaskController@index');
    Route::get('tasks/markAsDone/{id}','TaskController@markAsDone');
    Route::resource('tasks', 'TaskController');
});


Route::post('/saveList', 'HomeController@saveList');