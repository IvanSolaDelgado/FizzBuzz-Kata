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

        $this->assertEquals("fizz", $result);
    }

    /**
     * @test
     */

    public function shouldSaysBuzzWhenNumberMultipleOfFive()
    {
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->tryFizzBuzz(10);

        $this->assertEquals("buzz", $result);
    }

}
