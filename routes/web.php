<?php

use Facade\FlareClient\View;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'App\Http\Controllers\UserController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/upload', 'App\Http\Controllers\UserController@uploadAvatar');

Route::get('/todos', 'App\Http\Controllers\TodoController@index');
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
Route::post('/todos/create', 'App\Http\Controllers\TodoController@store');
