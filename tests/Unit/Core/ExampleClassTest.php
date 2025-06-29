<?php

declare(strict_types=1);

namespace Zira\Tests\Unit\Core; // Adjust namespace

use PHPUnit\Framework\TestCase;
use Zira\Core\ExampleClass; // Adjust namespace

class ExampleClassTest extends TestCase
{
    public function testGreetMethodReturnsCorrectString(): void
    {
        $example = new ExampleClass();
        $this->assertEquals("Hello, World! Subhash", $example->greet("World"));
    }


    /**
     * @covers \Subhash\Zira\Core\ExampleClass::add
     */

    public function testAddMethodAddsNumbersCorrectly(): void
    {
        $example = new ExampleClass();
        $this->assertEquals(5, $example->add(2, 3));
        $this->assertEquals(0, $example->add(-1, 1));
    }
}