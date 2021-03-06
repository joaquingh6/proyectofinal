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

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/activity', 'ProductController@updatedActivity');

Route::get('/logout' , 'HomeController@logout')->name('logout');

Route::get('/admin' , 'AdminController@index');

Route::get('/admin/productos' , 'AdminController@productos')->name('admin.productos');

Route::get('/admin/users' , 'AdminController@usuarios')->name('admin.usuarios');

Route::get('/admin/rooms' , 'AdminController@rooms')->name('admin.rooms');

Route::get('/admin/categorias' , 'AdminController@categorias')->name('admin.categorias');

Route::get('perfil' , 'HomeController@perfil')->name('perfil');

Route::get('reservar' ,'ProductController@reservar');

Route::get('devolver/{id}' ,'ProductController@devolver');






//categorias

Route::get('category/destroy/{id}' , 'CategoryController@destroy');
Route::post('category/guardar/{id}','CategoryController@guardar');
Route::resource('/category' , 'CategoryController');

//productos
Route::get('product/destroy/{id}' ,'ProductController@destroy');
Route::post('product/guardar/{id}','ProductController@guardar');
Route::resource('/product' , 'ProductController');



//rooms
Route::get('room/destroy/{id}','RoomController@destroy');
Route::post('room/guardar/{id}' , 'RoomController@guardar');
Route::resource('/room','RoomController');


//User
Route::get('user/editar/{id}' , 'UserController@editar');
Route::get('user/destroy/{id}' , 'UserController@destroy');
Route::post('user/guardar/{id}' , 'UserController@guardar');
Route::resource('/User' , 'UserController');




