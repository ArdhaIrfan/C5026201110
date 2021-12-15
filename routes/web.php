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

//tambahkan di sini untuk link route Tugas 4

Route::get('praktikum2', function () {
    return view('praktikum2');
});

Route::get('tugasjquery', function () {
    return view('tugasjquery');
});

//jika ternyata kasusnya butuh load banyak proses
Route::get('isiannama',"ViewController@showForm");
Route::post('greetings',"ViewController@resultGreetings");

Route::get('tugasPHP',"ViewController@tugasPHP");
//Route::post('greetings',"ViewController@resultGreetings");

Route::get('formETS',"ViewController@formETS");
Route::post('successful',"ViewController@uts_regist_successful");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{ID}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{ID}','TugasController@hapus');
Route::get('/tugas/cari','TugasController@cari');
Route::get('/tugas/view/{id}','TugasController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD
Route::get('/mouse','MouseController@index');
Route::get('/mouse/tambah','MouseController@tambah');
Route::post('/mouse/store','MouseController@store');
Route::get('/mouse/edit/{kodemouse}','MouseController@edit');
Route::post('/mouse/update','MouseController@update');
Route::get('/mouse/hapus/{kodemouse}','MouseController@hapus');
Route::get('/mouse/cari','MouseController@cari');
Route::get('/mouse/view/{kodemouse}','MouseController@detail');

//route CRUD KeranjangBelanja
Route::get('/keranjangbelanja','KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah','KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/edit/{ID}','KeranjangBelanjaController@edit');
Route::post('/keranjangbelanja/update','KeranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{ID}','KeranjangBelanjaController@hapus');
Route::get('/keranjangbelanja/cari','KeranjangBelanjaController@cari');
Route::get('/keranjangbelanja/view/{ID}','KeranjangBelanjaController@detail');
