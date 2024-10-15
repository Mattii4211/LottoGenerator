<?php

require_once 'vendor/autoload.php';

use App\Service\LottoGenerator;

$lG = new LottoGenerator();
echo "\n" . $lG->genearteEuroJackpot(),  $lG->genearteMiniLotto(), $lG->genearteLotto(), $lG->genearteKeno() . "\n";
// echo "\n" . $lG->genearteKeno(2) . "\n";