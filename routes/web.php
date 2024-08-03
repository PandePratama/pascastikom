<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PengumumanController;

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

// Public Routes
Route::get('/', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/akademik', function () {
    return view('akademik');
});
Route::get('/media', function () {
    return view('media');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});
Route::get('/akreditasi', function () {
    return view('akreditasi');
});
Route::get('/prodi', function () {
    return view('prodi');
});
Route::get('/kerjasama', function () {
    return view('kerjasama');
});
Route::get('/tampil_pengumuman', [PengumumanController::class, 'indexUser']);

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
Route::post('/submit', [FormDataController::class, 'store'])->name('submit');
Route::get('/media', [MediaController::class, 'media']);


Route::get('/media', [MediaController::class, 'media'])->name('media.index');
Route::post('/media', [MediaController::class, 'store'])->name('media.store');
Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('media.destroy');
Route::delete('/media', [MediaController::class, 'deleteAll'])->name('media.deleteAll');
Route::get('/media/{id}/edit', [MediaController::class, 'edit'])->name('media.edit');
Route::put('/media/{id}', [MediaController::class, 'update'])->name('media.update');
Route::get('/media', [MediaController::class, 'showMedia']);
Route::get('/mediaall', [MediaController::class, 'showAllMedia']);

Route::get('/media', [MediaController::class, 'showMedia'])->name('media.index');
Route::get('/mediaall', [MediaController::class, 'showAllMedia'])->name('media.all');
Route::get('/medialess', [MediaController::class, 'showLessMedia'])->name('media.less');




// Pengumuman Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/pengumuman', [PengumumanController::class, 'indexAdmin'])->name('pengumuman.index');
    Route::get('/update_pengumuman', [PengumumanController::class, 'create']);
    Route::get('/pengumuman', [PengumumanController::class, 'indexAdmin']);
    Route::get('/tampil_pengumuman', [PengumumanController::class, 'indexUser']);
    Route::post('/update_pengumuman', [PengumumanController::class, 'store'])->name('submit2');       
    Route::post('/update_pengumuman/{id}', [PengumumanController::class, 'store'])->name('update_pengumuman'); 
    Route::post('/submit2', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('delete_pengumuman');
});


// Admin Routes with Middleware
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/update', function () {
        return view('admin.update');
    });
});

