<?php
use app\widgets\Panel;
use miloschuman\highcharts\Highcharts;
use yii\helpers\ArrayHelper;
$jumlahSeluruhnya = Yii::$app->db->createCommand("
SELECT COUNT(*) FROM kendaraan WHERE status='1'
")->queryScalar();

$jumlahTerpakai = Yii::$app->db->createCommand("
SELECT COUNT(*) FROM kendaraan 
JOIN peminjam ON kendaraan.id =peminjam.kendaraan_id
WHERE kendaraan.status='1' and peminjam.status <> '0'
")->queryScalar();

$merk = Yii::$app->db->createCommand("
select
nama name,COUNT(nama) y
from kendaraan a
join merk b on a.merk_id = b.id
WHERE a.status='1'
group by b.id
")->queryAll();
$merk = array_map(function($value){
    return ['name'=>$value['name'],'y'=>floatval($value['y'])];
},$merk);

$unit = Yii::$app->db->createCommand("
select
c.nama name,COUNT(b.unit_id) y
from kendaraan a
join peminjam b on a.id = b.kendaraan_id
join unit c on b.unit_id = c.id
WHERE a.status='1' and b.status <> '0'
group by c.id
")->queryAll();
$unit = array_map(function($value){
    return ['name'=>$value['name'],'y'=>floatval($value['y'])];
},$unit);
?>
<div class="site-index">

    <div class="row">
        <div class="col-lg-4">
            <?php Panel::begin(['header'=>false]);?>       
                <h4 class="text-center">Jumlah Kendaraan</h4>
                <h4 class="text-center"><?=$jumlahSeluruhnya;?></h4>
            <?php Panel::end();?>
        </div>
        <div class="col-lg-4">
            <?php Panel::begin(['header'=>false]);?>       
                <h4 class="text-center">Jumlah Kendaraan Terpakai</h4>
                <h4 class="text-center"><?=$jumlahTerpakai;?></h4>
            <?php Panel::end();?>
        </div>
        <div class="col-lg-4">
            <?php Panel::begin(['header'=>false]);?>       
                <h4 class="text-center ">Jumlah Kendaraan Tersedia</h4>
                <h4 class="text-center"><?=$jumlahSeluruhnya-$jumlahTerpakai;?></h4>
            <?php Panel::end();?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?php Panel::begin(['header'=>false]);?>       
            <?=Highcharts::widget([
            'options' => [
                'chart'=>[
                    'type'=>'pie',
                    'plotBorderWidth'=>null,
                    'plotBackgroundColor'=>null,
                    'plotShadow'=>false
                ],
                'title' => ['text' => 'Data Kendaraan'],
                'tootip'=>[
                    'pointFormat'=>' <b>{point.y:.0f}</b>'
                ],
                'accessibility'=>[
                    'point'=>[
                        'valueSuffix'=>'%'
                    ]
                ],
                'plotOptions'=>[
                    'pie'=>[
                        'allowPointSelect'=>true,
                        'cursor'=>'pointer',
                        'dataLabels'=>[
                            'enabled'=>true,
                            'format'=>'<b>{point.name}</b>: {point.y:.0f}'
                        ]
                    ]
                ],
                
                'series' => [
                    ['name' => 'Merk', 'data' => $merk],
                   
                ]
            ]
            ]);?>
            <?php Panel::end();?>
       
    </div>
    <div class="col-lg-6">
            <?php Panel::begin(['header'=>false]);?>       
            <?=Highcharts::widget([
            'options' => [
                'chart'=>[
                    'type'=>'pie',
                    'plotBorderWidth'=>null,
                    'plotBackgroundColor'=>null,
                    'plotShadow'=>false
                ],
                'title' => ['text' => 'Data Pemegang'],
                'tootip'=>[
                    'pointFormat'=>' <b>{point.y:.0f}</b>'
                ],
                'accessibility'=>[
                    'point'=>[
                        'valueSuffix'=>'%'
                    ]
                ],
                'plotOptions'=>[
                    'pie'=>[
                        'allowPointSelect'=>true,
                        'cursor'=>'pointer',
                        'innerSize'=>'30%',
                        'dataLabels'=>[
                            'enabled'=>true,
                            'format'=>'<b>{point.name}</b>: {point.y:.0f}'
                        ]
                    ]
                ],
                
                'series' => [
                    ['type'=>'pie','name' => 'Merk', 'data' => $unit],
                   
                ]
            ]
            ]);?>
            <?php Panel::end();?>
       
    </div>
</div>