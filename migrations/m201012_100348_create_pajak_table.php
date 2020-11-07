<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pajak}}`.
 */
class m201012_100348_create_pajak_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pajak}}', [
            'id' => $this->primaryKey(),
            'kendaraan_id'=>$this->integer(),
            'tanggal'=>$this->date(),
            'jenis'=>$this->integer(),
            'status'=>$this->integer()->defaultValue(0),
            'is_notif'=>$this->integer()->defaultValue(0),
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
        $this->dropTable('{{%pajak}}');
    }
}
