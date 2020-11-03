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

This will swap Jarbon for Carbon in your model:
```php
class User extends Model
{
    use JarbonTrait;
}
```

Now you can output the Jalali date in your view:
```blade
{{ $user->created_at }} // 1398-06-27 12:36:20 <-- this uses 'default_format' config and will return Gregorian outside Blade
{{ $user->created_at->toString() }} // 12:36:20 چهارشنبه 27 شهریور 1398
{{ $user->created_at->toDateString() }} // 1398-06-27
{{ $user->created_at->toFormattedDateString() }} // 27 شهریور 1398
{{ $user->created_at->toTimeString() }} // 12:36:20 i know! but this will render in persian digits if you set the config
{{ $user->created_at->toDateTimeString() }} // 1398-06-27 12:36:20 same as implicit toString in blade but you need to call this explicitly elsewhere
{{ $user->created_at->toDayDateTimeString() }} // چهارشنبه 27 شهریور 1398 12:36 ب.ظ
{{ $user->created_at->format($format) }} // see links below
```

- [PHP date format reference](https://www.php.net/manual/en/function.date.php)
- [PHP strftime reference](https://www.php.net/manual/en/function.strftime.php)

Publish the config file:
```
php artisan vendor:publish --tag=config
or in case I add more publishable stuff:
php artisan vendor:publish --provider="Mokhosh\Jarbon\ServiceProvider"
```

Help yourself:
```php
// config/jarbon.php

return [

    'default_format' => 'Y-m-d H:i:s', // to render $model->date differently
    'convert_numbers' => false, // set to true to get dates like چهارشنبه ۲۷ شهریور ۱۳۹۸ ۱۲:۳۶ ب.ظ

];
```

## TODO

- Use macros instead
- Add jarbon() helper
- override now() helper?
- Fluent methods to override config on a single instance
- Add methods to access Gregorian calendar
- Should we override default methods and create new methods for Gregorian? or just add methods for Jalali?
- Cache a Jalali date inside the instance and track Carbon modification to regenerate it on the fly
- Integrate with a client side Jalali datepicker for Jalali datetime inputs in forms
- Helpers to play with Jalali and Gregorian dates
- Unit tests?
- what else?  
