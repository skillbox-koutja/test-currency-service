Логика получения курсов валют следующая. 
Вызывающий код может получить их из кеша, из базы данных и из внешнего источника по http. 
В случае, если курса валют нет в кеше, надо проверить базу, и если там есть, положить в кеш. 
Если в базе нет -- проверить внешний источник и положить и в базу, и в кеш.
Надо реализовать эту логику. Предполагается, что она будет использоваться в куче разных мест.

Пример вызова кода

~~~php
<?php

use App\Model\Currency\Entity;
use App\Model\Currency\Service;
use App\Model\Currency\UseCase\FetchCurrency;

// настройка сервисов для получения курса валюты
$fetchers = [...];
$fetcher = new Service\Fetcher\ChainFetcher($fetchers);

// формирование запроса
$query = new FetchCurrency\Query(new Entity\Currency\Id('...'));
$handler = new FetchCurrency\Handler($fetcher);
try {
  $currency = $handler($query);
} catch (\App\Model\EntityNotFoundException $e) {
  // обработка исключительной ситуации, когда найти курс валют не удалось
}

~~~
