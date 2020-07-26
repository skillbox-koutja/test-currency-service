<?php

namespace App\Model\Currency\Entity\Currency;

use App\Model\Currency\Entity\Currency;

interface RepositoryInterface
{
    public function has(Currency\Id $id): bool;

    public function fetch(Currency\Id $id): Currency\Currency;

    public function save(Currency\Currency $currency): void;
}
