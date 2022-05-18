<?php

namespace App\FizzBuzz;

class FizzBuzz {
    const NUMBER_OF_ELEMENTS = 100;

    public function generate(): array {
        $numberList = range(1, self::NUMBER_OF_ELEMENTS);

        foreach ($numberList as $num) {
            $representation = (string) $num;
            $numberList[$num - 1] = $representation;
        }

        return $numberList;
    }
}
