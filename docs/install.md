## Using assets

Assets are files that are not processed by Webpack. They are copied directly to the output folder. This includes images, fonts, and any other files that you want to use in your project.

To use an asset, you need to import it from JavaScript or CSS.

Register the asset bundle with a view component such as a layout view. You can register it in a layout view so that it is available in all views that extend from this layout, or you can register it in a view that uses the asset.

```php
file: ./resources/views/layout/main.php

<?php

declare(strict_types=1);

use Yii\Tailwind\Asset\TailwindDevAsset;

/**
 * @var \Yiisoft\Assets\AssetManager $assetManager
 */

// Register the asset bundle with a asset manager component.
$assetManager->register(TailwindDevAsset::class);

// Set parameters for the registered asset bundle a view component.
$this->addCssFiles($assetManager->getCssFiles());
$this->addCssStrings($assetManager->getCssStrings());
$this->addJsFiles($assetManager->getJsFiles());
$this->addJsStrings($assetManager->getJsStrings());
$this->addJsVars($assetManager->getJsVars());
```

Also you can register the asset bundle via container configuration:

```php
file: ./config/params.php

<?php

declare(strict_types=1);

use Yii\Tailwind\Asset\TailwindCdnAsset;

return [
    'yiisoft/assets' => [
        'assetManager' => [
            'register' => [
                TailwindCdnAsset::class,
            ],
        ],
    ],
];
```

## Using npm packages

[npm](https://www.npmjs.com/) packages are installed via [fxpio/foxy](https://github.com/fxpio/foxy) and are available in the `node_modules` directory. 

**Note:** *This package generates all the CSS for [Tailwind CSS](https://tailwindcss.com/) and its plugins. It does not include any JavaScript. If you only need to generate the classes of your project, check the documentation of [Tailwind CSS](https://tailwindcss.com/docs/installation/).*
