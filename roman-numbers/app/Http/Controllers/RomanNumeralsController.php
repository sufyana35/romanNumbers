<?php

namespace App\Http\Controllers;

use App\Helper\HelperRomanNumeralsConverter;
use App\Http\Requests\IntegerToRomanNumeralsRequest;
use App\Http\Requests\RomanNumeralsToIntegerRequest;
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
     * Integer to Roman Numeral Amount Converter
     *
     * @param IntegerToRomanNumeralsRequest $request
     * 
     * @return View
     */
    public function encodeRomanNumerals(IntegerToRomanNumeralsRequest $request): View
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        // If validation passes then convert amount to roman numerals
        if($validated) {
            $amountToRomanNumeral = HelperRomanNumeralsConverter::convertIntegerToRomanNumerals($validated['integerAmount']);
        }

        return view('integer_to_roman_numerals', [
            'amountToRomanNumeral' => $amountToRomanNumeral ?? null
        ]);
    }

    /**
     * Roman Numerals to Integer
     */
    public function decodeRomanNumerals(RomanNumeralsToIntegerRequest $request): View
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        // If validation passes then convert amount to roman numerals
        if($validated) {
            $amountToInteger = HelperRomanNumeralsConverter::convertRomanNumeralsToInteger(strtoupper($validated['romanNumeralsAmount']));
        }

        return view('roman_numerals_to_integer', [
            'amountToInteger' => $amountToInteger ?? null
        ]);
    }
}
