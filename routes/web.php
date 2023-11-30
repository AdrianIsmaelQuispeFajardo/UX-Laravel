<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SyllableController;

Route::view('/','search')->name('search');
//Route::get('/',[PdfController::class, 'index'])->name('welcome');
//  Route::view('/login','login')->name('login');
//Route::view('/upload','upload')->name('upload');
Route::get('/download',[PdfController::class, 'download'])->name('download');
Route::get('/syllable',[SyllableController::class, 'getData'])->name('syllable');
Route::get('/syllable',[SyllableController::class, 'index'])->name('syllable.index');
//Route::get('/syllable/create',[SyllableController::class, 'create'])->name('syllable.create');
//Route::post('/syllable/store',[SyllableController::class, 'store'])->name('syllable.store');
Route::get('/upload',[SyllableController::class, 'index'])->name('upload.index');
Route::get('/upload',[SyllableController::class, 'create'])->name('upload');
Route::post('/upload',[SyllableController::class, 'store'])->name('upload');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
