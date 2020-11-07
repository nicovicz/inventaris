<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjam */

$this->title = 'Tambah Pemegang';
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Pemegang Kendaraan Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['create']];
?>
<div class="peminjam-create">

   

    <?= $this->render('_form', [
        'model' => $model,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]) ?>

</div>
