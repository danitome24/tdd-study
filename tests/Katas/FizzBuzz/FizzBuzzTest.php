<?php

namespace Tests\App\Katas\FizzBuzz;

use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    const NUMBER_OF_ELEMENTS = 100;

    /** @test */
    public function generateShouldReturnFixedNumberOfElements() {
        $fizzBuzz = new FizzBuzz();
        $this->assertCount(self::NUMBER_OF_ELEMENTS, $fizzBuzz->generate());
    }
}
