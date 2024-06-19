<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{ 
    public function index()
    {
        return view('home'); // Retourne la vue 'home.blade.php'
    }

    public function index1()
    {
        return view('ateliers'); // Retourne la vue 'home.blade.php'
    }

    public function index2()
    {
        return view('tarifs'); // Retourne la vue 'tarif.blade.php'
    }
}