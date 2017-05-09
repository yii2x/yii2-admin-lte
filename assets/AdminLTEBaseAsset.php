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
class AdminLTEBaseAsset extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte/dist/';
    public $css = [
        'css/AdminLTE.css',
        'css/skins/_all-skins.min.css',
        ];
    public $js =  [
        'js/app.js',
       // 'js/demo.js'        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii2x\common\assets\FontAwesomeAsset',
        'yii2x\common\assets\IoniconsAsset',
    ];
}
