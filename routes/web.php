<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content;
use App\Http\Controllers\Form;
use App\Http\Controllers\BarangController;

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

Route::get('/', [Content::class, 'index']);
Route::get('/form', [Form::class, 'index']);
Route::get('/table', [BarangController::class, 'index'])->name('barangs.index'); // Menambahkan nama rute

Route::get('/table/{id}/edit', [BarangController::class, 'edit'])->name('barangs.edit'); // Menambahkan rute untuk edit
Route::put('/table/{id}', [BarangController::class, 'update'])->name('barangs.update'); // Menambahkan rute untuk update
Route::delete('/table/{id}', [BarangController::class, 'destroy'])->name('barangs.destroy'); // Menambahkan rute untuk delete

Route::post('/proses', [Form::class, 'store']);
