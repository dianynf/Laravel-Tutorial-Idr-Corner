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
Route::delete('/deletecontact/{contact}', 'PageController@deletecontact')->name('delete.contact'); // {contact} untuk menangkap id ny

Route::get('/galeri', 'PageController@galeri');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show']]);
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show']]);
    //Route::get('/restore/{id}', 'UsersController@restore')->name('post.restore');
});

Route::resource('/prodi', 'ProdiController');
Route::resource('/beasiswa', 'BeasiswaController');
Route::resource('/informasi', 'InformasiController');
Route::resource('/alumni', 'AlumniController');
Route::resource('/profilealumni', 'ProfilealumniController');
// Route::resource('/mahasiswa', 'MahasiswaController');
