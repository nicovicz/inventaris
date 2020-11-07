<?php
namespace app\helpers;

use yii\helpers\ArrayHelper;
use app\models\Unit;
use app\models\Merk;
use app\models\Ttd;
class Master
{
    public static function jenisKendaraan()
    {
        return [
            '1'=>'Mobil',
            '2'=>'Motor'
        ];
    }

    public static function statusTtd()
    {
        return [
            '0'=>'Non Aktif',
            '1'=>'Aktif'
        ];
    }

    public static function statusPinjam()
    {
        return [
            '0'=>'Dikembalikan',
            '1'=>'Dinas Operasional',
            '2'=>'Operasional Jabatan'
        ];
    }

    public static function jenisPajak()
    {
        return [
            '1'=>'Pajak Tahunan',
            '2'=>'Pajak 5 Tahunan',
            '3'=>'Pajak Penghapusan'
        ];
    }

    public static function tahunJenisPajak()
    {
        return [
            '1'=>1,
            '2'=>5,
            '3'=>7
        ];
    }

    public static function statusKendaraan()
    {
        return [
            '0'=>'Dihapus',
            '1'=>'Aktif'
        ];
    }

     public static function getStatusKendaraan($status)
    {
        $statusKendaraan = self::statusKendaraan();
        if ($status == 0){
            return sprintf('<span class="label label-danger">%s</span>',
            $statusKendaraan[$status]
            );
        }

        return sprintf('<span class="label label-success">%s</span>',
            $statusKendaraan[$status]
            );
    }

     public static function getStatusPinjam($status)
    {
        $statusPinjam = self::statusPinjam();
        if ($status == 0){
            return sprintf('<span class="label label-success">%s</span>',
            $statusPinjam[$status]
            );
        }

        return sprintf('<span class="label label-danger">%s</span>',
            $statusPinjam[$status]
            );
    }

     public static function getStatusAktif($status)
    {
        $statusTtd = self::statusTtd();
        if ($status == 0){
            return sprintf('<span class="label label-danger">%s</span>',
            $statusTtd[$status]
            );
        }

        return sprintf('<span class="label label-success">%s</span>',
            $statusTtd[$status]
            );
    }

    public static function unitKerja()
    {
        return ArrayHelper::map(Unit::find()->where(['status'=>'1'])->all(),'id','nama');
    }

    public static function merk()
    {
        return ArrayHelper::map(Merk::find()->all(),'id','nama');
    }

    public static function getTTd()
    {
        return  Ttd::find()->where(['status'=>1])->one();
    }
}