<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ttd}}`.
 */
class m201012_111726_create_ttd_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ttd}}', [
            'id' => $this->primaryKey(),
            'nip'=>$this->string(),
            'nama'=>$this->string(),
            'pangkat'=>$this->string(),
            'golongan'=>$this->string(),
            'jabatan'=>$this->string(),
            'status'=>$this->integer(),
            'created_by'=>$this->integer(),
            'created_at'=>$this->datetime(),
            'updated_by'=>$this->integer(),
            'updated_at'=>$this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ttd}}');
    }
}
