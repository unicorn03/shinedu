<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SubBabController;
use App\Http\Controllers\KuisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/materi', [MateriController::class,'index'])->name('materi.index');
    Route::get('/materi/{materi}', [MateriController::class,'show'])->name('materi.show');
    Route::get('/subbab/{subBab}', [SubBabController::class,'show'])->name('subbab.show');
    Route::get('/kuis/{kuis}',[KuisController::class,'show'])->name('kuis.show');
    Route::post('/kuis/{kuis}/submit', [KuisController::class,'submit'])->name('kuis.submit');
    Route::get('/kuis/hasil/{hasil}', [KuisController::class,'result'])->name('kuis.result');
});

require __DIR__.'/auth.php';
