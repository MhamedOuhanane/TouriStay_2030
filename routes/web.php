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


Route::middleware('auth', 'role:touriste')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
    Route::get('/profile.touriste', [TouristeController::class, 'index'])->name('touriste.profile');
});

Route::middleware('auth', 'role:proprietaire', 'redirect:proprietaire')->group(function () {
    Route::get('/dashbord', [ProprietaireController::class, 'index'])->name('owner.dashbord');
    Route::post('/dashbord', [AnnonceController::class, 'store'])->name('owner.annonce.store');
    Route::get('/profile', [ProprietaireController::class, 'edit'])->name('owner.profile');
    Route::patch('/profile', [ProprietaireController::class, 'update'])->name('owner.profile.update');
    Route::delete('/profile', [ProprietaireController::class, 'destroy'])->name('owner.profile.destroy');
});

Route::middleware('auth', 'role:admine')->group(function () {
    Route::get('/dashbord.admine', [AdmineController::class, 'creat'])->name('admine.dashbord');
});





require __DIR__.'/auth.php';
