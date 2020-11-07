<?php
use yii\bootstrap\Tabs;
use app\widgets\Panel;
use app\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>
<?php echo Tabs::widget([
    'items' => [
        [
            'label' => 'Ubah Profile',
            'content' => $this->render('profile-user',[
                'model'=>$model,
                'form'=>$form
            ]),
            'active' => true
        ],
        [
            'label' => 'Ganti Password',
            'content' => $this->render('password-reset',[
                'modelPassword'=>$modelPassword,
                'form'=>$form
            ]),
           
        ],
    ]
]);?>
<?php ActiveForm::end();?>
