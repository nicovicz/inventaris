<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use app\widgets\Panel;
/* @var $this yii\web\View */
/* @var $model app\models\MstMenu */

$this->title = 'Detil Kendaraan';
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Kendaraan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-menu-view">

<?php Panel::begin([
    'icon'=>'info-circle',
    'title'=>'Detil Kendaraan'
]);?>


<?=$this->render('@app/widgets/view-button',[
    'id'=>$model->id,
    'confirm'=>'Apakah Anda Yakin Akan Menghapus Kendaraan Ini?'
]);?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
           
            'merk.nama',
            'tipe',
            'tahun_perolehan',
            'tgl_pembuatan',
            'nomor_mesin',
            'nomor_rangka',
            'no_plat_hitam',
            'no_plat_merah',
            'unit.nama',
            'bpkb',
            [
                'attribute'=>'file_bpkb',
                'format'=>'raw',
                'value'=>function($model,$widget){
                     return sprintf('<a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a>',Url::to(['preview-bpkb','id'=>$model->id]));
                }
            ],
            'no_stnk',
            [
                'attribute'=>'file_stnk',
                'format'=>'raw',
                'value'=>function($model,$widget){
                     return sprintf('<a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a>',Url::to(['preview-stnk','id'=>$model->id]));
                }
            ],
            [
                'attribute'=>'gambar',
                'format'=>'raw',
                'value'=>function($model,$widget){
                    return sprintf('<a href="%s" data-lightbox="image-1" class="btn btn-xs btn-warning">
                <i class="fa fa-eye"></i> Preview</a>',Url::to(['preview','id'=>$model->id]));
                }
            ]
           
        ],
    ]) ?>
<?php Panel::end();?>
</div>
