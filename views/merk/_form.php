<?php

use yii\helpers\Html;
use app\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Merk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    

    <?php ActiveForm::end(); ?>

</div>
