<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <?php
    $web = Yii::getAlias('@web');
    $this->registerCss("
    body.blur-theme::before {
    position: fixed;
    background: url(".$web."/img/cover.jpeg) center center no-repeat;
    background-size: cover;
}

 a.btn{
      color:#fff !important;
  }
    ")
    ?>
</head>
<body class="blur-theme">
<?php $this->beginBody() ?>



<div class="container">
  <div class="al-content">
 
  <?=$content;?>
</div>
</div>

</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
