<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppLoginAsset;
AppLoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php
    $this->registerCss("
    body::before {
    content: '';
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: url(../img/cover.jpeg) center center no-repeat;
    background-size: cover;
    will-change: transform;
    z-index: -1;
    filter: blur(5px);
        -webkit-filter: blur(5px);
}

 a.btn{
      color:#fff !important;
  }
    ")
    ?>
</head>
<body>
<?php $this->beginBody() ?>

<main class="auth-main">
  <div class="auth-block">
      <?=Alert::widget();?>
      <?=$content;?>
    </div>
  </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
