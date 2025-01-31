<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('home.index');
})->name('acceuil');

Route::get('/dashboard', function () {
    Auth::user();
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route pour les fichiers Home 
Route::resource('/docteur', DocteurController::class);
Route::resource('/reservation', ReservationController::class);
Route::get('/attente',[ReservationController::class, 'reservationEnAttente'])->middleware(['auth', 'verified'])->name('attente');
Route::get('/approuve',[ReservationController::class, 'reservationApprouve'])->middleware(['auth', 'verified'])->name('approuve');

require __DIR__.'/auth.php';
