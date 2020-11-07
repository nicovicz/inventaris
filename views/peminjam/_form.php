<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\helpers\Master;
use app\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Peminjam */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['/site/api-pegawai']);
$nipId = '#'.Html::getInputId($model,'nip');
$golongan = '#'.Html::getInputId($model,'golongan_peminjam');
$nama = '#'.Html::getInputId($model,'nama_peminjam');
$email = '#'.Html::getInputId($model,'email_peminjam');
$jabatan = '#'.Html::getInputId($model,'jabatan_peminjam');
$pangkat = '#'.Html::getInputId($model,'pangkat_peminjam');
$telp  = '#'.Html::getInputId($model,'no_telp');

$this->registerCss("
.summary{
 color:#fff !important;
}

.not-set{
color:#fff !important;;
}

.modal .modal-dialog .form-control {
    color: #fff;
    background-color: transparent;
    border: 1px solid #e7e7e7;
}
");
?>

<div class="peminjam-form">

<?php if (empty(Master::getTtd())):?>

<div class="alert alert-danger">
    <h3 class="text-center text-danger">
        Penandatangan SPPKD Belum Di-set
    </h3>
</div>
<?php else:?>

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-6">
        <caption><h4>Data Kendaraan Dinas</h4></caption>
        <hr/>
       
       
        <div class="form-group">
            <label class="col-lg-3">Merk/Tipe</label>
            <div class="col-lg-6">
                <input class="form-control" readonly id="merk" 
                value="<?=$model->isNewRecord?'':$model->kendaraan->merk->nama;?>"
                />
            </div>
            <div class="col-lg-3">
             
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-kendaraan">
<i class="fa fa-folder-open"></i>
</button>

               
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3">Unit Kerja Pemilik</label>
            <div class="col-lg-9">
            <input class="form-control" readonly id="unit_pemilik"
             value="<?=$model->isNewRecord?'':$model->kendaraan->unit->nama;?>"
            />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3">Nomor Rangka</label>
            <div class="col-lg-9">
             <input class="form-control" readonly id="norangka" 
              value="<?=$model->isNewRecord?'':$model->kendaraan->nomor_rangka;?>"
             />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3">Nomor Mesin</label>
            <div class="col-lg-9">
                 <input class="form-control" readonly id="nomesin" 
                  value="<?=$model->isNewRecord?'':$model->kendaraan->nomor_mesin;?>"
                 />
            </div>
        </div>
        <?= $form->field($model, 'kendaraan_id')->label(false)->hiddenInput(['id'=>'kendaraan_id']) ?>
         <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_id')->widget(Select2::class,[
        'data'=>Master::unitKerja(),
        'pluginOptions'=>[
            'placeholder'=>'Unit Kerja',
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'status')->radioList(Master::statusPinjam()) ?>

     <?= $form->field($model, 'peruntukan')->textArea(['rows' => 6]) ?>
    </div>
    
    <div class="col-lg-6">
         <caption><h4>Data Pemegang Kendaraan Dinas</h4></caption>
         <hr/>
    <?= $form->field($model, 'nip',[
            'template' => "{label}<div class=\"col-lg-9\"><div class=\"input-group\">{input}<span class=\"input-group-btn\"><button id=\"cari\" class=\"btn btn-success\"><i class=\"fa fa-search\"></i></button></span>{error}
            </div></div>",
        ])->textInput() ?>

    <?= $form->field($model, 'nama_peminjam')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'pangkat_peminjam')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'golongan_peminjam')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, 'jabatan_peminjam')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email_peminjam')->textInput(['maxlength' => true]) ?>

          <?= $form->field($model, 'alamat_peminjam')->textArea(['maxlength' => true]) ?>

   
     </div>
   

   

    <?php ActiveForm::end(); ?>

    <?php endif;?>

</div>
 <?php Modal::begin([
        'id'=>'modal-kendaraan',
        'header' => '<h4 style="color:#000">Data Kendaraan Dinas</h4>',
        'size'=>Modal::SIZE_LARGE,
        'options'=>['style'=>'margin-top:10%'],
        'toggleButton' => false,
                ]);
                
                ?>
                 <?php Pjax::begin([
                     'id'=>'grid-pjax',
                     'timeout' => false,
                    'enablePushState' => false,
                    'enableReplaceState' => false,
                 ]); ?>
                 <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'options'=>[
                            'data-pjax'=>1
                        ],
                        'filterModel' => $searchModel,
                        'tableOptions'=>[
                            'class'=>'table table-bordered table-striped',
                            'style'=>'color:#fff'
                        ],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                        
                            [
                               
                                'attribute'=>'merk_id',
                                'value'=>'merk.nama',
                                'filter'=>Master::merk()
                            
                            ],
                            [
                               
                                'attribute'=>'tipe',
                                'contentOptions'=>['class'=>'text-center'],
                            
                            ],
                            [
                               
                                'attribute'=>'no_plat_hitam',
                                'contentOptions'=>['class'=>'text-center'],
                            
                            ],
                             [
                               
                                'attribute'=>'no_plat_merah',
                                'contentOptions'=>['class'=>'text-center'],
                            
                            ],
                        
                            [
                               
                                'attribute'=>'unit_id',
                                'value'=>'unit.nama',
                                'filter'=>Master::unitKerja()
                            ],
                            [
                                'contentOptions'=>['class'=>'text-center'],
                                'value'=>'tahun_perolehan',
                                'attribute'=>'tahun_perolehan'
                            ],
                            [
                                'contentOptions'=>['class'=>'text-center'],
                                'value'=>function($model){

                                    if ($model->dipinjam){
                                        return '<a href="#" class="btn btn-danger btn-xs">Tidak Tersedia</a>';
                                    }
                                    $merk = $model->merk->nama;
                                    $tipe = $model->tipe;
                                    $rangka = $model->nomor_rangka;
                                    $mesin = $model->nomor_mesin;
                                    $unit = $model->unit->nama;
                                    return sprintf('<a href="#" class="btn btn-success btn-xs pilih"
                                    data-id="%s"
                                    data-merk="%s %s"
                                    data-rangka="%s"
                                    data-mesin="%s"
                                    data-unit="%s"
                                    >Pilih</a>',
                                    $model->id,
                                    $merk,$tipe,$rangka,$mesin,$unit
                                    );
                                },
                                'format'=>'raw'
                            ],
                            

                        
                        ],
                    ]); ?>
                     <?php Pjax::end(); ?>
<?php Modal::end();?>
<?php
$this->registerJs("
$(document).on('click','.pilih',function(e){
    e.preventDefault();
    $('#kendaraan_id').val($(this).data('id'));
    $('#merk').val($(this).data('merk'));
    $('#unit_pemilik').val($(this).data('unit'));
    $('#norangka').val($(this).data('rangka'));
    $('#nomesin').val($(this).data('mesin'));
    $('#modal-kendaraan').modal('hide');
});

$(document).on('click','#cari',function(e){
    e.preventDefault();
    var nip = $('".$nipId."').val();
    $.post('".$url."',{nip:nip},function(res){
        $('".$telp."').val(res.telepon);
        $('".$nama."').val(res.nama);
        $('".$email."').val(res.email);
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
