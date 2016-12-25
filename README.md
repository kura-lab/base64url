# base64url
Base64url Encoding/Decoding

[![Packagist](https://img.shields.io/packagist/v/kura-lab/base64url.svg)](https://packagist.org/packages/kura-lab/base64url)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://github.com/kura-lab/base64url/blob/master/LICENSE)

### Requirements

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.3.3-8892BF.svg?style=flat-square)](https://php.net/)
* PHP 5.3.3 or higher.

### Install

At first, install composer.

```
$ mkdir workspace
$ cd workspace
$ curl -s http://getcomposer.org/installer | php
```

Create composer.json.

```
{
    "require": {
        "kura-lab/base64url": "1.*"
    }
}
```

Install jose library.

```
$ php composer.phar install
```

### Development

Check coding style with CodeSniffer.

```
$ vendor/bin/phpcs --standard=PSR2 src/
```

Execute unit test with PHPUnit.

```
$ vendor/bin/phpunit
```

Fix source code with PHP Coding Standards Fixer.

```
$ vendor/bin/php-cs-fixer fix --config-file .php_cs --verbose --diff --dry-run
$ vendor/bin/php-cs-fixer fix --config-file .php_cs --verbose --diff
```
