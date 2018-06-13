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

Route::get('/nerd/', function(){
    return '<h1>Listagem de produtos</h1>';
});

Route::get('/produtos/', 'produtoController@lista');
Route::get('/produtos/novo', 'produtoController@novo');
Route::post('/produtos/adiciona', 'produtoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');
//Route::get('/produtos/mostra/', 'produtoController@mostra');
Route::get('/produtos/mostra/{id}', 'produtoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'produtoController@remove')->where('id', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
