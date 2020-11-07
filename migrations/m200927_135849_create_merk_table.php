<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%merk}}`.
 */
class m200927_135849_create_merk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%merk}}', [
            'id' => $this->primaryKey(),
            'nama'=> $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%merk}}');
    }
}
