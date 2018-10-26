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

Route::get('/', 'HomeController@welcome')->name('');

Auth::routes();

Route::get('/activity', 'ProductController@updatedActivity');

Route::get('/logout' , 'HomeController@logout')->name('logout');

Route::get('/admin' , 'AdminController@index');

Route::get('/admin/productos' , 'AdminController@productos');

Route::get('/admin/users' , 'AdminController@usuarios');

Route::get('/admin/rooms' , 'AdminController@rooms');

Route::get('/admin/categorias' , 'AdminController@categorias');

Route::get('perfil' , 'HomeController@perfil');

Route::get('reservar' ,'ProductController@reservar');

Route::get('devolver/{id}' ,'ProductController@devolver');






//categorias
Route::resource('/category' , 'CategoryController');
Route::get('category/destroy/{id}' , 'CategoryController@destroy');
Route::post('category/guardar/{id}','CategoryController@guardar');

//productos
Route::resource('/product' , 'ProductController');
Route::get('product/destroy/{id}' ,'ProductController@destroy');
Route::post('product/guardar/{id}','ProductController@guardar');


//rooms
Route::resource('/room','RoomController');
Route::get('room/destroy/{id}','RoomController@destroy');
Route::post('room/guardar/{id}' , 'RoomController@guardar');


//User
Route::resource('/User' , 'UserController');
Route::get('user/destroy/{id}' , 'UserController@destroy');
Route::post('user/guardar/{id}' , 'UserController@guardar');



