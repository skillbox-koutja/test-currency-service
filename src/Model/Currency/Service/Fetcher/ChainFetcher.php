<?php

namespace App\Model\Currency\Service\Fetcher;

use App\Model\Currency\Entity\Currency;
use App\Model\EntityNotFoundException;

class ChainFetcher
{
    /** @var FetcherInterface[]|array|iterable */
    private $fetchers;

    public function __construct(iterable $fetchers = [])
    {
        $this->fetchers = $fetchers;
    }

    public function fetch(Currency\Id $id): Currency\Currency
    {
        foreach ($this->fetchers as $fetcher) {
            if ($fetcher->has($id)) {
                return $fetcher->fetch($id);
            }
        }

        throw new EntityNotFoundException('Currency is not found.');
    }
}
