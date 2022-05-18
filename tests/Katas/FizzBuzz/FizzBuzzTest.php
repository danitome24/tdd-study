<?php

namespace Tests\App\Katas\FizzBuzz;

use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    /** @test */
    public function canCallGenerateMethod() {
        $this->assertTrue(method_exists(FizzBuzz::class, 'generate'), 'Method generate does not exists yet.');
    }
}
