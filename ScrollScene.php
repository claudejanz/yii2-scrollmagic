<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\scrollmagic;

use yii\helpers\Json;

/**
 * Description of ScrollScene
 *
 * @author Claude
 */
class ScrollScene extends ScrollWidget {

    //put your $scene = new ScrollScene(['duration'=> 100])code here
    public $options;

    public function __construct($config = []) {
        $this->setJs('var ' . $this->id . ' = new ScrollMagic.Scene(' . Json::encode($config) . ');');
        parent::init();
    }

    public function setPin($param) {
        $this->setJs($this->id . '.setPin("' . $param . '");');
        return $this;
    }

    public function addTo($param) {
        $this->setJs($this->id . '.addTo(' . $param->id . ');');
        return $this;
    }

    public function __toString() {
        return $this->id;
    }

    public function setTween($target, $time = 1, $options = []) {
        $this->setJs($this->id . '.setTween("' . $target . '",' . $time . ',' . Json::encode($options) . ');');
        return $this;
    }

    public function addIndicators($params = null) {
        if ($params === null) {
            $params = ['name' => $this->id];
        }
        $this->setJs($this->id . '.addIndicators(' . Json::encode($params) . ');');
        return $this;
    }

    public function removeIndicators() {

        $this->setJs($this->id . '.removeIndicators();');
        return $this;
    }

}
