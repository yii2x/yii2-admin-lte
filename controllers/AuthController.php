<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

namespace yii2x\ui\adminlte\controllers;

use Yii;
use yii\web\Controller;
/**
 * Default controller for the `user` module
 */
class AuthController extends Controller
{
    
    
    
    public function beforeAction($action){
        if(!empty($action->layout)){
            $this->layout = $action->layout;
        }
        return parent::beforeAction($action);
    }
    
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            
            'signin' => [
                'class'     => '\yii2x\user\actions\SigninAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view'      => '@vendor/yii2x/yii2-user/views/auth/signin'
            ],  
            
            'signout' => [
                'class' => '\yii2x\user\actions\SignoutAction',
            ],   
        
            'signup' => [
                'class' => '\yii2x\user\actions\SignupAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view' => '@vendor/yii2x/yii2-user/views/auth/signup'
            ],              
            
            'registration' => [
                'class' => '\yii2x\user\actions\RegistrationAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view' => '@vendor/yii2x/yii2-user/views/auth/registration'
            ],   

            'passwordrequest' => [
                'class' => '\yii2x\user\actions\PasswordRequestAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view' => '@vendor/yii2x/yii2-user/views/auth/password_request'
            ],   
            
            'passwordreset' => [
                'class' => '\yii2x\user\actions\PasswordResetAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view' => '@vendor/yii2x/yii2-user/views/auth/password_reset'
            ],   

            'usernamerequest' => [
                'class' => '\yii2x\user\actions\UsernameRequestAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view' => '@vendor/yii2x/yii2-user/views/auth/username_request'
            ], 
          
            'usernameview' => [
                'class' => '\yii2x\user\actions\UsernameViewAction',
                'layout'    => '@vendor/yii2x/yii2-admin-lte/views/layout/signin',
                'view' => '@vendor/yii2x/yii2-user/views/auth/username_view'
            ],             
            
            'message' => [
                'class' => '\yii2x\user\actions\MessageAction',
                'view' => '@vendor/yii2x/yii2-user/views/auth/message'
            ],             
        ];
    }
}
