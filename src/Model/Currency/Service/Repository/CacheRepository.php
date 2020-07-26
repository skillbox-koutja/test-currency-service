<?php

namespace App\Model\Currency\Service\Repository;

use App\Model\Currency\Entity\Currency;

class CacheRepository implements Currency\RepositoryInterface
{
    public function has(Currency\Id $id): bool
    {
        // TODO: Implement has() method.
    }

    public function fetch(Currency\Id $id): Currency\Currency
    {
        // TODO: Implement fetch() method.
    }


    public function save(Currency\Currency $currency): void
    {
        // TODO: Implement save() method.
    }
}
