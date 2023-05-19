<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;

final class TailwindCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css'];
}
