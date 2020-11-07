<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ttd */

$this->title = 'Ubah TTD SPPKD: ' . ' ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Manajemen TTD SPPKD', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
?>
<div class="ttd-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
