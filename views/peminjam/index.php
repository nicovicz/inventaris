<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\helpers\Master;
use yii\grid\GridView;
use yii\helpers\ArrayHelper as ah;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Pemegang Kendaraan Dinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjam-index">

   

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        'showHeader'=>false,
         'caption'=>'<h3><i class="fa fa-folder-open"></i>  '.$this->title.'</h3>',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           [
               
               'format'=>'raw',
               'value'=>function($model){

                  return sprintf('<div class="name-container">
                        <div>
                            <p class="text-center">
                            <span><strong>%s %s</strong></span></p>
                        </div>
                        <div>
                            <p class="text-center">
                            <span style="height:30px;background:#000;color:#fff;font-weight:bold;padding:1%%">%s</span>
                            <span style="height:30px;background:red;color:#fff;font-weight:bold;padding:1%%">%s</span>
                            </p>
                            </div>
                        <div style="margin-top:-2%%">
                            <p class="text-center">
                            <span><a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i>Preview STNK</a></span></p>
                        </div>
                    </div>',
                        ah::getValue($model,'kendaraan.merk.nama'),
                        ah::getValue($model,'kendaraan.tipe'),
                        ah::getValue($model,'kendaraan.no_plat_hitam')?ah::getValue($model,'kendaraan.no_plat_hitam'):'<i>(Tidak Ada)</i>',
                        ah::getValue($model,'kendaraan.no_plat_merah')?ah::getValue($model,'kendaraan.no_plat_merah'):'<i>(Tidak Ada)</i>',
                        Url::to(['/kendaraan/preview-stnk','id'=>ah::getValue($model,'kendaraan.id')])
                        );
               }
               
            ],
            [
              
               'format'=>'raw',
               'value'=>function($model){

                     return sprintf('<div class="name-container">
                        <div>
                            <span><strong>%s </strong> / %s</span>
                        </div>
                        <div>
                           <span>%s</span>
                        </div>
                        <div>
                           <span>%s</span>
                        </div>
                       
                    </div>',
                        ah::getValue($model,'nip'),
                        ah::getValue($model,'nama_peminjam'),
                        ah::getValue($model,'unit.nama'),
                        
                        Master::getStatusPinjam(ah::getValue($model,'status'))
                       
                        );


               }
            ],
           

            ['class' => 'yii\grid\ActionColumn','template'=>'{pdf} {update} {delete}',
           
                'buttons'=>[
                    'pdf'=>function($url, $model, $key){
                        return Html::a('<i class="fa fa-file"></i>',$url,[
                            'data-pjax'=>0,
                            'target'=>'_blank',
                            'title'=>'Cetak SPPKD'
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
