<?php

declare(strict_types=1);

namespace App\Game;

final readonly class MiniLotto extends StandardGame
{
    protected const MAX_VALUE = 42;
    protected const QUANTITY = 5;
}