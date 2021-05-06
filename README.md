## PHP Code Standards

This repository provides a base configuration for [`friendsofphp/php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer), which we use to verify and enforce a single coding standard for PHP code written on Hypefactors.

## Installation

Run the following:

```sh
composer require --dev hypefactors/php-code-standards
```

## Usage

Now that the package is installed, create a configuration file called `.php_cs` or `.php_cs.php` at the root of your project with the following contents:

```php
<?php

// Create a new CS Fixer Finder instance
$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new Hypefactors\CodeStandards\Config())
    ->setFinder($finder)
;
```

### Ignoring files and/or directories

There will be certain situations where you might want to ignore certain files or directories to not be linted.

Luckily, this is quite easy to achieve and all you need to do is to perform some calls on the CS Fixer Finder instance :)

Here's a simple example where we ignore both files and directories:

```php
<?php

// Directories to not scan
$excludeDirs = [
    'vendor/',
];

// Files to not scan
$excludeFiles = [
    'config/app.php',
];

// Create a new CS Fixer Finder instance
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude($excludeDirs)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->filter(function (\SplFileInfo $file) use ($excludeFiles) {
        return ! in_array($file->getRelativePathName(), $excludeFiles);
    })
;

return (new Hypefactors\CodeStandards\Config())
    ->setFinder($finder)
;
```

### Enforce coding standards for PHPUnit tests

If you would like to also enable coding standards on your tests, you can call the `withPHPUnitRules()` method on the `Config` class, like so:

```php
<?php

// Create a new CS Fixer Finder instance
$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new Hypefactors\CodeStandards\Config())
    ->setFinder($finder)
    ->withPHPUnitRules()
;
```

## Contributing

Thank you for your interest in PHP Code Standards. Here are some of the many ways to contribute.

- Check out our [contributing guide](/.github/CONTRIBUTING.md)
- Look at our [code of conduct](/.github/CODE_OF_CONDUCT.md)

## Security

If you discover any security related issues, please email security@hypefactors.com instead of using the issue tracker.

## License

PHP Code Standards is licenced under the BSD 3-Clause Licence. Please see the [license file](LICENSE) for more information.
