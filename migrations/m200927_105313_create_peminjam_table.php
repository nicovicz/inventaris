<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%peminjam}}`.
 */
class m200927_105313_create_peminjam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%peminjam}}', [
            'id' => $this->primaryKey(),
            'kendaraan_id'=>$this->integer(),
            'nip'=>$this->string(),
            'nama_peminjam'=>$this->string(),
            'alamat_peminjam'=>$this->string(),
            'email_peminjam'=>$this->string(),
            'pangkat_peminjam'=>$this->string(),
            'golongan_peminjam'=>$this->string(),
            'jabatan_peminjam'=>$this->string(),
            'nip_ttd'=>$this->string(),
            'nama_ttd'=>$this->string(),
            'pangkat_ttd'=>$this->string(),
            'golongan_ttd'=>$this->string(),
            'jabatan_ttd'=>$this->string(),
            'email'=>$this->string(),
            'no_telp'=>$this->string(),
            'peruntukan'=>$this->string(),
            'unit_id'=>$this->integer(),
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
        $this->dropTable('{{%peminjam}}');
    }
}
