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
Route::resource('/estoque', 'EstoqueController');
Route::resource('/gastos', 'GastoController');
Route::resource('/entradas', 'EntradaController');
Route::resource('/usuarios', 'UsuarioController');
Route::resource('/funcionarios', 'FuncionarioController');

Route::get('/mesas', 'MesaController@index');
Route::get('/mesas_adicionar', 'MesaController@create');



Route::get('/mesasPadraoListagem', 'MesaPadraoController@index');
Route::get('/mesasPadrao_adicionar', function() {
    return view('mesasPadrao.adicionar');
});
Route::resource('/mesaPadrao', 'MesaPadraoController');

