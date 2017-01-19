<?php

namespace App\Traits;

trait CurrencyTrait
{
    public function getCurrencyFormat($amount)
    {
        return number_format($amount / 100, 2);
    }
}