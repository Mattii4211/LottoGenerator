<?php

declare(strict_types=1);

namespace App\Game;

interface ExtraGameInterface
{
    public static function getSandardMax(): int;
    public static function getExtraMax(): int;
    public static function getExtraQuantity(): int;
    public static function getStandardQuantity(): int;

}