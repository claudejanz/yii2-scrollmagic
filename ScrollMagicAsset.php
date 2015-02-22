<?php

namespace claudejanz\scrollmagic;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class ScrollMagicAsset extends AssetBundle
{
    public $sourcePath = '@bower/gsap/src';
    public $js = [
        //'minified/jquery.gsap.min.js',
        'minified/TweenMax.min.js',
    ];
}
