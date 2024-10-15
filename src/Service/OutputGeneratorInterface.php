<?php

declare(strict_types=1);

namespace App\Service;

interface OutputGeneratorInterface 
{
    /**
     * @param array<int, int> $numbers
     * @param array<int, int> $extraNumbers
     */
    public static function generate(string $name, array $numbers, array $extraNumbers = []): string;
}