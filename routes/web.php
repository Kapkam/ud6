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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Auth::routes();
Route::get('/', 'BlogController@index')->name('welcome');
// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/posts', 'PostController');
Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/edit/{id}', 'AdminController@edit');
Route::get('/eliminar/{id}', 'AdminController@destroy');
Route::post('/update', 'AdminController@update')->name('adminUpdate');
Route::get('/editor', 'GestorController@index')->name('editor');
Route::get('/editor/create','GestorController@create')->name('create');
Route::get('/editor/{id}', 'GestorController@show')->name('show');
Route::get('/editor/edit/{id}', 'GestorController@edit')->name('edit');
Route::delete('/editor/destroy/{id}', 'GestorController@destroy')->name('destroy');
Route::post('/editor/update','GestorController@update')->name('update');
Route::post('/editor/store','GestorController@store')->name('store');
