<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * TOP画面：表示
     */
    public function top(Request $request) {
        return view('top.top');
    }
}
