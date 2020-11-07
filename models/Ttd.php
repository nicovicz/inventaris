<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ttd}}".
 *
 * @property int $id
 * @property string|null $nip
 * @property string|null $nama
 * @property string|null $pangkat
 * @property string|null $golongan
 * @property string|null $jabatan
 * @property int|null $status
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 */
class Ttd extends \yii\db\ActiveRecord
{
    use \app\helpers\AuditTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ttd}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status','nip', 'nama', 'pangkat', 'golongan', 'jabatan'],'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nip', 'nama', 'pangkat', 'golongan', 'jabatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nip' => Yii::t('app', 'Nip'),
            'nama' => Yii::t('app', 'Nama'),
            'pangkat' => Yii::t('app', 'Pangkat'),
            'golongan' => Yii::t('app', 'Golongan'),
            'jabatan' => Yii::t('app', 'Jabatan'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
