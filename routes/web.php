<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediaController;

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



// Menghapus route duplikat dan memastikan middleware group tidak tumpang tindih
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/update', function () {
        return view('admin.update');
    });
});


