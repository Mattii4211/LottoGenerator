<?php

declare(strict_types=1);

namespace App\Game;

final readonly class Keno extends StandardGame
{
    protected const MAX_VALUE = 70;
    protected const QUANTITY = 10;
}