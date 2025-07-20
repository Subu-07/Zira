<?php

declare(strict_types=1);

namespace Zira\Core\Container;

use Zira\Contracts\Container\ContainerInterface;

class Container implements ContainerInterface
{
    public function get(string $id)
    {
    }

    public function has(string $id): bool
    {
        return false;
    }
}
