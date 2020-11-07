<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\helpers\Master;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TtdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Manajemen TTD SPPKD');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttd-index">

   

    <p>
        <?= Html::a(Yii::t('app', '<i class="fa fa-plus-circle"></i> Tambah TTD SPPKD'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'caption'=>'<h3><i class="fa fa-folder-open"></i>  '.$this->title.'</h3>',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'nip',
            'nama',
            'pangkat',
            'golongan',
            'jabatan',
            [
                'attribute'=>'status',
                'format'=>'html',
                'filter'=>Master::statusTtd(),
                'value'=>function($model){
                    return Master::getStatusAktif($model->status);
                }
            ],
            //'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',
            ['class' => 'yii\grid\ActionColumn','template'=>'{update}'],

           
        ],
    ]); ?>


</div>
