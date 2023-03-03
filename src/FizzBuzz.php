<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function tryFizzBuzz(int $numberToConvert): int|string
    {
        if($numberToConvert % 15 === 0){
            return "FizzBuzz";
        }
        else if ($numberToConvert % 3 === 0) {
            return "Fizz";
        }
        return "Buzz";
    }
}
