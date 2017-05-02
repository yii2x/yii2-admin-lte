<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

\yii2x\ui\adminlte\assets\AdminLTEAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<?php $this->beginBody() ?>
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><i class ="fa fa-2x fa-globe"></i></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><?= Html::encode(\Yii::$app->name) ?></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

        <div class="navbar-header"><span class="navbar-brand" href="#"><?= \app\widgets\adminlte\account\AccountName::widget(); ?> </span></div>
                  
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <?= \app\widgets\adminlte\user\profile\UserProfileImage::widget(["options"=>["class"=>"user-image", "alt"=>"User Image"]]); ?> 
                      <span class="hidden-xs"><?= \app\widgets\adminlte\user\profile\UserProfileName::widget(); ?></span>
                    </a>                  
     
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <?= \app\widgets\adminlte\user\profile\UserProfileImage::widget(["options"=>["class"=>"img-circle", "alt"=>"User Image"]]); ?> 
                    <p>
                        <?= \app\widgets\adminlte\user\profile\UserProfileName::widget(); ?> 
                        <br><?= \app\widgets\adminlte\user\profile\UserProfileTitle::widget(); ?> 
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                        
                        <?= Html::a('Profile', ['/userprofile/view', "id" => \Yii::$app->user->identity->id], ['class' => 'btn btn-default btn-flat']) ?>
                    </div>
                    <div class="pull-right">
                      <?= \app\widgets\adminlte\LogoutButton::widget(); ?> 
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
            <?= \app\components\access\AdminMenu::widget(
                [
                    'options' => [
                        "class"=>"sidebar-menu"
                    ],
                    'items' => \app\components\access\UserAdminMenuItems::getItems(9)
                ]
            ); ?>          
                       
          
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <h1> <?= Html::encode($this->title) ?></h1>
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>                 
            </div>           
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?php if (\Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success alert-dismissable"> 
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                        <strong><span style="font-size:16px" class="glyphicon glyphicon-ok-circle"></span></strong>
                        <?= \Yii::$app->session->getFlash('success'); ?>
                    </div>
                <?php endif; ?>   
                <?php if (\Yii::$app->session->hasFlash('failure')): ?>
                    <div class="alert alert-danger alert-dismissable"> 
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                        <strong><span style="font-size:16px" class="glyphicon glyphicon-remove-circle"></span></strong>
                        <?= \Yii::$app->session->getFlash('failure'); ?>
                    </div>
                <?php endif; ?> 
                <?= $content ?>

                <!-- /.row (main row) -->                
            </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2017-<?= date('Y') ?> <a href="#"><?= Html::encode(\Yii::$app->name) ?></a>.</strong> All rights
        reserved.
      </footer>

      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
