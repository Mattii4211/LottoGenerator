<?php

declare(strict_types=1);

namespace App\Service;

final readonly class OutputStringGenerator
{
    public static function generate(string $name, array $numbers, array $extraNumbers = []): string 
    {
        $output = "$name: " . json_encode(array_values($numbers));

        if (count($extraNumbers)) {
            $output .= ' extra: ' . json_encode(array_values($extraNumbers));
        }

        return $output . "\n";
    }
}