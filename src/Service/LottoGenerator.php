<?php

declare(strict_types=1);

namespace App\Service;

use App\Game\EuroJackpot;
use App\Game\Lotto;
use App\Game\MiniLotto;
use App\Game\Keno;

final readonly class LottoGenerator 
{
    private const MIN_VALUE = 1;

    public function genearteEuroJackpot(): string
    {
        $standard = $this->fillNumbers(
            EuroJackpot::getStandardQuantity(), 
            EuroJackpot::getSandardMax()
        );
        $extra = $this->fillNumbers(
            EuroJackpot::getExtraQuantity(), 
            EuroJackpot::getExtraMax()
        );

        return $this->generateOutputString(
            (new \ReflectionClass(EuroJackpot::class))->getShortName(),
            $standard, 
            $extra
        );
    } 

    public function genearteMiniLotto(): string
    {
        $numbers = $this->fillNumbers(
            MiniLotto::getQuantity(), MiniLotto::getMax());

        return $this->generateOutputString(
            (new \ReflectionClass(MiniLotto::class))->getShortName(),
            $numbers
        );
    }

    public function genearteLotto(): string
    {
        $numbers = $this->fillNumbers(Lotto::getQuantity(), Lotto::getMax());

        return $this->generateOutputString(
            (new \ReflectionClass(Lotto::class))->getShortName(), 
            $numbers
        );
    }

    public function genearteKeno(?int $number = null): string
    {
        $quantity = Keno::getQuantity();
        $number = $number > $quantity ? null : $number;
        $numbers = $this->fillNumbers($number ?? $quantity, Keno::getMax());

        return $this->generateOutputString(
            (new \ReflectionClass(Keno::class))->getShortName(),
            $numbers
        );
    }
    
    private function generateOutputString(string $name, array $numbers, array $extraNumbers = []): string
    {
        return OutputStringGenerator::generate($name, $numbers, $extraNumbers);
    }

    private function fillNumbers(int $quantity, int $maxValue): array
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