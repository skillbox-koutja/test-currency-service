<?php

namespace App\Model\Currency\Service\Fetcher;

use App\Model\Currency\Entity\Currency;

interface FetcherInterface
{
    public function has(Currency\Id $id): bool;

    public function fetch(Currency\Id $id): Currency\Currency;
}
