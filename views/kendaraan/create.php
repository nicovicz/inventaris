<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */

$this->title = 'Tambah Kendaraan';
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Kendaraan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['create']];
?>
<div class="kendaraan-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
