<?php
namespace app\helpers;

use app\models\Pajak;
class Utils
{
    public static function bulan()
    {
        return [
            'Januari'=>'01',
            'January'=>'01',
            'Februari'=>'02',
            'February'=>'02',
            'Maret'=>'03',
             'March'=>'03',
            'April'=>'04',
            'Mei'=>'05',
             'May'=>'05',
            'Juni'=>'06',
            'June'=>'06',
            'Juli'=>'07',
             'July'=>'07',
            'Agustus'=>'08',
             'August'=>'08',
            'September'=>'09',
            'Oktober'=>'10',
            'October'=>'10',
            'November'=>'11',
            'Desember'=>'12',
            'December'=>'12',
        ];
    }

    public static function indoToSql($date)
    {
        if ($date){
            $parts = explode(' ',$date);
            $bulan = self::bulan();
            return $parts[2].'-'.$bulan[$parts[1]].'-'.$parts[0];
        }
        
    }

    public static function populatePajak($model,$post)
    {
        

        $listPajak = Master::jenisPajak();
        $tahunPajak = Master::tahunJenisPajak();
        foreach($listPajak as $key=>$value){
            $pajak = Pajak::find()->where([
            'kendaraan_id' => $model->id,
            'jenis'=> $key
            ])->one();
            
           
            if (!$pajak){
                $tahun = $tahunPajak[$key];
                $id = str_replace(' ','_',strtolower($value));
                $tglPajak = !empty($post[$id])?$post[$id]
                    :date('Y-m-d',strtotime('+'.$tahun.' year',strtotime($model->tahun_perolehan)));
                $pajak = new Pajak();
                $pajak->tanggal = $tglPajak;
                $pajak->kendaraan_id = $model->id;
                $pajak->jenis = $key;
                $pajak->save();
            }
        }


    }


    public static function getPajak($id)
    {
        
        $results = array();
        $listPajak = Master::jenisPajak();
        foreach($listPajak as $key=>$value){
            $pajak = Pajak::find()->where([
                'kendaraan_id'=>$id,
                'jenis'=>$key,
                'status'=>'0'
            ])->one();

            if (!$pajak){
                $pajak = Pajak::find()->where([
                    'kendaraan_id'=>$id,
                    'jenis'=>$key,
                    'status'=>'1'
                ])->orderBy(['id'=>SORT_DESC])->one();
            }

            if ($pajak){
                $index = str_replace(' ','_',strtolower($value));
                $results[$index] = $pajak->tanggal ;
            }
            
        }

        return $results;


        
    }
}
