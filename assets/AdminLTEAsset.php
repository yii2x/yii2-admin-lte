<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */


namespace yii2x\ui\adminlte\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yii2x/yii2-admin-lte/dist/';
    public $css = [
       
        ];
    public $js =  [
        'script.js',
       // 'js/demo.js'        
    ];
    public $depends = [
        'yii2x\ui\adminlte\assets\AdminLTEBaseAsset',
    ];
}
