<?php

namespace App\Model\Currency\UseCase\FetchCurrency;

use App\Model\Currency\Service\Fetcher\ChainFetcher;

class Handler
{
    /** @var ChainFetcher */
    private $fetcher;

    public function __construct(ChainFetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    public function __invoke(Query $query)
    {
        return $this->fetcher->fetch($query->id());
    }
}
