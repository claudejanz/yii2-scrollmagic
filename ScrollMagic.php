<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\scrollmagic;

use yii\base\Widget;

/**
 * Description of ScrollMagic
 *
 * @author Claude
 */
class ScrollMagic extends Widget{
    public function init() {
        parent::init();
        AssetGsap::register( $this->getView());
    }
}
