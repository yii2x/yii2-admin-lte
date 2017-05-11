<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

use Yii;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii2x\ui\adminlte\widgets\alert\FlashAlertWidget;
use yii2x\ui\adminlte\widgets\header\HeaderWidget;
use yii2x\ui\adminlte\widgets\footer\FooterWidget;

\yii2x\ui\adminlte\assets\AdminLTEAsset::register($this);
\yii2x\ui\adminlte\assets\AdminLTEResourcesAsset::register($this);
\yii2x\ui\ext\assets\ExtJsAdminAsset::register($this);
use app\assets\AppAsset;

AppAsset::register($this);

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
<body class="hold-transition fixed skin-blue sidebar-mini">
<?php $this->beginBody() ?>
    <div class="wrapper">

        <?= HeaderWidget::widget(); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
            <?= \yii2x\ui\menu\MenuWidget::widget(
                [
                    'alias' => 'ADMIN_MENU',
                    'menuTitle' => 'MAIN NAVIGATION',
                    'options' => [
                        "class"=>"sidebar-menu"
                    ]
                ]
            ); ?>                         
          
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header container-fluid">

                <h1> <?= Html::encode($this->title) ?></h1>
                <?= Breadcrumbs::widget([
                    'tag' => 'ol',
                    'options' => [
                        'class' => 'breadcrumb'
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>                 
         
        </section>

        
        <section id="alert-placeholder" class="container-fluid">

            <?= FlashAlertWidget::widget();?>
            
        </section>        
        
        <!-- Main content -->
        <section class="content container-fluid">         
                <?= $content ?>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      <?= FooterWidget::widget(); ?>
      


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
