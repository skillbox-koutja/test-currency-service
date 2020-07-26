<?php

namespace App\Model\Currency\Entity\Currency;

interface CurrencyInterface
{
    public function id(): Id;

    public function name(): Name;

    public function value(): float;
}
