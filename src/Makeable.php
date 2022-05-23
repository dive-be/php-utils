<?php declare(strict_types=1);

namespace Dive\Utils;

trait Makeable
{
    public static function make(...$args): static
    {
        return new static(...$args);
    }
}
