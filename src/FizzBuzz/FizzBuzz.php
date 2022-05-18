<?php

namespace App\FizzBuzz;

class FizzBuzz {
    const NUMBER_OF_ELEMENTS = 100;

    public function generate() {
        return array_fill(0, self::NUMBER_OF_ELEMENTS, '1');
    }
}
