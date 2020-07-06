# Powerful reporting system (graphs, bars, tables) as a wrapper around the amazing koolreport.com package. The API could not be simpler.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-reports.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-reports)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/laravel-reports/run-tests?label=tests)](https://github.com/spatie/laravel-reports/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-reports.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-reports)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Learn how to create a package like this one, by watching our premium video course:

[![Laravel Package training](https://spatie.be/github/package-training.jpg)](https://laravelpackage.training)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/package-laravel-reports-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Emilianotisato\Laravel Report\Laravel ReportServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Emilianotisato\Laravel Report\Laravel ReportServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$laravel-reports = new Emilianotisato\Laravel Report();
echo $laravel-reports->echoPhrase('Hello, Emilianotisato!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Emiliano Tisato](https://github.com/emilianotisato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
