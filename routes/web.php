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
