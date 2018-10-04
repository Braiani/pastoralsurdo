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

Route::get('/', 'PublicPagesController@index')->name('home');
Route::get('/pagina/{slug}', 'PublicPagesController@page');
Route::get('/noticia/{slug}', 'PublicPagesController@news')->name('noticia');
Route::get('/contato', 'PublicPagesController@getContato')->name('contato');
Route::post('/contato', 'PublicPagesController@postContato');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
