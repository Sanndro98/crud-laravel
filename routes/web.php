<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pertanyaan','PertanyaanController@index')->name('pertanyaan.index');
Route::get('/pertanyaan/create','PertanyaanController@create')->name('pertanyaan.create');
Route::post('/pertanyaan','PertanyaanController@store')->name('pertanyaan.store');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit')->name('pertanyaan.edit');
Route::patch('/pertanyaan/{id}/edit','PertanyaanController@update')->name('pertanyaan.update');
Route::get('/pertanyaan/{id}','PertanyaanController@show')->name('pertanyaan.show');
Route::delete('/pertanyaan/{id}/delete','PertanyaanController@delete')->name('pertanyaan.delete');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store')->name('jawaban.store');
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index')->name('jawaban.index');
