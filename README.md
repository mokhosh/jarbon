# Jarbon (Jalali Carbon)
## A Jalali wrapper for Carbon to use with Laravel.

![Version](https://img.shields.io/github/v/tag/mokhosh/jarbon?style=flat-square)
![Size](https://img.shields.io/github/languages/code-size/mokhosh/jarbon?color=%2366ee00&style=flat-square)
[![Total Downloads](https://img.shields.io/packagist/dt/mokhosh/jarbon.svg?style=flat-square)](https://packagist.org/packages/mokhosh/jarbon)
[![Issues](https://img.shields.io/github/issues/mokhosh/jarbon?style=flat-square)](https://github.com/mokhosh/jarbon/issues)
[![Stars](https://img.shields.io/github/stars/mokhosh/jarbon?style=flat-square)](https://github.com/mokhosh/jarbon/stargazers)
[![Forks](https://img.shields.io/github/forks/mokhosh/jarbon?style=flat-square&logo=github)](https://github.com/mokhosh/jarbon/network/members)
[![MIT License](https://img.shields.io/github/license/mokhosh/jarbon?style=flat-square)](https://github.com/mokhosh/jarbon/blob/master/LICENSE)

The idea is to add Jalali functionality to Carbon instances without introducing breaking changes.
Also I'm not in a hurry to exhaust all Carbon methods and features here. Just implementing what I need in my projects for now.

## Installation

Via composer
```
$ composer require mokhosh/jarbon
```

## Usage
You can simply convert *any* `Carbon` instance to Jalali like this:
```php
$user->created_at->jormat($format) // see links below to know more about date formats
```

If you wanna use the format helper methods you can do this too, but it's optional:
```php
class User extends Model
{
    use JarbonTrait;
}
```

Now you can output the Jalali date like this:
```php
$user->created_at->toJString(); // 12:36:20 چهارشنبه 27 شهریور 1398
$user->created_at->toJDateString(); // 1398-06-27
$user->created_at->toJFormattedDateString(); // 27 شهریور 1398
$user->created_at->toJTimeString(); // 12:36:20 i know! but this will render in persian digits if you set the config
$user->created_at->toJDateTimeString(); // 1398-06-27 12:36:20 same as implicit toString in blade but you need to call this explicitly elsewhere
$user->created_at->toJDayDateTimeString(); // چهارشنبه 27 شهریور 1398 12:36 ب.ظ
```

- [PHP date format reference](https://www.php.net/manual/en/function.date.php)
- [PHP strftime reference](https://www.php.net/manual/en/function.strftime.php)

Publish the config file:
```
php artisan vendor:publish --tag=config
or in case I add more publishable stuff:
php artisan vendor:publish --provider="Mokhosh\Jarbon\JarbonServiceProvider"
```

Help yourself:
```php
// config/jarbon.php

return [

    'default_format' => 'Y-m-d H:i:s', // to render $carbon->jormat() differently
    'convert_numbers' => false, // set to true to get dates like چهارشنبه ۲۷ شهریور ۱۳۹۸ ۱۲:۳۶ ب.ظ

];
```

## TODO

- Add jarbon() helper
- Fluent methods to override config on a single instance
- Cache a Jalali date inside the instance and track Carbon modification to regenerate it on the fly
- Integrate with a client side Jalali datepicker for Jalali datetime inputs in forms
- Helpers to play with Jalali and Gregorian dates
- Unit tests?
- what else?  
