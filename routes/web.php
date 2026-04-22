<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IkanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KolamController;
use App\Http\Controllers\PindahIkanController;

/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('auth.login');
});

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email / Password salah'
    ]);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

/*
|--------------------------------------------------------------------------
| SETELAH LOGIN (Protected Routes)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::resource('ikan', IkanController::class)->middleware('auth');

// Kolam routes
Route::resource('kolam', KolamController::class)->middleware('auth');

// Akun routes
Route::get('/akun', function () {
    $user = Auth::user();
    return view('layouts.akun', compact('user'));
})->middleware('auth')->name('akun');

// Pengaturan routes
Route::get('/pengaturan', function () {
    $user = Auth::user();
    return view('layouts.pengaturan', compact('user'));
})->middleware('auth')->name('pengaturan');

// Laporan Stok routes
Route::get('/laporan-stok', function () {
    return view('layouts.laporan-stok');
})->middleware('auth')->name('laporan-stok');

// Riwayat Stok routes
Route::get('/riwayat-stok', function () {
    return view('layouts.riwayat-stok');
})->middleware('auth')->name('riwayat-stok');

// Kurangi Stok routes
Route::get('/kurangi-stok', function () {
    return view('layouts.kurangi-stok-ikan');
})->middleware('auth')->name('kurangi-stok');

// Pindah Ikan routes
Route::get('/pindah-ikan', [PindahIkanController::class, 'index'])
    ->middleware('auth')
    ->name('pindah-ikan');

Route::post('/pindah-ikan', [PindahIkanController::class, 'store'])
    ->middleware('auth')
    ->name('pindah-ikan.store');

// Notifikasi routes
Route::get('/notifikasi', function () {
    return view('layouts.notifikasi');
})->middleware('auth')->name('notifikasi');

// Lupa Password routes
Route::get('/lupa-password', function () {
    return view('auth.lupa_password');
})->middleware('auth')->name('lupa-password');
