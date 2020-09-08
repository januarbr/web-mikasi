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
    return view('index');
});


Auth::routes();
Route::resource('/anggota','AnggotaController')->middleware(['auth','verified']);
Route::resource('/buku','BukuController')->middleware(['auth','verified']);
// Route::resource('/petugas','PetugasController');
Route::resource('/framework','FrameworkController')->middleware(['auth','verified']);
Route::resource('/matakuliah','MatakuliahController')->middleware(['auth','verified']);
Route::get('/tampil/{semester}','MatakuliahController@tampil')->middleware(['auth','verified']);
Route::get('/cari','MatakuliahController@cari');
Route::get('/deskripsi','DeskripsiController@index')->middleware(['auth','verified']);
Route::get('/Detailmateri/{id}','DetailmateriController@show')->middleware(['auth','verified']);
Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('/pinjam','PinjamController');
 
// Route::get('/active_pinjam/{id}','PinjamController@active_pinjam');



Route::prefix('admin')
->namespace('Admin')
->middleware(['auth','admin'])
->group(function(){
Route::get('/','DashboardController@index')
    ->name('dashboard');
    Route::resource('framework','FrameworkController');
 Route::resource('member','MemberController');
 Route::resource('buku','BukuController');
 Route::resource('materi','MateriController');
 Route::resource('transaction','TransactionController');
});
Auth::routes(['verify'=>true]);

