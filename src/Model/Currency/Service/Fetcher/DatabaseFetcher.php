<?php

namespace App\Model\Currency\Service\Fetcher;

use App\Model\Currency\Entity\Currency;
use App\Model\Currency\Service\Repository\CacheRepository;
use App\Model\Currency\Service\Repository\DatabaseRepository;

class DatabaseFetcher implements FetcherInterface
{
    /** @var CacheRepository */
    private $cache;

    /** @var DatabaseRepository */
    private $database;

    public function __construct(
        CacheRepository $cache,
        DatabaseRepository $database
    )
    {
        $this->cache = $cache;
        $this->database = $database;
    }

    public function has(Currency\Id $id): bool
    {
        return $this->database->has($id);
    }

    public function fetch(Currency\Id $id): Currency\Currency
    {
        $currency = $this->database->fetch($id);
        $this->cache->save($currency);

        return $currency;
    }
}
