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

Route::get('/', function () {
    return view('vendor.adminlte.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/financeiro', function(){
    return view('financeiro');
});

Route::resource('/cargos', 'CargoController');
Route::get('/cargos_adicionar', function() {
    return view('cargos.cargos_adicionar');
});
Route::get('/cargos/cargos_visualizar', function(){
    return view('cargos.cargos_visualizar');
});

Route::get('/cargos/cargos_visualizar/{id}', 'CargoController@show');
Route::put('/cargos/cargos_alterar/{id}','CargoController@update');
Route::delete('/cargos/cargos_deletar/{id}', 'CargoController@destroy');
