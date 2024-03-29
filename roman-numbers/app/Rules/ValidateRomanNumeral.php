<?php

namespace App\Rules;

use App\Helper\HelperRomanNumeralsConverter;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidateRomanNumeral implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            if (is_string($value)) {
                $value = strtoupper($value);
            }
            if (!preg_match("^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$^", $value)) {
                $fail('The amount is not in Roman Numerals.');
            }
            if (HelperRomanNumeralsConverter::convertRomanNumeralsToInteger($value) >= 10000) {
                $fail('The amount is more than 100,000.');
            }
            if (HelperRomanNumeralsConverter::convertRomanNumeralsToInteger($value) <= 0) {
                $fail('The amount is less than 1.');
            }
        } catch (\Exception $e) {
            $fail('Invalid Input');
        }
    }
}
