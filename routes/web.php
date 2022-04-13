<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;


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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/diagnosa', function () {
    return view('diagnosa');
});
Route::get('/keloladiagnosa', function () {
    return view('admin.keloladiagnosa');
});
Route::get('/pengobatan', function () {
    return view('pengobatan');
});
Route::get('/kelolapengobatan', function () {
    return view('admin.kelolapengobatan');
});
Route::get('/history', function () {
    return view('admin.history');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
