<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;

Route::get('/', [RomanNumeralsController::class, 'index'])->name('index');
