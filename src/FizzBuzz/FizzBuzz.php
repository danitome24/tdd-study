<?php

namespace App\FizzBuzz;

class FizzBuzz {
    const NUMBER_OF_ELEMENTS = 100;

    public function generate(): array {
        $representations = [];
        foreach (range(1, self::NUMBER_OF_ELEMENTS) as $num) {
            $representation = (string) $num;
            if ($num % 3 == 0) {
                $representation = 'Fizz';
            }
            $representations[] = $representation;
        }

        return $representations;
    }
}
