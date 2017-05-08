<?php
namespace yii2x\ui\adminlte\widgets\user\profile;


use yii\base\Widget;
use yii\helpers\Html;


class UserProfileName extends Widget{
        
        public $options = [];
	public function run(){

            $user = \Yii::$app->user->identity;
            $html =  $user->first . ' ' . $user->last;         
            return $html;
	}
       
}
?>