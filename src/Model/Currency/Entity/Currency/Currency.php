<?php

namespace App\Model\Currency\Entity\Currency;

class Currency implements CurrencyInterface
{
    /** @var Id */
    private $_id;

    /** @var NumCode */
    private $_numCode;

    /** @var CharCode */
    private $_charCode;

    /** @var Nominal */
    private $_nominal;

    /** @var Name */
    private $_name;

    /** @var float */
    private $_value;

    public function __construct(
        Id $id,
        Name $name,
        float $value
    )
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_value = $value;
    }

    public function id(): Id
    {
        return $this->_id;
    }

    public function name(): Name
    {
        return $this->_name;
    }

    public function value(): float
    {
        return $this->_value;
    }
}
