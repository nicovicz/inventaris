<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\Panel;
use kartik\select2\Select2;
use app\helpers\Master;
/* @var $this yii\web\View */
/* @var $model app\models\KendaraanSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php Panel::begin([
    'title'=>'Pencarian Data Kendaraan',
    'icon'=>'fa fa-filter'
]);?>
<div class="kendaraan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

   

    <div class="col-lg-3">
        <?= $form->field($model, 'merk_id')->widget(Select2::class,[
        'data'=>Master::merk(),
        'pluginOptions'=>[
            'placeholder'=>'Merk Kendaraan',
            'allowClear'=>true
        ]
    ]) ?>
    </div>

    <div class="col-lg-3">
        <?= $form->field($model, 'tipe') ?>
    </div>

     <div class="col-lg-3">
        <?= $form->field($model, 'tahun_perolehan') ?>
    </div>

     <div class="col-lg-3">
        <?php echo $form->field($model, 'unit_id')->widget(Select2::class,[
        'data'=>Master::unitKerja(),
        'pluginOptions'=>[
            'placeholder'=>'Unit Kerja',
            'allowClear'=>true
        ]
    ]) ?>
    </div>

    <div class="col-lg-3">
        <?php echo $form->field($model, 'nomor_mesin') ?>
    </div>

     <div class="col-lg-3">
         <?php echo $form->field($model, 'nomor_rangka') ?>
    </div>

     <div class="col-lg-2">
        <?php echo $form->field($model, 'no_plat_hitam') ?>
    </div>

     <div class="col-lg-2">
         <?php echo $form->field($model, 'no_plat_merah') ?>
    </div>

     <div class="col-lg-2">
         <?php echo $form->field($model, 'status')->dropDownList(Master::statusKendaraan(),[
             'prompt'=>'Pilih'
         ]) ?>
    </div>

   

    <div class="col-lg-12">
        <?= Html::submitButton('<i class="fa fa-search"></i> '.Yii::t('app', 'Cari'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus-circle"></i> Tambah Kendaraan', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php Panel::end();?>