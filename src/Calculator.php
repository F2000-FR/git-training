<?php

namespace App;

class Calculator
{
    public function add(float $a, float $b): float
    {
        //commern
        return round($a + $b, 2);
    }

    public function sub(float $a, float $b): float
    {
        return round($a - $b, 2);
    }
}