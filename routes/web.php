<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArsipSuratController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('arsip-surat.index');
// });

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/', [ArsipSuratController::class, 'index'])->name('arsip-surat.index');


Route::get('/arsip-surat/create', [ArsipSuratController::class, 'create'])->name('arsip-surat.create');

Route::post('/arsip-surat/store', [ArsipSuratController::class, 'store'])->name('arsip-surat.store');

Route::post('/arsip-surat/edit', [ArsipSuratController::class, 'edit'])->name('arsip-surat.edit');

Route::get('/arsip-surat/{arsip_surat}/show', [ArsipSuratController::class, 'show'])->name('arsip-surat.show');

Route::put('/arsip-surat/{arsip_surat}/update', [ArsipSuratController::class, 'update'])->name('arsip-surat.update');

Route::get('/arsip-surat/{arsip_surat}/delete', [ArsipSuratController::class, 'destroy'])->name('arsip-surat.destroy');

Route::get('/arsip-surat/download/{arsip_surat}', [ArsipSuratController::class, 'download'])->name('arsip-surat.download');

