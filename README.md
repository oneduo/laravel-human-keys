# Laravel Human Keys

[![Latest Version on Packagist](https://img.shields.io/packagist/v/oneduo/laravel-human-model-keys.svg?style=flat-square)](https://packagist.org/packages/oneduo/laravel-human-model-keys)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/oneduo/laravel-human-model-keys/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/oneduo/laravel-human-model-keys/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/oneduo/laravel-human-model-keys/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/oneduo/laravel-human-model-keys/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/oneduo/laravel-human-model-keys.svg?style=flat-square)](https://packagist.org/packages/oneduo/laravel-human-model-keys)

A package to use human readable keys in your Laravel models. Inspired by Stripe's id generation procedures.

## Installation

You can install the package via composer:

```bash
composer require oneduo/laravel-human-keys
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="human-keys-config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Generator
    |--------------------------------------------------------------------------
    |
    | Used to define the generator to use for generating model keys.
    |
    | Supported:
    |   - ksuid (abc_p6UEyCc8D8ecLijAI5zVwOTP3D0)
    |   - snowflake (abc_1537200202186752)
    |
    | Default: ksuid
    |
    | Note: You may define your own generator by implementing the contract
    |       Oneduo\LaravelHumanKeys\Contracts\Generator and passing
    |       the class name to the generator config option.
    |
    |       See the example below:
    |       'generator' => \App\Services\MyGenerator::class
    */
    'generator' => 'ksuid',
];
```

## Usage

To get started, use the `HasHumanKey` trait in your model:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Oneduo\LaravelHumanKeys\Concerns\HasHumanKey;

class Post extends Model
{
    use HasHumanKey;
}
```

When using the `ksuid` generator, the generated key will something like this: `pos_2JvL8Gv5mirjbIVAlSRFrC8EaWR`

When using the `snowflake` generator, the generated key will something like this: `pos_451734027389370636`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Charaf Rezrazi](https://github.com/rezrazi)
- [All Contributors](../../contributors)
- [godruoyi/php-snowflake](https://github.com/godruoyi/php-snowflake)
- [tuupola/ksuid](https:/:github.com/tuupola/ksuid)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
