<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */


namespace yii2x\ui\adminlte\assets;

use yii\web\AssetBundle;

class AdminLTEResourcesAsset extends AssetBundle
{
    
    public function init()
    {

        $this->sourcePath = '@vendor/yii2x/yii2-admin-lte/resources/';        
        $this->css = [
            'css/app.css'
        ];
        $this->js = [
       
        ];

        parent::init();
    }    
    
}
