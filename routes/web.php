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

Route::get('/', function(){
	return view('Welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){
	//ROLES
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create ');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index ');

	Route::post('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create ');

	Route::put('roles/{role}', 'RoleController@edit')->name('roles.update')
		->middleware('permission:roles.edit ');

	Route::post('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::post('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy ');

	Route::post('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit ');


	//USUARIOS	
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index ');		

	Route::put('users/{role}', 'UserController@edit')->name('users.update')
		->middleware('permission:users.edit ');

	Route::post('users/{role}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::post('users/{role}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy ');

	Route::post('users/{role}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit ');


	//DEPARTAMENTOS
	Route::post('departamentos/store', 'DepartamentoController@store')->name('departamentos.store')
		->middleware('permission:departamentos.create ');

	Route::get('departamentos', 'DepartamentoController@index')->name('departamentos.index')
		->middleware('permission:departamentos.index ');

	Route::post('departamentos/create', 'DepartamentoController@create')->name('departamentos.create')
		->middleware('permission:departamentos.create ');

	Route::put('departamentos/{role}', 'DepartamentoController@edit')->name('departamentos.update')
		->middleware('permission:departamentos.edit ');

	Route::post('departamentos/{role}', 'DepartamentoController@show')->name('departamentos.show')
		->middleware('permission:departamentos.show');

	Route::post('departamentos/{role}', 'DepartamentoController@destroy')->name('departamentos.destroy')
		->middleware('permission:departamentos.destroy ');

	Route::post('departamentos/{role}/edit', 'DepartamentoController@edit')->name('departamentos.edit')
		->middleware('permission:departamentos.edit ');
});