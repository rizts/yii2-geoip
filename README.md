Yii 2 GeoIP extension
=====================
[![Latest Stable Version](https://poser.pugx.org/lysenkobv/yii2-geoip/version)](https://packagist.org/packages/lysenkobv/yii2-geoip) [![Build](https://img.shields.io/travis/lysenkobv/yii2-geoip.svg)](https://packagist.org/packages/lysenkobv/yii2-geoip) [![HHVM Status](https://img.shields.io/hhvm/lysenkobv/yii2-geoip.svg)](http://hhvm.h4cc.de/package/lysenkobv/yii2-geoip)

Provides information about geographical location of user by IP address.

Currently available:
* Country
* City
* Latitude, Longitude

## Install

Run

```bash
$ php composer.phar require lysenkobv/yii2-geoip "~1.0"
```

#### OR 

add to your `composer.json`

```json
{
    "require": {
        "lysenkobv/yii2-geoip": "~1.0"
    }
}
```

and run

```bash
$ php composer update
```


## Usage

### Like component

```php
<?php

$config = [
    ...
    'components' => [
        'geoip' => ['class' => 'lysenkobv\GeoIP'],
    ]
    ...
];
```

somewhere in code

```php
$ip = Yii::$app->component->geoip->ip(); // current user ip

$ip = Yii::$app->component->geoip->ip("208.113.83.165");

$ip->city; // "San Francisco"
$ip->country; // "United States"
$ip->location->lng; // 37.7898
$ip->location->lat; // -122.3942

```

### Like object directly somewhere in your application

```php
$geoip = new \lysenkobv\GeoIP();
$ip = $geoip->ip("208.113.83.165");

$ip->city; // "San Francisco"
$ip->country; // "United States"
$ip->location->lng; // 37.7898
$ip->location->lat; // -122.3942
```

This product includes GeoLite2 data created by MaxMind, available from http://www.maxmind.com