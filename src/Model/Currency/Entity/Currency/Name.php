<?php

namespace App\Model\Currency\Entity\Currency;

class Name
{
    private $v;

    public function __construct(string $value)
    {
        $this->v = $value;
    }

    public function value(): string
    {
        return $this->v;
    }
}
