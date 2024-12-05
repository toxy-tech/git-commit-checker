# Laravel GIT Commit Checker

<p align="center">
    <img src="/art/overview.png" alt="Overview Git Commit Checker" style="width:70%;">
</p>

<p align="center">
    <a href="https://packagist.org/packages/toxy-tech/git-commit-checker"><img src="https://img.shields.io/packagist/v/toxy-tech/git-commit-checker.svg?style=flat-square" alt="Latest Version"></a>
    <a href="/LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></a>
    <a href="https://packagist.org/packages/toxy-tech/git-commit-checker"><img src="https://img.shields.io/packagist/dt/toxy-tech/git-commit-checker.svg?style=flat-square" alt="Total Downloads"></a>
</p>

## Requirement

- Laravel 9.32 or later
- If you're using Laravel 8.0 or earlier, please use version 1.x

## Installation

You can install the package via composer:

```shell
composer require toxy-tech/git-commit-checker
```

Publish the configuration:

```bash
php artisan vendor:publish --tag=git-commit-checker-config
```

### Install GIT hooks

Run this command to install:

```shell
php artisan git-commit-checker:install
```

Run test manually (made sure you've added all changed files to git stage):

```shell
php artisan git-commit-checker:pre-commit-hook
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
