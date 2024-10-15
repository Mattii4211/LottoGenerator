<?php

declare(strict_types=1);

namespace App\Game;

final readonly class Keno implements StandardGameInterface
{
    private const MAX_VALUE = 70;
    private const QUANTITY = 10;

    public static function getMax(): int
    {
        return self::MAX_VALUE;
    }

    public static function getQuantity(): int
    {
        return self::QUANTITY;
    }
}