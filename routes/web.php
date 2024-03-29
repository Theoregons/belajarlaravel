<?php

use App\Http\Controllers\SiswaController;
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
    return view('welcome');
});

Route::get('hello/{nama}/{nama2}', function () {
    return 'haloo';
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('admin', function () {
    return view('template');
});

Route::get('table', function () {
    return view('table');
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class);
