<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// Définir la route 'main.home'
Route::get('/home', [MainController::class, 'index'])->name('main.home');

// Rediriger la racine '/' vers 'main.home'
Route::get('/', function () {
    return redirect()->route('main.home');
});

// Rediriger la racine '/' vers 'main.ateliers'

Route::get('/ateliers', [MainController::class, 'ateliers'])->name('main.ateliers');

Route::get('/tarifs', [MainController::class, 'tarifs'])->name('main.tarifs');

Route::get('/rendezvous', [MainController::class, 'rendezvous'])->name('main.rendezvous');

Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');
// Route::get('/', function () {
//     return view('home');
// });
