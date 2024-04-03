# Laravel MailerLite Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tigerheck/laravel-mailerlite.svg?style=flat-square)](https://packagist.org/packages/tigerheck/laravel-mailerlite)
[![Total Downloads](https://img.shields.io/packagist/dt/tigerheck/laravel-mailerlite.svg?style=flat-square)](https://packagist.org/packages/tigerheck/laravel-mailerlite)


**A Laravel wrapper for MailerLite API.**

## Install

Via Composer

``` bash
$ composer require tigerheck/laravel-mailerlite
```


## Configuration

Laravel MailerLite requires connection configuration. To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="TigerHeck\MailerLite\MailerLiteServiceProvider"
```

add Your enviroment configuraiton file
```
MAILERLITE_API_KEY=
```

## Usage
See documention for params and others at [MailerLite docs](https://developers.mailerlite.com/docs/#mailerlite-api)
