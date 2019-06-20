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
Route::get('/mahasiswas','MahasiswasController@index');
Route::post('/mahasiswas/create','MahasiswasController@create');
Route::get('/mahasiswas/{id}/edit','MahasiswasController@edit');
Route::post('/mahasiswas/{id}/update','MahasiswasController@update');
Route::get('/mahasiswas/{id}/delete','MahasiswasController@delete');