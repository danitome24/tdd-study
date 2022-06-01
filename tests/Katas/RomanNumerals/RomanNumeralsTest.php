<?php

declare(strict_types=1);

namespace Tests\App\Katas\RomanNumerals;

use App\RomanNumerals\RomanNumerals;
use PHPUnit\Framework\TestCase;

final class RomanNumeralsTest extends TestCase {

    /** @test */
    public function itConvertNumbersToRoman() {
        $this->assertConvertsToRoman('I', 1);
        $this->assertConvertsToRoman('II', 2);
        $this->assertConvertsToRoman('III', 3);
        $this->assertConvertsToRoman('IV', 4);
        $this->assertConvertsToRoman('V', 5);
        $this->assertConvertsToRoman('VI', 6);
        $this->assertConvertsToRoman('VII', 7);
        $this->assertConvertsToRoman('VIII', 8);
        $this->assertConvertsToRoman('IX', 9);
        $this->assertConvertsToRoman('X', 10);
        $this->assertConvertsToRoman('XI', 11);
        $this->assertConvertsToRoman('XII', 12);
        $this->assertConvertsToRoman('XIII', 13);
        $this->assertConvertsToRoman('XIV', 14);
        $this->assertConvertsToRoman('XV', 15);
        $this->assertConvertsToRoman('XIX', 19);
        $this->assertConvertsToRoman('XX', 20);
        $this->assertConvertsToRoman('XL', 40);
        $this->assertConvertsToRoman('L', 50);
        $this->assertConvertsToRoman('XC', 90);
        $this->assertConvertsToRoman('C', 100);
        $this->assertConvertsToRoman('CD', 400);
        $this->assertConvertsToRoman('D', 500);
        $this->assertConvertsToRoman('CM', 900);
        $this->assertConvertsToRoman('M', 1000);
    }

    private function assertConvertsToRoman(string $roman, int $arabic) {
        $romanNumerals = new RomanNumerals();
        $this->assertEquals($roman, $romanNumerals->toRoman($arabic));
    }
}
