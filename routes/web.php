<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\insertController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/home', function () {
//     return view('app.home');
// });
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/validasi', [LoginController::class, 'validasi'])->name('validasi');
Route::post('/store', [insertController::class, 'store'])->name('store');


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/rekap-laporan', [HomeController::class, 'rekapLaporan']);
    Route::get('/create-user', [HomeController::class, 'createUser']);
});

Route::group(['middleware' => ['auth', 'ceklevel:user,admin']], function () {

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/scanqr', [HomeController::class, 'scanqr']);
    // Route::get('/create-user', [HomeController::class, 'createUser']);
});
