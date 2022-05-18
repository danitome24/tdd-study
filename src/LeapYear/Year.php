<?php

namespace App\LeapYear;

class Year {
    private int $year;

    public function __construct(int $year) {
        $this->year = $year;
    }

    public function isLeap(): bool {
        if ($this->year % 400 === 0) {
            return true;
        }

        if ($this->year % 100 === 0) {
            return false;
        }

        return ($this->year % 4 === 0);
    }
}
