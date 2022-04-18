<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PengobatanController;

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
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/diagnosa', function () {
    return view('diagnosa');
});
//Gejala
Route::get('/keloladiagnosa', [GejalaController::class, 'index'])->name('gejala');
Route::post('/gejala', [GejalaController::class, 'create']);

Route::get('/pengobatan', function () {
    return view('pengobatan');
});

//Pengobatan Admin
Route::get('/kelolapengobatan', [PengobatanController::class, 'index'])->name('pengobatan');
Route::post('/kelolapengobatan', [PengobatanController::class, 'create']);

//History
Route::get('/history', function () {
    return view('admin.history');
});

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');
