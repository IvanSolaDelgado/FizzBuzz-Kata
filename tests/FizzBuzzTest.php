<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */

    public function shouldSaysFizzWhenNumberMultipleOfThree()
    {
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->tryFizzBuzz(9);

        $this->assertEquals("Fizz", $result);
    }

    /**
     * @test
     */

    public function shouldSaysBuzzWhenNumberMultipleOfFive()
    {
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->tryFizzBuzz(10);

        $this->assertEquals("Buzz", $result);
    }

    /**
     * @test
     */

    public function shouldSaysFizzBuzzWhenNumberMultipleOfThreeAndFive()
    {
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->tryFizzBuzz(15);

        $this->assertEquals("FizzBuzz", $result);
    }

}
