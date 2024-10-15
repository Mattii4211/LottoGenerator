<?php

declare(strict_types=1);

namespace App\Game;

final readonly class Lotto implements StandardGameInterface
{
    private const MAX_VALUE = 49;
    private const QUANTITY = 6;

    public static function getMax(): int
    {
        return self::MAX_VALUE;
    }

    public static function getQuantity(): int
    {
        return self::QUANTITY;
    }
}