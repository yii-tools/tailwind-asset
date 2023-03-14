<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class TailwindProdAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = __DIR__ . '/css';
    public array $css = ['tailwind.min.css'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = ['filter' => $pathMatcher->only('**/tailwind.min.css')];
    }
}
