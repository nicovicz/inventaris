<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%unit}}`.
 */
class m200927_135931_create_unit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%unit}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(),
        ]);

        Yii::$app->db->createCommand("INSERT INTO `unit` (`nama`)
        VALUES
        ('Direktorat Lalu Lintas Dan Angkutan Laut'),
        ('Direktorat Kepelabuhanan'),
        ('Direktorat Perkapalan Dan Kepelautan'),
        ('Direktorat Kenavigasian'),
        ('Direktorat Kesatuan Penjagaan Laut Dan Pantai'),
        ('Bag. Umum'),
        ('Bag. Keuangan'),
        ('Bag. Rencana'),
        ('Bagormas'),
        ('Bag. Hukum')   
        ")->execute();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%unit}}');
    }
}
