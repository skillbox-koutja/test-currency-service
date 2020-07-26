<?php

namespace App\Model\Currency\Service\Fetcher;

use App\Model\Currency\Entity\Currency;
use App\Model\Currency\Service\Repository\CacheRepository;

class CacheFetcher implements FetcherInterface
{
    /** @var CacheRepository */
    private $cache;

    public function __construct(CacheRepository $cache)
    {
        $this->cache = $cache;
    }

    public function has(Currency\Id $id): bool
    {
        return $this->cache->has($id);
    }

    public function fetch(Currency\Id $id): Currency\Currency
    {
        return $this->cache->fetch($id);
    }
}
