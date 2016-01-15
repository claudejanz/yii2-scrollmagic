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
        $this->addJs('var ' . $this->id . ' = new ScrollMagic.Scene(' . Json::encode($config) . ');');
        parent::init();
    }

    public function setPin($param) {
        $this->addJs($this->id . '.setPin("' . $param . '");');
        return $this;
    }

    public function addTo($param) {
        $this->addJs($this->id . '.addTo(' . $param->id . ');');
        return $this;
    }

    public function __toString() {
        return $this->id;
    }

    public function setTween($target) {
        if (is_string($target) && empty($options)) {
            $this->addJs($this->id . '.setTween(' . $target . ');');
        } 
        return $this;
    }
    
    public function setGsapTween($target, $time = 1, $options = []) {
        
            $this->addJs($this->id . '.setTween("' . $target . '",' . $time . ',' . Json::encode($options) . ');');
        return $this;
    }

    public function addIndicators($params = null) {
        if ($params === null) {
            $params = ['name' => $this->id];
        }
        $this->addJs($this->id . '.addIndicators(' . Json::encode($params) . ');');
        return $this;
    }

    public function removeIndicators() {

        $this->addJs($this->id . '.removeIndicators();');
        return $this;
    }

}
