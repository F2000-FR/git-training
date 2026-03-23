<?php

require __DIR__ . '/vendor/autoload.php';

$iA = 5;
$iB = 2;

$oCalc = new \App\Calculator();
print_r(sprintf('%s + %s = %s', $iA, $iB, $oCalc->add($iA, $iB)) . PHP_EOL);
print_r(sprintf('%s - %s = %s', $iA, $iB, $oCalc->sub($iA, $iB)) . PHP_EOL);