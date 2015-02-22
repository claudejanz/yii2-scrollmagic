<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\scrollmagic;

/**
 * Description of ScrollScene
 *
 * @author Claude
 */
class ScrollScene extends ScrollWidget{
    //put your $scene = new ScrollScene(['duration'=> 100])code here
    public function init() {
        parent::init();
        
        $this->setJs('var '.$this->id.' = new ScrollScene()');
    }
}
