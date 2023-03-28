<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
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

Route::get('/',[HomeController::class, 'show']);
Route::get('/home',[HomeController::class, 'show']);

Route::get('/home_pegawai',[PegawaiController::class, 'index']);

Route::resource('pegawai', PegawaiController::class);

// Route get pegawai => index
// Route get pegawai/create => create
// Route post => pegawai => store
// Route get => pegawai/{id} => show
// Route put => pegawai/{id} => update
// Route delete => pegawai/{id} => delete
// Route get => pegawai/{id}/edit => edit









