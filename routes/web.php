<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentifikasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\KepribadianController;
use App\Http\Controllers\Admin\PembelajaranController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HistoryController;

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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//diagnosa
Route::get('/identifikasi', [IdentifikasiController::class, 'index']);
Route::post('/check', [IdentifikasiController::class, 'check']);
// Route::get('/hasilIdentifikasi', [IdentifikasiController::class, 'hasil']);


//Sifat
Route::get('/kelolaKepribadian', [KepribadianController::class, 'index'])->name('kepribadian')->middleware('auth');
Route::post('/kelolaKepribadian/delete/{id}', [KepribadianController::class, 'destroy'])->middleware('auth');
Route::get('/createKepribadian', [KepribadianController::class, 'indexCreate'])->middleware('auth');
Route::post('/kelolaKepribadian', [KepribadianController::class, 'create'])->middleware('auth');
Route::get('/kelolaKepribadian/edit/{id}', [KepribadianController::class, 'edit'])->middleware('auth');
Route::post('/kelolaKepribadian/update', [KepribadianController::class, 'update'])->middleware('auth');
// Route::get('/updateIdentifikasi', function () {
//     return view('admin.updateIdentifikasi');
// });

//Tipe Belajar
Route::get('/kelolaPembelajaran', [PembelajaranController::class, 'index'])->name('kepribadian')->middleware('auth');
Route::post('/kelolaPembelajaran/delete/{id}', [PembelajaranController::class, 'destroy'])->middleware('auth');
Route::get('/kelolaPembelajaran/add', [PembelajaranController::class, 'indexCreate'])->middleware('auth');
Route::post('/kelolaPembelajaran', [PembelajaranController::class, 'create'])->middleware('auth');
Route::get('/kelolaPembelajaran/edit/{id}', [PembelajaranController::class, 'edit'])->middleware('auth');
Route::post('/kelolaPembelajaran/update', [PembelajaranController::class, 'update'])->middleware('auth');
// Route::get('/kelolaPembelajaran', function () {
//     return view('admin.kelolaPembelajaran');
// });



//History
Route::get('/history', [HistoryController::class, 'index'])->middleware('auth');
// Route::get('/history', function () {
//     return view('admin.history');
// });

Route::get('/cetak-hasil', function () {
    return view('cetak-hasil');
});
Route::get('/profile_admin', function () {
    return view('admin.profile_admin');
});

Route::get('/hasilIdentifikasi', function () {
    return view('pengunjung.hasilIdentifikasi');
});

Route::get('/isiDataPribadi', function () {
    return view('pengunjung.isiDataPribadi');
});

Route::get('/kepribadian', function () {
    return view('pengunjung.kepribadian');
});

// Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');

Route::get('dashboard_pengunjung', function (){
    return view('pengunjung.dashboard_pengunjung');
});

Route::get('datapribadi', function (){
    return view('pengunjung.datapribadi ');
});

Route::get('identifikasi', function (){
    return view('pengunjung.identifikasi ');
});

Route::get('faqimile', function (){
    return view('pengunjung.faqimile ');
});

//Admin
Route::get('layananKepribadian', function (){
    return view('admin.layananKepribadian ');
});
Route::get('createLayananKepribadian', function (){
    return view('admin.createLayananKepribadian ');
});
Route::get('updateLayananKepribadian', function (){
    return view('admin.updateLayananKepribadian ');
});

Route::get('layananPertanyaan', function (){
    return view('admin.layananPertanyaan ');
});

Route::get('balasPertanyaan', function (){
    return view('admin.balasPertanyaan ');
});
