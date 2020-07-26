<?php

namespace App\Model\Currency\Service\Fetcher;

use App\Model\Currency\Entity\Currency;
use App\Model\Currency\Service\Repository\CacheRepository;
use App\Model\Currency\Service\Repository\DatabaseRepository;

class HttpFetcher implements FetcherInterface
{
    private $httpClient;

    /** @var CacheRepository */
    private $cache;

    /** @var DatabaseRepository */
    private $database;

    public function __construct(
        $httpClient,
        CacheRepository $cache,
        DatabaseRepository $database
    )
    {
        $this->httpClient = $httpClient;
        $this->cache = $cache;
        $this->database = $database;
    }

    public function has(Currency\Id $id): bool
    {
        return true;
    }

    public function fetch(Currency\Id $id): Currency\Currency
    {
        $currency = $this->newCurrency($id);
        $this->cache->save($currency);
        $this->database->save($currency);

        return $currency;
    }

    private function newCurrency(Currency\Id $id)
    {
        $request = $this->newGetRequest($id);
        $response = $this->httpClient->get($request);
        $data = $this->parseResponse($response);

        return new Currency\Currency(
            $id,
            $data['name'],
            $data['value']
        );
    }

    private function newGetRequest(Currency\Id $id)
    {

    }

    private function parseResponse($response)
    {
        return [];
    }
}
