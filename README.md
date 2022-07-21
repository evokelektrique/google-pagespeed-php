# Google PageSpeed Insight PHP Client

PHP Client for Google Lighthouse service

## Installation
```
$ composer require evokelektrique/google-pagespeed-php
```

## How to use
```php
use PageSpeed\Insight;

$api_key = "";
$url = "https://google.com";
$insight = new Insight($url, $api_key);
$result = $insight->audit();

var_dump($result);
```
