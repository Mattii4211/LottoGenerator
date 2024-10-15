<?php

declare(strict_types=1);

namespace App\Service;

interface OutputGeneratorInterface 
{
    public static function generate(string $name, array $numbers, array $extraNumbers = []): string;
}