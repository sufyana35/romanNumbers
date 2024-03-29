<?php

namespace App\Helper;


class HelperRomanNumeralsConverter
{
    /**
     * Convert integer to roman numerals
     *
     * @param int $amount
     *
     * @return string
     */
    public static function convertIntegerToRomanNumerals(int $amount): string
    {
        $result = ''; 
        $mapping = [ 
            1000 => 'M', 
            900 => 'CM', 
            500 => 'D', 
            400 => 'CD', 
            100 => 'C', 
            90 => 'XC', 
            50 => 'L', 
            40 => 'XL', 
            10 => 'X', 
            9 => 'IX', 
            5 => 'V', 
            4 => 'IV', 
            1 => 'I'
        ];
  
        foreach ($mapping as $value => $roman) { 
            while ($amount >= $value) { 
                $result .= $roman; 
                $amount -= $value; 
            } 
        } 
    
        return $result;
    }

    /**
     * Convert Roman Numeral To Integer
     *
     * @param string $romanNumeral
     * 
     * @return integer
     */
    public static function convertRomanNumeralsToInteger(string $romanNumeral): int
    {
        $roman_values = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        
        $result = 0;
        $prev = null;
        
        for ($i = strlen($romanNumeral) - 1; $i >= 0; $i--) {
            $current = $roman_values[$romanNumeral[$i]];
            $result += $current * ($current >= $prev ? 1 : -1);
            $prev = $current;
        }
    
        return $result;
    }
}