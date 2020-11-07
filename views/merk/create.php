<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Merk */

$this->title = 'Tambah Merk';
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Merk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['create']];
?>
<div class="merk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
