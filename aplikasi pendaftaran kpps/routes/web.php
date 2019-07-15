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


Route::get('/about' , function(){
	return view('about');
});

// Route::get('/home' , function(){
// 	return view('frontend.home');
// });



//Route::get('/formulir' , function(){
//	return view('frontend.formulir');
//});

//Route::get('belajar','BelajarController@index');


//Route::get('karyawan','BelajarController@index');

// Route::get('home','homeController@index');
Route::get('login','Auth\LoginController@showLoginForm')->name('form.login');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('beranda','adminController@index')->name('beranda');
Route::get('anggota','anggotaController@index');
Route::get('/', 'pelamarController@index')->name('welcome');
Route::get('formulir', 'pelamarController@create')->name('formulir');
Route::post('formulir', 'pelamarController@store')->name('formulir.store');
Route::get('/pengumuman','PelamarController@hasil')->name('pengumuman.hasil');


Route::get('/pendidikan', 'pendidikanController@index')->name('pendidikan');
Route::get('/pendidikan/create', 'pendidikanController@create')->name('pendidikan.create');
Route::get('/pendidikan/edit', 'pendidikanController@edit')->name('pendidikan.edit');

Route::get('/datapendaftaran', 'datapendaftaranController@index')->name('datapendaftaran');
Route::get('/datapendaftaran/create', 'datapendaftaranController@create')->name('datapendaftaran.create');
Route::get('/datapendaftaran/edit', 'datapendaftaranController@edit')->name('datapendaftaran.edit');

Route::get('/datapendaftaran/tampil/{pelamar}', 'datapendaftaranController@show')->name('datapendaftaran.show');
Route::patch('/datapendaftaran/tampil/{pelamar}', 'datapendaftaranController@update')->name('datapendaftaran.update');

// Route::get('/upload', 'uploadController@index')->name('upload_dokumen');
// Route::get('/upload/create', 'uploadController@create')->name('upload_dokumen.create');
// Route::get('/upload/edit', 'uploadController@edit')->name('upload_dokumen.edit');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
