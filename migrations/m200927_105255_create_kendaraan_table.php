<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kendaraan}}`.
 */
class m200927_105255_create_kendaraan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kendaraan}}', [
            'id' => $this->primaryKey(),
            'jenis_id'=>$this->integer()->notNull(),
            'merk_id'=>$this->integer()->notNull(),
            'tipe'=>$this->string(),
            'tahun_perolehan'=>$this->date(),
            'tgl_pembuatan'=>$this->date(),
            'bpkb'=>$this->string(),
            'file_bpkb'=>$this->string(),
            'no_stnk'=>$this->string(),
            'file_stnk'=>$this->string(),
            'nomor_mesin'=>$this->string(),
            'nomor_rangka'=>$this->string(),
            'no_plat_hitam'=>$this->string(),
            'no_plat_merah'=>$this->string(),
            'unit_id'=>$this->integer(),
            'gambar'=>$this->string(),
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
        $this->dropTable('{{%kendaraan}}');
    }
}
