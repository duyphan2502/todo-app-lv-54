<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AppController@getIndex')->name('web.index.get');
Route::get('/category/{id}', 'AppController@getCategoryDetails')->name('web.category-details.get');
Route::get('/delete-task/{id}', 'AppController@getDeleteTask')->name('web.delete-task.get');
