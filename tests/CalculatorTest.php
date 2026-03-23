<?php

use App\Calculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Calculator::class)]
class CalculatorTest extends TestCase
{
    protected Calculator $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    #[Test]
    public function add(): void
    {
        $fResult = $this->calculator->add(160, 140);
        $this->assertEquals(300, $fResult);
    }

    #[Test]
    public function sub(): void
    {
        $fResult = $this->calculator->sub(160, 140);
        $this->assertEquals(20, $fResult);
    }
}