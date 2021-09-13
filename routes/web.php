<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AspirasiController;

use App\Http\Controllers\PenController;
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


Route::get('/', [AspirasiController::class,'lapor']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('/postlogin',[AuthController::class, 'postlogin']);
Route::POST('/postregister',[AuthController::class,'postregister']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/datapetugas',[AuthController::class, 'index']);
Route::get('/dashboard/tambah/admin',[AuthController::class,'add']);
Route::get('/petugas/{id}/delete',[AuthController::class,'delete']);
//Penduduk
Route::get('/datapenduduk',[PenController::class,'index']);
Route::get('/dashboard/tambah/penduduk',[PenController::class,'add']);
Route::POST('/storependuduk',[PenController::class,'store']);
Route::get('/penduduk/{id}/edit',[PenController::class,'edit']);
Route::get('/penduduk/{id}/delete',[PenController::class,'delete']);
Route::POST('/penduduk/{id}/update',[PenController::class,'update']);
//Kategori
Route::get('/datakategori',[KategoriController::class,'index']);
Route::get('/dashboard/tambah/kategori',[KategoriController::class,'add']);
Route::POST('/storekategori',[KategoriController::class,'store']);
Route::get('/kategori/{id}/delete',[KategoriController::class,'delete']);
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit']);
Route::POST('/kategori/{id}/update',[KategoriController::class,'update']);
//Lapor
Route::get('/lapor',[AspirasiController::class, 'lapor']);
Route::POST('/postlapor',[AspirasiController::class,'postlapor']);
Route::get('/aspirasimasyarakat',[AspirasiController::class,'index']);
Route::get('/aspirasi/{id}/proses',[AspirasiController::class,'proses']);
Route::get('/aspirasi/{id}/selesai',[AspirasiController::class,'selesai']);
//Riwayat Aspirasi
Route::get('/riwayat',[AspirasiController::class,'riwayat']);
Route::get('/history/riwayat',[AspirasiController::class,'indexriw']);
Route::get('/riwayat/{id}/aspirasi',[AspirasiController::class,'datariwayat']);
Route::POST('/riwayat/{id}/feedback',[AspirasiController::class,'feedback']);

Route::post('/inputtgl', [AspirasiController::class, 'aspirasitanggal'])->name('aspirasi.tgl');
Route::post('/inputbulan', [AspirasiController::class, 'aspirasibulan'])->name('aspirasi.bulan');
Route::post('/inputkategori', [AspirasiController::class, 'aspirasikategori'])->name('aspirasi.kategori');

Route::get('/global', function(){
return view('layouts.app');
});
Route::get('/logout', function(){
    Auth::logout();
    return redirect('');
})->name('logout.logout');