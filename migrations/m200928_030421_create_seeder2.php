<?php

use yii\db\Migration;
use thamtech\uuid\helpers\UuidHelper;
use yii\helpers\FileHelper;
/**
 * Class m200928_030421_create_seeder2
 */
class m200928_030421_create_seeder2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $inputFileName = Yii::getAlias('@app/web/db.xlsx');
         $path = Yii::getAlias('@app').'/migrations/STNK';

        /**  Identify the type of $inputFileName  **/
        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);

        /**  Create a new Reader of the type that has been identified  **/
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

        /**  Load $inputFileName to a Spreadsheet Object  **/
        $spreadsheet = $reader->load($inputFileName);

        /**  Convert Spreadsheet Object to an Array for ease of use  **/
        $kendaraan = $spreadsheet->getActiveSheet()->toArray();
        FileHelper::removeDirectory(Yii::getAlias('@uploadStnk'));
        FileHelper::createDirectory(Yii::getAlias('@uploadStnk'));
        foreach($kendaraan as $data){
            $merah = $data[1]; // plat merah
            $hitam = $data[2]; // plat hitam
            $parts = explode(' ',$data[3]); // merk type
            $merk = trim($parts[0]);
            $modelMerk = \app\models\Merk::find()->where([
                'nama'=>$merk
            ])->one();
            if (!$modelMerk){
                $modelMerk = new \app\models\Merk();
                $modelMerk->nama = $merk;
                $modelMerk->save();
            }
            if (count($parts)>=1){
                $tipe = implode(' ',array_slice($parts,1));
            }else{
                $tipe = $data[3];
            }
            
            $tahun_perolehan = (string) $data[4];
            $no_mesin = $data[13];
            $no_rangka = $data[14];
            $no_bpkb = (string) $data[15];
            $tgl_pembuatan  = \app\helpers\Utils::indoToSql($data[17]);

            
            

            $model = new \app\models\Kendaraan();
            $model->jenis_id = 1;
            $model->merk_id = $modelMerk->id;
            $model->tipe = $tipe;
            $model->tahun_perolehan = '2019-01-01';
            $model->tgl_pembuatan = $tgl_pembuatan;
            $model->bpkb = $no_bpkb;
            $model->no_stnk = $no_mesin;
            $model->nomor_rangka = $no_rangka;
            $model->nomor_mesin = $no_mesin;
            $model->no_plat_hitam = $hitam;
            $model->no_plat_merah = $merah;

            $results = FileHelper::findFiles($path,
            ['only'=>['*'.$merah.'*','*'.$hitam.'*']]);
            if ($results){
                $source = $results[0];
                $extension = pathinfo($source, PATHINFO_EXTENSION);
                $fileDest = UuidHelper::uuid().
                '_'.str_replace(' ','_',$merah).'.'.
                $extension;
                $dest = Yii::getAlias('@uploadStnk').'/'.$fileDest;
                copy($source,$dest);
                $model->file_stnk = $fileDest;
            }
            $model->status = 1;
            $model->unit_id = rand(1,10);
            $model->created_by = 1;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_by = 1;
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();
          



        }
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200928_030421_create_seeder2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200928_030421_create_seeder2 cannot be reverted.\n";

        return false;
    }
    */
}
