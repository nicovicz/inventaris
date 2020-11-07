<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjam */

$this->title = 'Ubah Pemegang: ' . ' ' . $model->nama_peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Pemegang Kendaraan Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
?>
<div class="peminjam-update">



    <?= $this->render('_form', [
        'model' => $model,
         'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]) ?>

</div>
