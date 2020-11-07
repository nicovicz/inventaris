<?php

use yii\helpers\Html;
use app\widgets\ActiveForm;
use app\helpers\Master;
/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
	

	
	<?php if ($model->isNewRecord) { ?>
		<div class="alert alert-info">
			<p class="text-info"><i class="fa fa-info-circle"></i> Default Password : 123456</p>
		</div>
	<?php } ?>

	<?php $form = ActiveForm::begin(); ?>

	<div class="row">
	<div class="col-lg-6">
	<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	
	
	<?= $form->field($model, 'status')->radioList([
		'10'=>'Aktif',
		'9'=>'Non Aktif'
	]) ;?>

	

	<?= $form->field($roleModel, 'role')->dropDownList($authItems);?>

	<?php if (!$model->isNewRecord) { ?>
		<fieldset> 
			<legend style="color:#fff">Abaikan Jika Tidak Ingin Mengubah Password</legend>
		<div class="ui divider"></div>
		<?php $model->password_hash=null;?>
		<?= $form->field($model, 'new_password')->passwordInput() ?>
		</fieldset>
	<?php } ?>
	</div>
	
	<div class="col-lg-6">
		<?=$form->field($model,'nama');?>
		<?=$form->field($model,'jabatan');?>
		<?=$form->field($model,'pangkat');?>
		<?=$form->field($model,'golongan');?>
		<?=$form->field($model,'unit_id')->dropDownList(Master::unitKerja());?>
	</div>
	
	</div>
	<?php ActiveForm::end(); ?>
	
</div>
