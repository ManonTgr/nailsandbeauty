<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{ 
    public function index()
    {
        return view('home'); // Retourne la vue 'home.blade.php'
    }

    public function ateliers()
    {
        return view('ateliers'); // Retourne la vue 'home.blade.php'
    }

    public function tarifs()
    {
        return view('tarifs'); // Retourne la vue 'tarif.blade.php'
    }

    public function contact()
    {
        return view('contact'); // Retourne la vue 'tarif.blade.php'
    }
}