# Vault SDK for PHP
[![Latest Version on Packagist](https://img.shields.io/packagist/v/arcdigital/vault-php.svg?style=flat-square)](https://packagist.org/packages/arcdigital/vault-php)
[![Total Downloads](https://img.shields.io/packagist/dt/arcdigital/vault-php.svg?style=flat-square)](https://packagist.org/packages/arcdigital/vault-php)
[![Tests](https://img.shields.io/github/actions/workflow/status/arcdigital/vault-php/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/arcdigital/vault-php/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/github/actions/workflow/status/arcdigital/vault-php/phpstan.yml?branch=master&label=phpstan&style=flat-square)](https://github.com/arcdigital/vault-php/actions/workflows/phpstan.yml)
[![Code Style](https://img.shields.io/github/actions/workflow/status/arcdigital/vault-php/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/arcdigital/vault-php/actions/workflows/fix-php-code-style-issues.yml)

A PHP SDK for interacting with HashiCorp Vault.

## Installation

You can install the package via composer:

```bash
composer require arcdigital/vault-php
```

If you are using Laravel, you can publish the config file with:

You can publish the config file with:

```bash
php artisan vendor:publish --tag="vault"
```

## Usage

```php
$vault = new Arcdigital\Vault();
```

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

- [Anand Capur](https://github.com/arcdigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
