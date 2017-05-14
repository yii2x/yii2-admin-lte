<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

use yii\helpers\Html;



\yii2x\ui\adminlte\assets\AdminLTEAsset::register($this);

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
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><?= Html::encode(\Yii::$app->name) ?></a>
      </div>     
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
      <!-- /.login-logo -->
      <div class="login-box-body">
        <?= $content ?>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
 


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
