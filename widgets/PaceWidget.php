<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

namespace yii2x\ui\adminlte\widgets;

use yii\base\Widget;
use yii2x\ui\adminlte\assets\PaceAsset;

class PaceWidget extends Widget{
    

    
    public function run(){
        
        PaceAsset::register($this->getView());
        
        return $this->render('PaceWidget', [

        ]);          
    }   
}

