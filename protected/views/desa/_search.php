<?php
/* @var $this DesaController */
/* @var $model Desa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_desa'); ?>
		<?php echo $form->textField($model,'kd_desa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_kecamatan'); ?>
		<?php echo $form->textField($model,'kd_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnemonic'); ?>
		<?php echo $form->textField($model,'mnemonic',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KK2012'); ?>
		<?php echo $form->textField($model,'KK2012'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->