<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\helpers\Master;
use app\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use app\helpers\Utils;

$tahun_perolehan = '#'.Html::getInputId($model,'tahun_perolehan');
$listPajak = Master::jenisPajak();
$tahunPajak =Master::tahunJenisPajak();
$isiPajak = [];

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */
/* @var $form yii\widgets\ActiveForm */
if ($model->id){
    $isiPajak = Utils::getPajak($model->id);
}
?>

<div class="kendaraan-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-6">

    <?= $form->field($model, 'merk_id')->widget(Select2::class,[
        'data'=>Master::merk(),
        'pluginOptions'=>[
            'placeholder'=>'Merk Kendaraan',
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'tipe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_perolehan')->widget(DatePicker::class,[
        'pluginOptions'=>[
            'format' => 'yyyy-mm-dd',
        ]
    ]); ?>

    <div class="alert alert-info">
        <?php foreach($listPajak as $key => $pajak):?>
        <div class="form-group">
            <label class="col-lg-4" style="color:#000">Tgl <?=$pajak;?></label>
            <?php $varId = str_replace(' ','_',strtolower($pajak)); ?>
            <div class="col-lg-8">
             <input class="form-control" readonly style="color:#000"
              id="<?=$varId;?>" name="<?=$varId;?>"
              value="<?=!empty($isiPajak[$varId])?$isiPajak[$varId]:'';?>"
             />
            </div>
        </div>
        <?php endforeach;?>
       
       
    </div>

    <?= $form->field($model, 'tgl_pembuatan')->textInput() ?>

    <?= $form->field($model, 'no_plat_hitam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_plat_merah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_id')->widget(Select2::class,[
        'data'=>Master::unitKerja(),
        'pluginOptions'=>[
            'placeholder'=>'Unit Kerja',
            'allowClear'=>true
        ]
    ]) ?>

     <?= $form->field($model, 'status')->radioList(Master::statusKendaraan()) ?>

    </div>

    <div class="col-lg-6">
     <?= $form->field($model, 'bpkb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_bpkb')->fileInput() ?>
    
    <?php if ($model->file_bpkb):?>
    <div class="form-group">
        <label class="col-lg-3"></label>
        <div class="col-lg-9">
            <?=sprintf('<p class="text-center"><a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a></p>',Url::to(['preview-bpkb','id'=>$model->id]));?>
        </div>
    </div>
    <?php endif;?>

    <?= $form->field($model, 'no_stnk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_stnk')->fileInput() ?>

    <?php if ($model->file_stnk):?>
    <div class="form-group">
        <label class="col-lg-3"></label>
        <div class="col-lg-9">
            <?=sprintf('<p class="text-center"><a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a></p>',Url::to(['preview-stnk','id'=>$model->id]));?>
        </div>
    </div>
    <?php endif;?>

    <?= $form->field($model, 'nomor_mesin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_rangka')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'gambar')->fileInput() ?>

    <?php if ($model->gambar):?>
    <div class="form-group">
        <label class="col-lg-3"></label>
        <div class="col-lg-9">
            <?=sprintf('<p class="text-center"><a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a></p>',Url::to(['preview','id'=>$model->id]));?>
        </div>
    </div>
    <?php endif;?>

    </div>
    <?php ActiveForm::end(); ?>

</div>
<?php
   $template = '';
   foreach($listPajak as $key => $pajak){
      $varId = str_replace(' ','_',strtolower($pajak));
      $varTahun = $tahunPajak[$key];
      $template .= "var $varId = moment(now).add($varTahun,'years').format('yyyy-MM-DD');";
      $template .= '$("#'.$varId.'").val('.$varId.');';

   }
   $this->registerJs("
        $(document).on('change','".$tahun_perolehan."',function(){
            var now = $(this).val();
            $template
        });
   ");
?>