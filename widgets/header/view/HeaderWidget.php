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
                  
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <?= \yii2x\ui\adminlte\widgets\user\profile\UserProfileImage::widget(["options"=>["class"=>"user-image", "alt"=>"User Image"]]); ?> 
                      <span class="hidden-xs"><?= Yii::$app->user->identity->username; ?></span>
                    </a>                  
     
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  <li class="user-header">
                    <?= \yii2x\ui\adminlte\widgets\user\profile\UserProfileImage::widget(["options"=>["class"=>"img-circle", "alt"=>"User Image"]]); ?> 
                    <p>
                        <?= Yii::$app->user->identity->username; ?>
                        <br>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                        
                        <?= Html::a('Profile', ['/auth/view'], ['class' => 'btn btn-default btn-flat']) ?>
                    </div>
                    <div class="pull-right">
                      <?= Html::a('Sign Out', ['/signout'], [ 'class' => 'btn btn-default btn-flat']);; ?> 
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>