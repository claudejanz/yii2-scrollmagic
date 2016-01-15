<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\scrollmagic;

use yii\helpers\Json;

/**
 * Description of ScrollMagic
 *
 * @author Claude
 */
class ScrollController extends ScrollWidget {

    public function __construct($config = []) {
        $this->addJs('var ' . $this->id . ' = new ScrollMagic.Controller(' . Json::encode($config) . ');');
    }

    public function addScene($scenes) {
        foreach ($scenes as $key => $scene) {

            $this->addJs($this->id . '.addScene(' . $scene . ');');
        }
    }

}
