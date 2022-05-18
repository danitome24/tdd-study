<?php

namespace Tests\App\Katas\FizzBuzz;

use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    /** @test */
    public function canInstantiateFizzBuzz() {
        $this->assertTrue(class_exists(FizzBuzz::class), 'Class FizzBuzz does not exists yet.');
    }
}
