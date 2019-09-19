# Jarbon (Jalali Carbon)
## A Jalali wrapper for Carbon to use with Laravel.

[![Total Downloads](https://img.shields.io/packagist/dt/mokhosh/jarbon.svg?style=flat-square)](https://packagist.org/packages/mokhosh/jarbon)
[![Issues](https://img.shields.io/github/issues/mokhosh/jarbon?style=flat-square)](https://github.com/mokhosh/jarbon/issues)
[![Stars](https://img.shields.io/github/stars/mokhosh/jarbon?style=flat-square)](https://github.com/mokhosh/jarbon/stargazers)
[![Forks](https://img.shields.io/github/forks/mokhosh/jarbon?style=flat-square&logo=github)](https://github.com/mokhosh/jarbon/network/members)
[![MIT License](https://img.shields.io/github/license/mokhosh/jarbon?style=flat-square)](https://github.com/mokhosh/jarbon/blob/master/LICENSE)

The idea is to add Jalali functionality to Carbon instances without introducing breaking changes.
Also I'm not in a hurry to exhaust all Carbon methods and features here. Just implementing what I need in my projects for now.

Warning: still in very early development stages.

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

This will automatically output the Jalali date in your view:
```blade
{{ $user->created_at }}
```

## TODO

- Add more methods for rendering date and time in Jalali
- fluent methods to override config on a single instance
- Cache a Jalali date inside the instance and track Carbon modification to regenerate it on the fly
- Integrate with a client side Jalali datepicker for Jalali datetime inputs in forms
- Helpers to play with Jalali and Gregorian dates
- Unit tests?
- what else?  
