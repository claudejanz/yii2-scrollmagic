<?php

namespace claudejanz\scrollmagic;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class ScrollMagicAsset extends AssetBundle
{
    public $sourcePath = '@bower/scrollmagic/scrollmagic/minified';
    
    public $depends = [
        'yii\web\JqueryAsset',
         'claudejanz\gsap\AssetGsap',
      ];
    
    public $js = [
        'ScrollMagic.min.js',
        //'plugins/jquery.ScrollMagic.min.js',
        'plugins/animation.gsap.min.js',
    ];
    public function init() {
        if(YII_DEBUG)$this->js[] = "plugins/debug.addIndicators.min.js";
        parent::init();
    }
}
