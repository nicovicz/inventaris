<?php

use app\models\User;
use yii\db\Migration;

/**
 * Class m200322_073653_seed
 */
class m200322_073653_seed extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $model = new User();
        $model->username = 'rumahtangga';
        $model->email = 'rumahtangga@localhost.com';
        $model->setPassword('123456');
        $model->status = User::STATUS_ACTIVE;
        $model->generateAuthKey();
        $model->created_at = time();
        $model->save();

        $auth = Yii::$app->authManager;
        $role = $auth->createRole('Kasubagrumahtangga');
        $auth->add($role);
        $auth->assign($role, $model->id);

        $generator = new \app\helpers\RouteGenerator;
        $generator->actionGenerate($role,$auth);

        $role = $auth->createRole('Kasubagtatausaha');
        $auth->add($role);

        $role = $auth->createRole('Kasubagperlengkapan');
        $auth->add($role);

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200322_073653_seed cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200322_073653_seed cannot be reverted.\n";

        return false;
    }
    */
}
