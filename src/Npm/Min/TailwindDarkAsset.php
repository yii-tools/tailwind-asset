<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset\Npm\Min;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class TailwindDarkAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/tailwindcss';
    public array $css = ['dist/tailwind-dark.min.css'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**dist/tailwind-dark.min.css',
            ),
        ];
    }
}
