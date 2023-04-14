<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/form', [HalamanController::class, 'Form'])->name('form');
Route::get('/tabel', [HalamanController::class, 'Tabel'])->name('Tabel');
Route::get('/tambah-data', [DataController::class, 'tambahdata'])->name('tambahdata');
Route::get('data_daerah', [DataController::class, 'index'])->name('index');
Route::delete('/data_daerah/{id_daerah}', [DataController::class, 'destroy']);
Route::post('/insert-data', [DataController::class, 'insertdata'])->name('insertdata');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';
