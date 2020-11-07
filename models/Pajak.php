<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%pajak}}".
 *
 * @property int $id
 * @property int|null $kendaraan_id
 * @property string|null $tanggal
 * @property int|null $jenis
 * @property int|null $status
 * @property int|null $is_notif
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 */
class Pajak extends \yii\db\ActiveRecord
{
    use \app\helpers\AuditTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pajak}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_id', 'jenis', 'status', 'is_notif', 'created_by', 'updated_by'], 'integer'],
            [['tanggal', 'created_at', 'updated_at'], 'safe'],
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
            'tanggal' => Yii::t('app', 'Tanggal'),
            'jenis' => Yii::t('app', 'Jenis'),
            'status' => Yii::t('app', 'Status'),
            'is_notif' => Yii::t('app', 'Is Notif'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
