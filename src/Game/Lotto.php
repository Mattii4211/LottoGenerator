<?php

declare(strict_types=1);

namespace App\Game;

final readonly class Lotto extends StandardGame
{
    protected const MAX_VALUE = 49;
    protected const QUANTITY = 6;
}