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

Route::any('usuarios', 'UsuariosController@index');



Route::group(['middleware' => 'web'], function (){

	Route::get('/', 'HomeController@index');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Route::any('clientes', 'ClientesController@index');
	Route::any('clientes/novo', 'ClientesController@novo');
	Route::any('clientes/{cliente}/editar', 'ClientesController@editar');
	Route::any('clientes/salvar', 'ClientesController@salvar');

});