<?php

declare(strict_types=1);

namespace Subhash\ZiraPhp\Core; // Adjust namespace to your project

class ExampleClass
{
    public function greet(string $name): string
    {
        return "Hello, " . $name . "!";
    }

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}