<?php

use App\Http\Controllers\AdmineController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\TouristeController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('auth', 'role:touriste', 'redirect:touriste')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
    Route::post('/annonces', [AnnonceController::class, 'filtrage'])->name('Annonce.filtrage');
    Route::get('/profile.touriste', [TouristeController::class, 'edit'])->name('touriste.profile');
    Route::post('/annonce.favoris', [AnnonceController::class, 'favoris'])->name('annonce.favoris');
    Route::patch('/profile.touriste', [TouristeController::class, 'edit'])->name('touriste.profile.update');
});

Route::middleware('auth', 'role:proprietaire', 'redirect:proprietaire')->group(function () {
    Route::get('/dashboard', [ProprietaireController::class, 'index'])->name('owner.dashboard');
    Route::post('/dashboard', [AnnonceController::class, 'store'])->name('dashboard.store');
    Route::delete('/dashboard', [AnnonceController::class, 'destroy'])->name('annonce.SoftDelete');
    Route::get('/Annonces.edit', [AnnonceController::class, 'edit'])->name('annonce.edit');
    Route::patch('/Annonces.update', [AnnonceController::class, 'update'])->name('annonce.update');
    Route::get('/Annonces', [AnnonceController::class, 'create'])->name('annonce.create');
    Route::get('/profile', [ProprietaireController::class, 'edit'])->name('owner.profile');
    Route::patch('/profile', [ProprietaireController::class, 'update'])->name('owner.profile.update');
    Route::delete('/profile', [ProprietaireController::class, 'destroy'])->name('owner.profile.destroy');
});

Route::middleware('auth', 'role:admine', 'redirect:admine')->group(function () {
    Route::get('/dashboard.admine', [AdmineController::class, 'creat'])->name('admine.dashboard');
});





require __DIR__.'/auth.php';
