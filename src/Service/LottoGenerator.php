<?php

declare(strict_types=1);

namespace App\Service;

use App\Game\EuroJackpot;
use App\Game\Lotto;
use App\Game\MiniLotto;
use App\Game\Keno;

final readonly class LottoGenerator 
{
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
            EuroJackpot::class,
            $standard, 
            $extra
        );
    } 

    public function genearteMiniLotto(): string
    {
        $numbers = $this->fillNumbers(
            MiniLotto::getQuantity(), MiniLotto::getMax());

        return $this->generateOutputString(
            MiniLotto::class,
            $numbers
        );
    }

    public function genearteLotto(): string
    {
        $numbers = $this->fillNumbers(Lotto::getQuantity(), Lotto::getMax());

        return $this->generateOutputString(
            Lotto::class, 
            $numbers
        );
    }

    public function genearteKeno(?int $number = null): string
    {
        $quantity = Keno::getQuantity();
        $number = $number > $quantity ? null : $number;
        $numbers = $this->fillNumbers($number ?? $quantity, Keno::getMax());

        return $this->generateOutputString(
            Keno::class,
            $numbers
        );
    }
    
    /**
     * @param array<int, int> $numbers
     * @param array<int, int> $extraNumbers
     */
    private function generateOutputString(string $class, array $numbers, array $extraNumbers = []): string
    {
        return OutputStringGenerator::generate(
            (new \ReflectionClass($class))->getShortName(), 
            $numbers, 
            $extraNumbers
        );
    }

    /**
     * @return array<int, int>
     */
    private function fillNumbers(int $quantity, int $maxValue): array
    {
        return NumbersGenerator::generate($quantity, $maxValue);
    }
}