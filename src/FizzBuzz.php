<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function tryFizzBuzz(int $numberToConvert): int|string
    {
        if ($numberToConvert % 3 === 0) {
            return "fizz";
        }
        else{
            return "buzz";
        }
    }
}
