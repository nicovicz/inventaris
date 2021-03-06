<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%unit}}".
 *
 * @property int $id
 * @property string|null $nama
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%unit}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
        ];
    }
}
