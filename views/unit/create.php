<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unit */

$this->title = 'Tambah Unit';
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Unit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['create']];
?>
<div class="unit-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
