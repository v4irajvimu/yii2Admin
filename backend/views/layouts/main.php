<?php

/* @var $this \yii\web\View */
/* @var $content string */

//use backend\assets\AppAsset;
use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

//AppAsset::register($this);
DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?php require __DIR__ . '/partials/_header.php'; ?>
    <?php require __DIR__ . '/partials/_mainNavigation.php'; ?>
    <?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
    ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
              <?=isset($this->params['title']) ? $this->params['title'] : ""?>
               <?php
               if(isset($this->params['title_sub'])){
                   echo '<small>'.$this->params['title_sub'].'</small>';
               }
               ?>
            </h1>
            <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
            <!--
            <?= 
            Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) 
            ?>
            <?= Alert::widget() ?>
            -->
          </section>
        <section class="content">
            <?= $content ?>
        </section>
        
    </div>
    <?php require __DIR__ . '/partials/_footer.php'; ?>
    <?php require __DIR__ . '/partials/_controllSideBar.php'; ?>
    <div class="control-sidebar-bg"></div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
