<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="100px">
    </a>
    <h1 align="center">Tailwind Asset For Yii3.</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/asset-tailwind/downloads.png)](https://packagist.org/packages/yii-extension/asset-tailwind)
[![Build Status](https://github.com/yii-extension/asset-tailwind/workflows/build/badge.svg)](https://github.com/yii-extension/asset-tailwind/actions?query=workflow%3Abuild)
[![codecov](https://codecov.io/gh/yii-extension/asset-tailwind/branch/master/graph/badge.svg?token=Itn8wKEirt)](https://codecov.io/gh/yii-extension/asset-tailwind)
[![static analysis](https://github.com/yii-extension/asset-tailwind/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/asset-tailwind/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-extension/asset-tailwind/coverage.svg)](https://shepherd.dev/github/yii-extension/asset-tailwind)


## Installation

```shell
composer require yii-extension/asset-tailwind
```

## Using assets

Tailwind is a CSS framework that provides all the CSS to customize your application, the widgets by default
do not register any Asset so you must register them in your application to be used, since you can simply use the
default CSS file layout, or build your own custom CCS.

Three Assets are provided:

- [TailwindAsset](https://tailwindcss.com/docs/installation): CSS file tailwind css framework without JS code.
- [TailwindDarkAsset](src/TailwindDarkAsset.php): CSS file tailwind theme dark without JS code.
- [MinifiedTailwindAsset](src/MinifiedTailwindAsset.php): Minified CSS file tailwind css framework with JS code.
- [MinifiedTailDarkAsset](src/MinifiedTailwindAsset.php): Minified CSS file tailwind theme dark without JS code.

To use widgets only, register `TailwindAsset::class`, which we can do in several ways explained below.

`Note:` You need to have [npm](https://docs.npmjs.com/getting-started) installed, this extension uses [foxy](https://github.com/fxpio/foxy) to install assets. 

### Register asset in view layout or individual view

By registering the Asset in the `layout/main.php` it will be available for all views.

If you need it registered for individual view (such as `views/user/login.php`) only,
register it in that view.


```php
use  Yii\Extension\Asset\Tailwind\TailwindAsset;

/**
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var Yiisoft\View\WebView $this
 */

$assetManager->register([
    TailwindAsset::class,
]);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());
```

### Register asset in application params

You can register asset in the assets parameters, (by default, this is `config/packages/yiisoft/assets/params.php`).
Asset will be available for all views of this application.

```php
use  Yii\Extension\Asset\Tailwind\TailwindAsset;

'yiisoft/asset' => [
    'assetManager' => [
        'register' => [
            TailwindAsset::class,
        ],
    ],
],
```

Then in `layout/main.php`:

```php
/* @var Yiisoft\View\WebView $this */

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());
```

## Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

## Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/docs). To run static analysis:

```shell
./vendor/bin/psalm
```

## License

The `yii-extension/asset-tailwind` for Yii Packages is free software.

It is released under the terms of the BSD License. Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Extension](https://github.com/yii-extension).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

## Powered by Yii Framework

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
