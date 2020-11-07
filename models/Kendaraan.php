<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%kendaraan}}".
 *
 * @property int $id
 * @property int $jenis_id
 * @property int $merk_id
 * @property string|null $tipe
 * @property string|null $tahun_perolehan
 * @property string|null $tgl_pembuatan
 * @property string|null $bpkb
 * @property string|null $file_bpkb
 * @property string|null $no_stnk
 * @property string|null $file_stnk
 * @property string|null $nomor_mesin
 * @property string|null $nomor_rangka
 * @property string|null $no_plat_hitam
 * @property string|null $no_plat_merah
 * @property int|null $unit_id
 * @property string|null $gambar
 * @property int|null $status
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 */
class Kendaraan extends \yii\db\ActiveRecord
{
     use \app\helpers\AuditTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%kendaraan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           
            [['status','jenis_id', 'merk_id','tgl_pembuatan','tahun_perolehan','nomor_mesin','nomor_rangka','tgl_pembuatan'], 'required'],
            [['jenis_id', 'merk_id', 'unit_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['tgl_pembuatan', 'created_at', 'updated_at'], 'safe'],
            [['tahun_perolehan'],'date','format'=>'php:Y-m-d'],
            [['file_stnk','file_bpkb','gambar'],'file'],
            [['tipe', 'bpkb',  'no_stnk',  'nomor_mesin', 'nomor_rangka', 'no_plat_hitam', 'no_plat_merah'], 'string', 'max' => 255],
        ];
    }

    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'jenis_id' => Yii::t('app', 'Jenis ID'),
            'merk_id' => Yii::t('app', 'Merk Kendaraan'),
            'tipe' => Yii::t('app', 'Tipe'),
            'tahun_perolehan' => Yii::t('app', 'Tahun Perolehan'),
            'tgl_pembuatan' => Yii::t('app', 'Tgl Pembuatan'),
            'bpkb' => Yii::t('app', 'Nomor BPKB'),
            'file_bpkb' => Yii::t('app', 'File BPKB'),
            'no_stnk' => Yii::t('app', 'Nomor STNK'),
            'file_stnk' => Yii::t('app', 'File STNK'),
            'nomor_mesin' => Yii::t('app', 'Nomor Mesin'),
            'nomor_rangka' => Yii::t('app', 'Nomor Rangka'),
            'no_plat_hitam' => Yii::t('app', 'No Plat Hitam'),
            'no_plat_merah' => Yii::t('app', 'No Plat Merah'),
            'unit_id' => Yii::t('app', 'Unit Kerja Pemilik'),
            'gambar' => Yii::t('app', 'File Kendaraan'),
            'status' => Yii::t('app', 'Status Kendaraan'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getMerk()
    {
        return $this->hasOne(Merk::class,['id'=>'merk_id']);
    }

    public function getUnit()
    {
        return $this->hasOne(Unit::class,['id'=>'unit_id']);
    }

    public function getDipinjam()
    {
        return $this->hasOne(Peminjam::class,['kendaraan_id'=>'id'])
            ->where('peminjam.status <> "0"');
    }
}
