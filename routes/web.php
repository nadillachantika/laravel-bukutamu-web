<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KesanSaranController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');

    Route::resource('user', UserController::class);
    Route::resource('tamu', TamuController::class);
    Route::resource('kunjungan', KunjunganController::class);
    Route::resource('kesansaran', KesanSaranController::class);

    Route::get('/total-kunjungan', [DashboardController::class, 'getTotalKunjungan']);
    Route::get('/kunjungan-harian', [DashboardController::class, 'getKunjunganHarian']);
    Route::get('/kunjungan-bulanan', [DashboardController::class, 'getKunjunganBulanan']);
    Route::get('/kunjungan-tahunan', [DashboardController::class, 'getKunjunganTahunan']);
    Route::get('/total-tamu-per-bulan', [DashboardController::class, 'getTotalTamuPerBulan']);
});
