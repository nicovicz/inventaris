<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ttd */

$this->title = 'Tambah TTD SPPKD';
$this->params['breadcrumbs'][] = ['label' => 'Manajemen TTD SPPKD', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['create']];
?>
<div class="ttd-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
