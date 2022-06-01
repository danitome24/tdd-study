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

    /** @test */
    public function numberIsRepresentedAsItself() {
        $this->assertNumberIsRepresentedAsItself(1, '1');
        $this->assertNumberIsRepresentedAsItself(2, '2');
    }

    private function assertNumberIsRepresentedAsItself(int $number, string $representation): void {
        $fizzBuzz = new FizzBuzz();
        $numberList = $fizzBuzz->generate();
        $this->assertEquals($representation, $numberList[$number - 1]);
    }

    /** @test */
    public function threeAndMultiplesAreRepresentedAsFizz() {
        $this->assertNumberIsRepresentedAsItself(3, 'Fizz');
        $this->assertNumberIsRepresentedAsItself(6, 'Fizz');
    }

    /** @test */
    public function fiveAndMultiplesAreRepresentedAsBuzz() {
        $this->assertNumberIsRepresentedAsItself(5, 'Buzz');
        $this->assertNumberIsRepresentedAsItself(10, 'Buzz');
    }

    /** @test */
    public function fifteenAndMultiplesAreRepresentedAsFizzBuzz() {
        $this->assertNumberIsRepresentedAsItself(15, 'FizzBuzz');
        $this->assertNumberIsRepresentedAsItself(30, 'FizzBuzz');
    }
}
