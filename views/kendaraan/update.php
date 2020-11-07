<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */


$this->title = 'Ubah Kendaraan: ' . ' ' . $model->no_plat_merah;
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Kendaraan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
?>
<div class="kendaraan-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
