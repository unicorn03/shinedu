<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SubBabController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('landing'); // halaman depan (tanpa login)
})->name('landing');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/materi/{materi}', [MateriController::class,'show'])->name('materi.show');
    // Route::get('/subbab/{subBab}', [SubBabController::class,'show'])->name('subbab.show');
    Route::prefix('materi')->group(function(){
        Route::get('/', [MateriController::class,'index'])->name('materi.index');
        Route::get('/{materi:slug}', [MateriController::class, 'showMateri'])->name('materi.show');
        Route::get('/{materi:slug}/subbab/{subbab:slug}', [MateriController::class, 'showSubbab'])->name('subbab.show');
        Route::get('/{materi:slug}/kuis/{kuis:slug}', [MateriController::class, 'showKuis'])->name('kuis.show');
    }); 
    Route::get('/kuis/{kuis}',[KuisController::class,'show'])->name('kuis.detail');
    Route::post('/kuis/{kuis:slug}/submit', [KuisController::class,'submit'])->name('kuis.submit');Route::get('/kuis/hasil/{hasil}', [KuisController::class,'result'])->name('kuis.result');
    Route::get('/penghargaan', [AwardsController::class, 'show'])
        ->name('awards.show');
    Route::get('/awards/data', [AwardsController::class, 'index'])
        ->name('awards.data');
    Route::post('/awards/check', [AwardsController::class, 'checkAndGrant'])
        ->name('awards.check');
    Route::post('/materi/{id}/complete', [SubBabController::class, 'completeMateri'])
        ->name('materi.complete');
    
    
});

require __DIR__.'/auth.php';
