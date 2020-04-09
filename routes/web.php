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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//pessoa
Route::resource('/pessoas', 'PessoaController', ['except' => ['destroy']]);
Route::get('/pessoas/{pessoa}/delete', 'PessoaController@destroy')->name('pessoas.destroy');
//perfil
Route::resource('/perfis', 'PerfilController', ['except' => ['destroy']]);
Route::get('/perfis/{perfil}/delete', 'PerfilController@destroy')->name('perfis.destroy');
//funcionalidades
Route::resource('/funcionalidades', 'FuncionalidadeController', ['except' => ['destroy']]);
Route::get('/funcionalidades/{funcionalidade}/delete', 'FuncionalidadeController@destroy')->name('funcionalidades.destroy');
//funcionalidades
Route::resource('/produtos', 'ProdutoController', ['except' => ['destroy']]);
Route::get('/produtos/{produto}/delete', 'ProdutoController@destroy')->name('produtos.destroy');
