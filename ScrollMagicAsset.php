<?php

namespace claudejanz\scrollmagic;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class ScrollMagicAsset extends AssetBundle
{
    public $sourcePath = '@bower/ScrollMagic/scrollmagic/minified';
    public $js = [
        'ScrollMagic.min.js',
//        'plugins/jquery.ScrollMagic.min.js',
//        'plugins/animation.gsap.min.js',
    ];
}
