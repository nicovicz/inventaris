<?php
use app\helpers\Master;
?>
<?=$form->field($model,'nama');?>
<?=$form->field($model,'jabatan');?>
<?=$form->field($model,'pangkat');?>
<?=$form->field($model,'golongan');?>
<?=$form->field($model,'unit_id')->dropDownList(Master::unitKerja());?>