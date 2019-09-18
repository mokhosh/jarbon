# Jarbon (Jalali Carbon)
## A Jalali wrapper for Carbon to use with Laravel.

The idea is to add Jalali functionality to Carbon instances without introducing breaking changes.

Warning: still in very early development stages.

## Installation

Via composer
```
$ composer require mokhosh/jarbon
```

## Usage

This will swap Jarbon for Carbon in your model:
```php
class User
{
    use JarbonTrait;
}
```

This will output the Jalali date in your view:
```blade
{{ $user->created_at }}
```
