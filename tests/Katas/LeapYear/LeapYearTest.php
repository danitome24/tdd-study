<?php

namespace Tests\App\Katas\LeapYear;

use App\LeapYear\Year;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase {

    /** @test */
    public function canInstantiateYearObject() {
        $this->assertTrue(class_exists('App\LeapYear\Year'));
    }

    /** @test */
    public function canRespondToIsLeapMethod() {
        $year = new Year(1993);
        $this->assertTrue(method_exists($year, 'isLeap'));
    }

    /** @test */
    public function isLeapMustReturnBoolean() {
        $year = new Year(1993);
        $this->assertIsBool($year->isLeap());
    }

    /** @test */
    public function commonYearsAreNotLeapYear() {
        $year = new Year(1997);
        $this->assertFalse($year->isLeap());
    }

    /** @test */
    public function yearsDivisibleBy4AreLeapYears() {
        $year = new Year(1996);
        $this->assertTrue($year->isLeap());
    }

    /** @test */
    public function yearsDivisibleBy100AreNoLeapYears() {
        $year = new Year(1900);
        $this->assertFalse($year->isLeap());
    }

    /** @test */
    public function yearsDivisibleBy400AreNoLeapYears() {
        $year = new Year(2000);
        $this->assertTrue($year->isLeap());
    }
}
