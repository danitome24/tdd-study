<?php

namespace App\RomanNumerals;

class RomanNumerals {
    private const SYMBOLS = [
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

    public function toRoman(int $number): string {
        $arabic = $number;
        $roman = '';
        foreach (self::SYMBOLS as $sub => $symbol) {
            while ($arabic >= $sub) {
                $roman .= $symbol;
                $arabic = $arabic - $sub;
            }
        }

        return $roman;
    }
}
