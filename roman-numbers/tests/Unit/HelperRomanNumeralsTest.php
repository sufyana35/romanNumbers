<?php

namespace Tests\Unit;

use App\Helper\HelperRomanNumeralsConverter;
use PHPUnit\Framework\TestCase;

class HelperRomanNumeralsTest extends TestCase
{
    public function testSingleDigit()
    {
        $this->assertEquals('I', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(1));
        $this->assertEquals('II', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(2));
        $this->assertEquals('III', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(3));
        $this->assertEquals('IV', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(4));
        $this->assertEquals('V', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(5));
        $this->assertEquals('VI', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(6));
        $this->assertEquals('VII', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(7));
        $this->assertEquals('VIII', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(8));
        $this->assertEquals('IX', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(9));
        $this->assertEquals('X', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(10));
    }

    public function testTens()
    {
        $this->assertEquals('XX', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(20));
        $this->assertEquals('XXX', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(30));
        $this->assertEquals('XL', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(40));
        $this->assertEquals('L', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(50));
        $this->assertEquals('LX', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(60));
        $this->assertEquals('LXX', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(70));
        $this->assertEquals('LXXX', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(80));
        $this->assertEquals('XC', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(90));
        $this->assertEquals('C', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(100));
    }

    public function testHundreds()
    {
        $this->assertEquals('CC', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(200));
        $this->assertEquals('CCC', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(300));
        $this->assertEquals('CD', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(400));
        $this->assertEquals('D', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(500));
        $this->assertEquals('DC', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(600));
        $this->assertEquals('DCC', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(700));
        $this->assertEquals('DCCC', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(800));
        $this->assertEquals('CM', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(900));
        $this->assertEquals('M', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(1000));
    }

    public function testThousands()
    {
        $this->assertEquals('MM', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(2000));
        $this->assertEquals('MMM', HelperRomanNumeralsConverter::convertIntegerToRomanNumerals(3000));
    }

    public function testValidRomanNumerals()
    {
        $testCases = [
            ['I', 1],
            ['IV', 4],
            ['IX', 9],
            ['XII', 12],
            ['XXIII', 23],
            ['XL', 40],
            ['C', 100],
            ['CM', 900],
            ['MCMV', 1905],
        ];

        foreach ($testCases as $testCase) {
            [$romanNumeral, $expectedInteger] = $testCase;
            $this->assertEquals($expectedInteger, HelperRomanNumeralsConverter::convertRomanNumeralsToInteger($romanNumeral));
        }
    }
}
