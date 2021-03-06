<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login">
    <p class="text-center">
    <img src="https://sirani.hubla.dephub.go.id/asset/img/logoWhiteColor.png"  class="text-center" /></p>

    

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <?=Html::a('Lupa Password',Url::to(['/site/request-password-reset']),['class'=>'btn btn-primary']);?>
                <?=Html::a('Cek Kendaraan',Url::to(['/site/kendaraan']),['class'=>'btn btn-warning']);?>
            
        </div>

    <?php ActiveForm::end(); ?>

    
</div>
