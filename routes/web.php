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


Route::get('/', 'PagesController@index');
Route::get('/addadmin', 'PagesController@addadmin');
Route::get('/reguser', ['as'=>'reguser','uses'=>'PagesController@reguser']);
Route::get('/regbus', 'PagesController@regbus');
Route::get('/regbusowner', 'PagesController@regbusowner');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


