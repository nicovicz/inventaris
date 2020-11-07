<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Unit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-index">

    

     <p>
        <?= Html::a(Yii::t('app', '<i class="fa fa-plus-circle"></i> Tambah Unit'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'caption'=>'<h3><i class="fa fa-folder-open"></i>  '.$this->title.'</h3>',
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'nama',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update}'],
        ],
    ]); ?>


</div>
