<?php

// Javaでいう package
namespace App\Http\Controllers;

// Javaでいう import
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() {
        return view('about');
    }
}
