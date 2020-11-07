<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\helpers\Master;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KendaraanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Kendaraan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-index">

   <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
       
      
        'filterModel' => null,
        'caption'=>'<h3><i class="fa fa-folder-open"></i>  '.$this->title.'</h3>',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            [
                'label'=>'Merk & Tipe',
               
                'contentOptions'=>['class'=>'text-center'],
                'format'=>'raw',
                'value'=>function($model){
                return '<p>'.$model->merk->nama.'</p><p style="margin-top:-15%">'
                .$model->tipe.'</p>';
            }],
            [
                'label'=>'Plat Hitam & Merah',
               
                'contentOptions'=>['class'=>'text-center'],
                'format'=>'raw',
                'value'=>function($model){
                return '<p style="height:30px;background:#000;color:#fff;font-weight:bold;margin-top:2%">'
                .($model->no_plat_hitam?$model->no_plat_hitam:'<i>(Tidak Ada)</i>').
                '</p><p style="height:30px;background:red;color:#fff;font-weight:bold">'
                .($model->no_plat_merah?$model->no_plat_merah:'<i>(Tidak Ada)</i>').'</p>';
            }],
          
          
           [
                'label'=>'Unit Kerja Pemilik',
                
                'value'=>'unit.nama'
            ],
            [
                'contentOptions'=>['class'=>'text-center'],
                'value'=>'tahun_perolehan',
                'attribute'=>'tahun_perolehan'
            ],
            [
                'contentOptions'=>['class'=>'text-center'],
                'format'=>'raw',
                'value'=>function($model){
                    return Master::getStatusKendaraan($model->status);
                },
                'attribute'=>'status'
            ],
            [
                'attribute'=>'file_stnk',
               
                'contentOptions'=>['class'=>'text-center'],
                'format'=>'raw',
                'value'=>function($model){
                return sprintf('<a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a>',Url::to(['preview-stnk','id'=>$model->id]));
            }],

            /*[
                'attribute'=>'gambar',
               
                'contentOptions'=>['class'=>'text-center'],
                'format'=>'raw',
                'value'=>function($model){
                return sprintf('<a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a>',Url::to(['preview','id'=>$model->id]));
            }],*/

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
