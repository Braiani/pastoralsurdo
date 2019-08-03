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

Route::group(['middleware' => ['setPageNavbar', 'setFilesDownload']], function () {
    Route::get('/', 'PublicPagesController@index')->name('home');
    Route::get('/pagina/{page}', 'PublicPagesController@page')->name('pagina');
    Route::get('/noticia/{post}', 'NewsController@single')->name('noticia');
    Route::get('/noticias', 'NewsController@showAll')->name('noticias.all');
    Route::get('/noticias/q', 'NewsController@search')->name('noticias.search');
    Route::get('/contato', 'PublicPagesController@getContato')->name('contato');
    Route::post('/contato', 'PublicPagesController@postContato')->name('contato');
    Route::resource('/galeria', 'GalleryController')->only(['index', 'show']);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
