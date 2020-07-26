<?php

namespace App\Model\Currency\UseCase\FetchCurrency;

use App\Model\Currency\Entity\Currency;

class Query
{
    /** @var Currency\Id */
    private $_id;

    public function __construct(Currency\Id $id)
    {
        $this->_id = $id;
    }

    public function id(): Currency\Id
    {
        return $this->_id;
    }
}
