<?php

declare(strict_types=1);

namespace App\Game;

interface StandardGameInterface
{
    public static function getMax(): int;
    public static function getQuantity(): int;
}