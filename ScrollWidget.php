<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\scrollmagic;

use claudejanz\js\JsWidget;

/**
 * Description of ScrollMagic
 *
 * @author Claude
 */
class ScrollWidget extends JsWidget {

    public function init() {
        ScrollMagicAsset::register($this->getView());
    }

}
