<?php
namespace yii2x\ui\adminlte\widgets\user\profile;


use yii\base\Widget;
use yii\helpers\Html;


class UserProfileImage extends Widget{
        
        public $options = [];
	public function run(){

            $html =  Html::img(\Yii::$app->assetManager->getPublishedUrl('@vendor/yii2x/yii2-admin-lte/resources/') . '/images/user/user_96.png', $this->options);         
            return $html;
	}
       
}
?>