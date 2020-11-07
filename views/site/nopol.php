<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\helpers\Master;
use yii\grid\GridView;
use yii\widgets\Pjax;
$this->title="Pencarian Kendaraan";
?>
<div class="kendaraan-search">
    <h1>  <?= Html::encode($this->title) ?>
    <?=Html::a('Kembali',Url::to(['/site/login']),['class'=>'btn btn-warning']);?>
    </h1><hr/>

    

    <div class="row">
        <div class="col-lg-12">
       
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
                            'class'=>'table table-striped table-bordered',
                           
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
                               
                                'attribute'=>'unit_pemegang',
                                'label'=>'Unit Kerja Pemegang',
                                'value'=>'dipinjam.unit.nama',
                                'filter'=>Master::unitKerja()
                            ],
                            [
                                'contentOptions'=>['class'=>'text-center'],
                                'value'=>'tahun_perolehan',
                                'attribute'=>'tahun_perolehan'
                            ],
                             [
                                'attribute'=>'file_stnk',
                               
                                'contentOptions'=>['class'=>'text-center'],
                                'format'=>'raw',
                                'value'=>function($model){
                                return sprintf('<a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                                <i class="fa fa-eye"></i> Preview</a>',Url::to(['/kendaraan/preview-stnk','id'=>$model->id]));
                            }],
                           /* [
                                'contentOptions'=>['class'=>'text-center'],
                                'value'=>function($model){

                                    if ($model->dipinjam){
                                        return '<a href="#" class="btn btn-danger btn-xs">Tidak Tersedia</a>';
                                    }

                                    return '<a href="#" class="btn btn-success btn-xs">Tersedia</a>';
                                   
                                },
                                'format'=>'raw'
                            ],*/
                            

                        
                        ],
                    ]); ?>
                     <?php Pjax::end(); ?>
                       </div>
    </div>
</div>