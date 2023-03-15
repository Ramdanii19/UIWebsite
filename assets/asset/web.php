<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','HomeController@index');

Route::get('/loginn', function () {
    return view('authh.login');
});



Route::get('/logout', function() {
    \Auth::logout();
    return redirect ('loginn');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD Siswa
Route::get('/siswa','SiswaController@index');
Route::get('/siswa/halaman_tambah','SiswaController@halaman_tambah');
Route::post('/siswa/tambah','SiswaController@tambah');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update','SiswaController@update');
Route::get('/siswa/hapus/{id}','SiswaController@hapus');

//CRUD Kelas
Route::get('/kelas','KelasController@index');
Route::post('/kelas/tambah','KelasController@tambah');
Route::get('/kelas/edit/{id}','KelasController@edit');
Route::post('/kelas/update','KelasController@update');
Route::get('/kelas/hapus/{id}','KelasController@hapus');

//CRUD Spp
Route::get('/spp','SppController@index');
Route::post('/spp/tambah','SppController@tambah');
Route::get('/spp/edit/{id}','SppController@edit');
Route::post('/spp/update','SppController@update');
Route::get('/spp/hapus/{id}','SppController@hapus');

//CRUD Petguas
Route::get('/petugas','PetugasController@index');
Route::post('/petugas/tambah','PetugasController@tambah');
Route::get('/petugas/edit/{id}','PetugasController@edit');
Route::post('/petugas/update','PetugasController@update');
Route::get('/petugas/hapus/{id}','PetugasController@hapus');

//CRUD Petguas
Route::get('/pembayaran','PembayaranController@index');
Route::post('/pembayaran/tambah','PembayaranController@tambah');
Route::get('/history','PembayaranController@indexhistory');