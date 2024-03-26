<?php

namespace App\Helper;


class HelperRomanNumeralsConverter
{
    public const MAPPING = [ 
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
  
        foreach (self::MAPPING as $value => $roman) { 
            while ($amount >= $value) { 
                $result .= $roman; 
                $amount -= $value; 
            } 
        } 
    
        return $result;
    }
}