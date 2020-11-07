<?php

use yii\helpers\Html;
use app\widgets\ActiveForm;
use app\helpers\Master;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Ttd */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['/site/api-pegawai']);
$nipId = '#'.Html::getInputId($model,'nip');
$golongan = '#'.Html::getInputId($model,'golongan');
$nama = '#'.Html::getInputId($model,'nama');
$jabatan = '#'.Html::getInputId($model,'jabatan');
$pangkat = '#'.Html::getInputId($model,'pangkat');
?>

<div class="ttd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip',[
            'template' => "{label}<div class=\"col-lg-9\"><div class=\"input-group\">{input}<span class=\"input-group-btn\"><button id=\"cari\" class=\"btn btn-success\"><i class=\"fa fa-search\"></i></button></span>
            </div>{error}</div>",
        ])->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->radioList(Master::statusTtd()) ?>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("

$(document).on('click','#cari',function(e){
    e.preventDefault();
    var nip = $('".$nipId."').val();
    $.post('".$url."',{nip:nip},function(res){
      
        $('".$nama."').val(res.nama);
      
        $('".$golongan."').val(res.golongan);
       
        $('".$pangkat."').val(res.pangkat);
        if (res.jabatan_struktural !== ''){
            $('".$jabatan."').val(res.jabatan_struktural);
        }else{
            $('".$jabatan."').val(res.jabatan_fungsional);
        }
      

    });
});
");
