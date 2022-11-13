<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tugas1Controller;
use App\Http\Controllers\PegawaiController;

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
//tugas 1
route::get('/tugas1',[Tugas1Controller::class, 'rusungo'])->name('tugas1');
//tugas 2 dan 3
route::resource('pegawai',PegawaiController::class);

route::get('tambahpegawai',[PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');

route::post('insertpegawai',[PegawaiController::class, 'insertpegawai'])->name('insertpegawai');

route::get('/delete/{id}',[PegawaiController::class, 'delete'])->name('delete');

route::get('tampilkandata/{id}',[PegawaiController::class, 'tampilkandata'])->name('tampilkandata');
route::post('updatedata/{id}',[PegawaiController::class, 'updatedata'])->name('updatedata');

//tugas 4
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return 'admin page';
    });
});