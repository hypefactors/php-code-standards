# PHP Code Standards

This repository contains the coding standards followed by Hypefactors.

It includes configuration for:
- [Easy Coding Standard](https://github.com/easy-coding-standard/easy-coding-standard) (`ecs`)
- [PHPStan](https://phpstan.org/) (`phpstan`)

## Setup

First install the dependency through Composer by running:

```shell
composer require hypefactors/php-code-standards --dev
```

Once the dependency is installed, run the following:

```shell
composer hypefactors:setup-code-standards
```

Next open your `composer.json` file and add the following section:

```json
"scripts": {
    "ecs": "./vendor/bin/ecs --fix",
    "ecs:ci": "./vendor/bin/ecs",
    "phpstan": "./vendor/bin/phpstan analyse --ansi"
},
```

> *Note*: If you already have a `scripts` section on your `composer.json` file, just merge the new scripts with the existing ones.

## Usage

To use it, you can run one of the scripts added to your `composer.json` file:

```shell
composer ecs
composer ecs:fix
composer phpstan
```

## License

PHP Code Standards is licenced under the BSD 3-Clause Licence. Please see the [license file](LICENSE) for more information.
