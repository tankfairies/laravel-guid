[![Latest Stable Version](https://poser.pugx.org/tankfairies/laravel-guid/v/stable)](https://packagist.org/packages/tankfairies/laravel-guid)
[![Total Downloads](https://poser.pugx.org/tankfairies/laravel-guid/downloads)](https://packagist.org/packages/tankfairies/laravel-guid)
[![Latest Unstable Version](https://poser.pugx.org/tankfairies/laravel-guid/v/unstable)](https://packagist.org/packages/tankfairies/laravel-guid)
[![License](https://poser.pugx.org/tankfairies/laravel-guid/license)](https://packagist.org/packages/tankfairies/laravel-guid)
[![Build Status](https://travis-ci.com/tankfairies/laravel-guid.svg?branch=master)](https://travis-ci.com/tankfairies/laravel-guid)

# Laravel GUID

This Laravel package is useful for creating globally unique identifiers (GUID).

## Installation

Install with [Composer](https://getcomposer.org/):

```bash
composer require tankfairies/laravel-guid
```

## Usage

There are four GUID types available.
GUID Version: -
```
    GuidInterface::UUID_TIME      -> Time based UUID        (version 1)
    GuidInterface::UUID_NAME_MD5  -> Name based (MD5) UUID  (version 3)
    GuidInterface::UUID_RANDOM    -> Random UUID            (version 4)
    GuidInterface::UUID_NAME_SHA1 -> Name based (SHA1) UUID (version 5)
```

All the GUIDs can be generated in one of three formats String, binary and byte.
GUID format: -
```
    GuidInterface::FMT_STRING
    GuidInterface::FMT_BINARY
    GuidInterface::FMT_BYTE
```

#### Laravel
Register the package service provider in `config/app.php` file.

```php
'providers' => [
    Tankfairies\LaravelGuid\Guid\GuidServiceProvider::class,
]
```

## Create GUID

This will generate a random GUID
```php
echo "GUID: " . guid(); // example output: 2b23924f-0eaa-4133-848e-7ce1edeca8c9
```

The guid function has four parameters: -

```php
guid(version, format, salt, namespace)
```

The salt needs to be at least 6 characters long and is only required for a `UUID_TIME`.  It can also be optionally used for `UUID_NAME_MD5` and `UUID_NAME_SHA1`.

`UUID_NAME_MD5` and `UUID_NAME_SHA1` require the _namespace_ parameter to be filled.

## Copyright and license

The tankfairies/laravel-guid library is Copyright (c) 2019 Tankfairies (https://tankfairies.com) and licensed for use under the MIT License (MIT).
