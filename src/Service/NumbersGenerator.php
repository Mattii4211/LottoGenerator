<?php 

declare(strict_types=1);

namespace App\Service;

final readonly class NumbersGenerator implements NumberGeneratorInterface
{
    private const MIN_VALUE = 1;

    /**
     * @return array<int, int>
     */
    public static function generate(int $quantity, int $maxValue): array
    {
        $output = [];
        while (count($output) < $quantity) {
            $number = rand(self::MIN_VALUE, $maxValue);
            
            if (!in_array($number, $output)) {
                array_push($output,$number);
            }
        }

        asort(array: $output);

        return $output;
    }
}