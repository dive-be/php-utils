# 🛠 Collection of useful tools used at DIVE

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dive-be/php-utils.svg?style=flat-square)](https://packagist.org/packages/dive-be/php-utils)

- [Makeable](#makeable)

## Installation

You can install the package via composer:

```bash
composer require dive-be/php-utils
```

## Usage

### Makeable

Allows instantiation of classes using a static `make` function:

```php
Field::make('label')->hidden()->hint('At least 2 characters');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email oss@dive.be instead of using the issue tracker.

## Credits

- [Muhammed Sari](https://github.com/mabdullahsari)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
