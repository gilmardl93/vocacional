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

Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/','InscripcionController@index');
Route::post('registrar','InscripcionController@registrar');
