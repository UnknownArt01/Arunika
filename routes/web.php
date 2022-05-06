<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/profil', [SiteController::class, 'profil'])->name('site.profil');
Route::get('/screening', [SiteController::class, 'screening'])->name('site.screening');
Route::get('/pengumpulan2', [SiteController::class, 'pengumpulan2'])->name('site.pengumpulan2');
Route::get('/panduan', [SiteController::class, 'panduan'])->name('site.panduan');
Route::get('/juri', [SiteController::class, 'juri'])->name('site.juri');
Route::get('/sponsor', [SiteController::class, 'sponsor'])->name('site.sponsor');