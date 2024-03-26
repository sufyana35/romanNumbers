<?php

namespace App\Http\Controllers;

use App\Helper\RomanNumeralsConverterHelper;
use App\Http\Requests\IntegerToRomanNumeralsRequest;
use Illuminate\View\View;

class RomanNumeralsController extends Controller
{
    /**
     * Show the home page
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Integer to Roman Numerals
     */
    public function encodeRomanNumerals(IntegerToRomanNumeralsRequest $request): View
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        // If validation passes then convert amount to roman numerals
        if($validated) {
            $amountToRomanNumeral = RomanNumeralsConverterHelper::convertIntegerToRomanNumerals($validated['integerAmount']);
        }

        return view('integer_to_roman_numerals', [
            'amountToRomanNumeral' => $amountToRomanNumeral ?? null
        ]);
    }

    /**
     * Roman Numerals to Integer
     */
    public function decodeRomanNumerals(): View
    {
        return view('roman_numerals_to_integer', [
            'user' => ''
        ]);
    }
}
