# Что за штука?
Клиент для CRM
# Установка
```text
composer require utelecomim/crmclient
```
# Использование
```php
<?php

include_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use UtelecomIM\CRMClient\CRMClient;
use UtelecomIM\CRMClient\LeadDTO;
use UtelecomIM\CRMClient\LeadFieldDTO;

$httpClient = new Client([
    "base_uri"                  => "https://api.domain.com/v1/",
    RequestOptions::HTTP_ERRORS => false,
    RequestOptions::TIMEOUT     => 10,
    RequestOptions::DEBUG       => false,
    RequestOptions::VERIFY      => true,
]);

$crmClient = new CRMClient($httpClient);
$crmClient->setCredentials("login", "password"); // опционально
$crmClient->setOperatorToken("operator_token");

$leadFieldDTO = new LeadFieldDTO();
$leadFieldDTO->utm_source = "utm_source";
$leadFieldDTO->utm_content = "utm_content";
$leadFieldDTO->utm_term = "utm_term";
$leadFieldDTO->utm_medium = "utm_medium";
$leadFieldDTO->utm_campaign = "utm_campaign";
$leadFieldDTO->ga_id = "0123456789.0123456789";

$leadDTO = new LeadDTO();
$leadDTO->title = "title";
$leadDTO->comment = "comment";
$leadDTO->user_phone = "0951234567";
$leadDTO->source_name = LeadDTO::SOURCE_SITE;  // сайт
$leadDTO->status_name = LeadDTO::STATUS_NOT_PROCESSED;  // не обработанный
$leadDTO->user_address = "user_address";
$leadDTO->user_city = "user_city";
$leadDTO->user_flat = "user_flat";
$leadDTO->user_home = "user_home";
$leadDTO->user_street = "user_street";
$leadDTO->user_first_name = "user_first_name";
$leadDTO->user_tariff_name = "user_tariff_name";
$leadDTO->lead_field = $leadFieldDTO;

try {
    $result = $crmClient->createLead($leadDTO);
    var_dump($result);
} catch (Throwable $e) {
    var_dump($e->getMessage());
}


```

