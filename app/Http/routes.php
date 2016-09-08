<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/','frontController@index');
Route::get('/','loginController@index');
Route::get('index','frontController@index');
Route::get('admin','frontController@admin');

Route::resource('usuario', 'UsuarioController');
// Route::get('usuario/cretae/{id}','UsuarioController@getCodigoEmp');
Route::resource('sucursal','SucursalController');
Route::resource('empleado','EmpleadoController');
Route::resource('cargo','CargoController');
Route::resource('proveedor', 'ProveedorController');
Route::resource('categoria', 'CategoriaController');
Route::resource('producto', 'ProductoController');