<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\Panel;
use kartik\select2\Select2;
use app\helpers\Master;

/* @var $this yii\web\View */
/* @var $model app\models\PeminjamSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php Panel::begin([
    'title'=>'Pencarian Data Pemegang',
    'icon'=>'fa fa-filter'
]);?>
<div class="peminjam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   
    <div class="col-lg-4">
    <?= $form->field($model, 'nama_peminjam') ?>
    </div>    
   
    <div class="col-lg-4">
    <?= $form->field($model, 'unit_id')->widget(Select2::class,[
        'data'=>Master::unitKerja(),
        'pluginOptions'=>[
            'placeholder'=>'Unit Kerja',
            'allowClear'=>true
        ]
    ]) ?>
     </div>    

    <div class="col-lg-4">
    <?= $form->field($model, 'status')->dropDownList(Master::statusPinjam(),[
             'prompt'=>'Pilih'
         ]) ?>
          </div>    



   
    <div class="col-lg-12">
        <?= Html::submitButton('<i class="fa fa-search"></i> '.Yii::t('app', 'Cari'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus-circle"></i> Tambah Pemegang', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('<i class="fa fa-file-excel"></i> Export Excel', ['excel'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php Panel::end();?>