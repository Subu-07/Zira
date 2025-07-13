<?php

declare(strict_types=1);

namespace Tests\Unit\Core;

use PHPUnit\Framework\TestCase;
use Zira\Core\ExampleClass;

class ExampleClassTest extends TestCase
{
    private ExampleClass $exampleClass;

    protected function setUp(): void
    {
        $this->exampleClass = new ExampleClass();
    }

    public function testGreetReturnsCorrectGreeting(): void
    {
        $result = $this->exampleClass->greet('World');
        $this->assertEquals('Hello, World!', $result);
    }

    public function testGreetWithEmptyString(): void
    {
        $result = $this->exampleClass->greet('');
        $this->assertEquals('Hello, !', $result);
    }

    public function testAddReturnsCorrectSum(): void
    {
        $result = $this->exampleClass->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testAddWithNegativeNumbers(): void
    {
        $result = $this->exampleClass->add(-2, 3);
        $this->assertEquals(1, $result);
    }

    public function testAddWithZero(): void
    {
        $result = $this->exampleClass->add(0, 5);
        $this->assertEquals(5, $result);
    }
}
