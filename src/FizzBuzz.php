<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function tryFizzBuzz(int $numberToConvert): int|string
    {
        if ($numberToConvert % 15 === 0) {
            return "FizzBuzz";
        } elseif ($numberToConvert % 3 === 0) {
            return "Fizz";
        }
        elseif ($numberToConvert % 5 === 0){
            return "Buzz";
        }
        return $numberToConvert;
    }
}
