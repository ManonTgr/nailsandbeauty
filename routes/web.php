<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// Définir la route 'main.home'
Route::get('/home', [MainController::class, 'index'])->name('main.home');

// Rediriger la racine '/' vers 'main.home'
Route::get('/', function () {
    return redirect()->route('main.home');
});

// Route::get('/', function () {
//     return view('home');
// });
