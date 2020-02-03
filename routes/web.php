<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains  the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'PageController@about')->name('tentangsaya');
Route::get('/contacts', 'PageController@contacts')->name('contacts');
Route::get('/tambahcontact', 'PageController@tambahcontact')->name('tambah.contact');
Route::post('/prosestambah', 'PageController@prosestambah')->name('proses.tambah');
Route::get('/editcontact/{contact}', 'PageController@editcontact')->name('edit.contact');
Route::patch('/editcontact/{contact}', 'PageController@prosesedit')->name('proses.edit');


Route::get('/galeri', 'PageController@galeri');
