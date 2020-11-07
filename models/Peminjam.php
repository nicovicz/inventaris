<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%peminjam}}".
 *
 * @property int $id
 * @property int|null $kendaraan_id
 * @property string|null $nip
 * @property string|null $nama_peminjam
 * @property string|null $alamat_peminjam
 * @property string|null $email_peminjam
 * @property string|null $pangkat_peminjam
 * @property string|null $golongan_peminjam
 * @property string|null $jabatan_peminjam
 * @property string|null $nip_ttd
 * @property string|null $nama_ttd
 * @property string|null $pangkat_ttd
 * @property string|null $golongan_ttd
 * @property string|null $jabatan_ttd
 * @property string|null $email
 * @property string|null $no_telp
 * @property string|null $peruntukan
 * @property int|null $unit_id
 * @property int|null $status
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 */
class Peminjam extends \yii\db\ActiveRecord
{
    use \app\helpers\AuditTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%peminjam}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_id', 'unit_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nip', 'nama_peminjam', 'alamat_peminjam', 'email_peminjam', 'pangkat_peminjam', 'golongan_peminjam', 'jabatan_peminjam', 'nip_ttd', 'nama_ttd', 'pangkat_ttd', 'golongan_ttd', 'jabatan_ttd', 'email', 'no_telp', 'peruntukan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kendaraan_id' => Yii::t('app', 'Kendaraan ID'),
            'nip' => Yii::t('app', 'Nip'),
            'nama_peminjam' => Yii::t('app', 'Nama Pemegang'),
            'alamat_peminjam' => Yii::t('app', 'Alamat Pemegang'),
            'email_peminjam' => Yii::t('app', 'Email Pemegang'),
            'pangkat_peminjam' => Yii::t('app', 'Pangkat Pemegang'),
            'golongan_peminjam' => Yii::t('app', 'Golongan Pemegang'),
            'jabatan_peminjam' => Yii::t('app', 'Jabatan Pemegang'),
            'nip_ttd' => Yii::t('app', 'Nip Ttd'),
            'nama_ttd' => Yii::t('app', 'Nama Ttd'),
            'pangkat_ttd' => Yii::t('app', 'Pangkat Ttd'),
            'golongan_ttd' => Yii::t('app', 'Golongan Ttd'),
            'jabatan_ttd' => Yii::t('app', 'Jabatan Ttd'),
            'email' => Yii::t('app', 'Email'),
            'no_telp' => Yii::t('app', 'No Telp'),
            'peruntukan' => Yii::t('app', 'Catatan'),
            'unit_id' => Yii::t('app', 'Unit Kerja Pemegang'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getKendaraan()
    {
        return $this->hasOne(Kendaraan::class,['id'=>'kendaraan_id']);
           
    }

     public function getUnit()
    {
        return $this->hasOne(Unit::class,['id'=>'unit_id']);
    }
}
