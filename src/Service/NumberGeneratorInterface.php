<?php 

declare(strict_types=1);

namespace App\Service;

interface NumberGeneratorInterface
{
    public static function generate(int $quantity, int $maxValue): array;
}