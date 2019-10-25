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

Route::get('admin/listagem', 'ListagemController@index')->name('listagem');

Route::get('admin/cadastrar', 'CadastrarController@index')->name('cadastrar');

Route::get('admin/editar/{user_id}', 'CadastrarController@edit')->name('editar');

Route::get('admin/excluir/{user_id}', 'CadastrarController@destroy')->name('excluir');

Route::resource('cadastrar', 'CadastrarController');



