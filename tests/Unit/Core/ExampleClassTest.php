<?php

declare(strict_types=1);

namespace Subhash\Zira\Tests\Unit\Core; // Adjust namespace

use PHPUnit\Framework\TestCase;
use Subhash\Zira\Core\ExampleClass; // Adjust namespace

class ExampleClassTest extends TestCase
{
    public function testGreetMethodReturnsCorrectString(): void
    {
        $example = new ExampleClass();
        $this->assertEquals("Hello, World!", $example->greet("World"));
    }

    public function testAddMethodAddsNumbersCorrectly(): void
    {
        $example = new ExampleClass();
        $this->assertEquals(5, $example->add(2, 3));
        $this->assertEquals(0, $example->add(-1, 1));
    }
}