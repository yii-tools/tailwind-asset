<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset\Tests\Provider;

use Yii\Tailwind\Asset\Npm;

final class NpmAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public function assetBundles(): array
    {
        return [
            [
                'Css',
                Npm\Dev\TailwindAsset::class,
            ],
            [
                'Css',
                Npm\Dev\TailwindDarkAsset::class,
            ],
            [
                'Css',
                Npm\Dev\TailwindExperimentalAsset::class,
            ],
            [
                'Css',
                Npm\Min\TailwindAsset::class,
            ],
            [
                'Css',
                Npm\Min\TailwindDarkAsset::class,
            ],
            [
                'Css',
                Npm\Min\TailwindExperimentalAsset::class,
            ],
        ];
    }
}
