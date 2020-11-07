<?php

use \yii\db\Migration;

class m190124_110200_add_verification_token_column_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'verification_token', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'nama', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'jabatan', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'pangkat', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'golongan', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'unit_id', $this->integer()->defaultValue(null));

    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'verification_token');
        $this->dropColumn('{{%user}}', 'nama');
        $this->dropColumn('{{%user}}', 'jabatan');
        $this->dropColumn('{{%user}}', 'pangkat');
        $this->dropColumn('{{%user}}', 'golongan');
        $this->dropColumn('{{%user}}', 'unit');
    }
}