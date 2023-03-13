<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset\Tests\Provider;

use Yii\Tailwind\Asset\TailwindCdnAsset;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            [
                'Css',
                TailwindCdnAsset::class,
            ],
        ];
    }
}
