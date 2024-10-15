<?php

declare(strict_types=1);

namespace App\Game;

final readonly class EuroJackpot implements ExtraGameInterface
{
    private const STANDARD_MAX_VALUE = 50;
    private const STANDARD_QUANTITY = 5;
    private const EXTRA_MAX_VALUE = 12;
    private const EXTRA_QUANTITY = 2;

    public static function getSandardMax(): int
    {
        return self::STANDARD_MAX_VALUE;
    }

    public static function getExtraMax(): int
    {
        return self::EXTRA_MAX_VALUE;
    }

    public static function getExtraQuantity(): int
    {
        return self::EXTRA_QUANTITY;
    }

    public static function getStandardQuantity(): int
    {
        return self::STANDARD_QUANTITY;
    }
}