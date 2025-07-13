<?php

declare(strict_types=1);

namespace Tests\Unit\Core;

use PHPUnit\Framework\TestCase;
use Zira\Core\ExampleClass;

/**
 * @covers \Zira\Core\ExampleClass
 */
final class ExampleClassTest extends TestCase
{
    private ExampleClass $exampleClass;

    #[\Override]
    protected function setUp(): void
    {
        $this->exampleClass = new ExampleClass();
    }

    /**
     * @covers \Zira\Core\ExampleClass::greet
     */
    public function testGreetReturnsCorrectGreeting(): void
    {
        $result = $this->exampleClass->greet('World');
        $this->assertEquals('Hello, World!', $result);
    }

    /**
     * @covers \Zira\Core\ExampleClass::greet
     */
    public function testGreetWithEmptyString(): void
    {
        $result = $this->exampleClass->greet('');
        $this->assertEquals('Hello, !', $result);
    }

    /**
     * @covers \Zira\Core\ExampleClass::add
     */
    public function testAddReturnsCorrectSum(): void
    {
        $result = $this->exampleClass->add(2, 3);
        $this->assertEquals(5, $result);
    }

    /**
     * @covers \Zira\Core\ExampleClass::add
     */
    public function testAddWithNegativeNumbers(): void
    {
        $result = $this->exampleClass->add(-2, 3);
        $this->assertEquals(1, $result);
    }

    /**
     * @covers \Zira\Core\ExampleClass::add
     */
    public function testAddWithZero(): void
    {
        $result = $this->exampleClass->add(0, 5);
        $this->assertEquals(5, $result);
    }
}
