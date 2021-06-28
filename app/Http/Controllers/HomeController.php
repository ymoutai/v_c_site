<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home画面：表示
     */
    public function index(Request $request) {
        return view('home.index');
    }
}
