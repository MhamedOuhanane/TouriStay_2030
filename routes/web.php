<?php

use App\Http\Controllers\AdmineController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TouristeController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/session.role', [RoleController::class, 'update'])->name('session.role')->middleware('auth');

Route::middleware('auth', 'role:touriste', 'redirect:touriste')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
    Route::post('/annonces', [AnnonceController::class, 'filtrage'])->name('Annonce.filtrage');
    Route::get('/profile.touriste', [TouristeController::class, 'edit'])->name('touriste.profile');
    Route::patch('/profile.touriste', [TouristeController::class, 'update'])->name('touriste.profile.update');
    Route::post('/annonce.favoris/{annonce}', [FavorisController::class, 'store'])->name('annonce.favoris');
    Route::get('/annonces/{annonce}', [AnnonceController::class, 'show'])->name('annonce.show');
    Route::get('/reservation/{annonce}', [ReservationController::class, 'create'])->name('reservation.form');
    Route::post('/touriste.reservation/{id}', [ReservationController::class, 'redirect'])->name('reservation.redirect');
    Route::get('/touriste.reservation', [ReservationController::class, 'store'])->name('reservation.store');

    Route::get('/touriste.reservation.stripe', [StripeController::class, 'checkout'])->name('reservation.stripe');
});

Route::middleware('auth', 'role:proprietaire', 'redirect:proprietaire')->group(function () {
    Route::get('/dashboard.owner', [ProprietaireController::class, 'index'])->name('owner.dashboard');
    Route::post('/dashboard.owner', [AnnonceController::class, 'store'])->name('dashboard.store');
    Route::delete('/dashboard.owner', [AnnonceController::class, 'destroy'])->name('annonce.SoftDelete');
    Route::get('/Annonces.edit', [AnnonceController::class, 'edit'])->name('annonce.edit');
    Route::patch('/Annonces.update', [AnnonceController::class, 'update'])->name('annonce.update');
    Route::get('/Annonces', [AnnonceController::class, 'create'])->name('annonce.create');
    Route::get('/profile', [ProprietaireController::class, 'edit'])->name('owner.profile');
    Route::patch('/profile', [ProprietaireController::class, 'update'])->name('owner.profile.update');
    Route::delete('/profile', [ProprietaireController::class, 'destroy'])->name('owner.profile.destroy');

    
    Route::get('/proprietaire.reservation', [ReservationController::class, 'index'])->name('reservation.index');
});

Route::middleware('auth', 'role:admine', 'redirect:admine')->group(function () {
    Route::get('/dashboard.admine', [AdmineController::class, 'index'])->name('admine.dashboard');

    Route::get('/admin.reservation', [ReservationController::class, 'index'])->name('reservations.admin');
    Route::get('/admin.utilisateur', [UserController::class, 'index'])->name('utilisateurs.admin');
    Route::get('/admin.annonce', [AnnonceController::class, 'index'])->name('annonce.admin');
    Route::get('/admin.annonce.update/{annonce}', [AnnonceController::class, 'update'])->name('admine.annonce.update');
});





require __DIR__.'/auth.php';
