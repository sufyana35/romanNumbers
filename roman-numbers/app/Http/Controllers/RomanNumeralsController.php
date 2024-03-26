<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RomanNumeralsController extends Controller
{
    /**
     * Show the home page
     */
    public function index(): View
    {
        return view('index', [
            'user' => ''
        ]);
    }
}
