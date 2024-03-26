<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;

Route::get('/', [RomanNumeralsController::class, 'index'])->name('index');
Route::match(['get', 'post'], '/encode-roman-numerals', [RomanNumeralsController::class, 'encodeRomanNumerals'])->name('encodeRomanNumerals');
Route::match(['get', 'post'], '/decode-roman-numerals', [RomanNumeralsController::class, 'decodeRomanNumerals'])->name('decodeRomanNumerals');
