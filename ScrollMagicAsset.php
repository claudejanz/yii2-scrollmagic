<?php

namespace claudejanz\scrollmagic;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class ScrollMagicAsset extends AssetBundle
{
    public $sourcePath = '@bower/ScrollMagic/ScrollMagic/minified';
    public $js = [
        //'minified/jquery.gsap.min.js',
        'ScrollMagic.min.js',
    ];
}
