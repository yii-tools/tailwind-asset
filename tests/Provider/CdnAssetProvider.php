<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset\Tests\Provider;

use Yii\Tailwind\Asset\Cdn\TailwindAsset;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public function assetBundles(): array
    {
        return [
            [
                'Css',
                TailwindAsset::class,
            ],
        ];
    }
}
