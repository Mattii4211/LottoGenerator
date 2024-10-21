<?php

declare(strict_types=1);

namespace App\Game;

readonly class StandardGame implements StandardGameInterface
{
    private const MAX_VALUE = 0;
    private const QUANTITY = 0;

    public static function getMax(): int
    {
        return static::MAX_VALUE;
    }

    public static function getQuantity(): int
    {
        return static::QUANTITY;
    }
}