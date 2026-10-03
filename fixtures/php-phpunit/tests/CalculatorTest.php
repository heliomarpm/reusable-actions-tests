<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->add(2, 2));
    }
}
