<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset\Tests\Provider;

use Yii\Tailwind\Asset;

final class NpmAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', Asset\TailwindDevAsset::class],
            ['Css', Asset\TailwindDarkDevAsset::class],
            ['Css', Asset\TailwindProdAsset::class],
            ['Css', Asset\TailwindDarkProdAsset::class],
        ];
    }
}
