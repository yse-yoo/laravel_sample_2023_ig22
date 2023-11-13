<?php

// Javaでいう package
namespace App\Http\Controllers;

// Javaでいう import
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() {
        // resouces/views/about.blade.php が表示
        return view('about');
    }

    public function search(Request $request) {
        $data = [
            'keyword' => $request->q
        ];
        return view('search', $data);
    }

    public function update(Request $request, $id) {
        return $id;
    }
}
