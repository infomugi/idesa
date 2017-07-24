<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */
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
		<?php echo $form->label($model,'kd_kecamatan'); ?>
		<?php echo $form->textField($model,'kd_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnemonic'); ?>
		<?php echo $form->textField($model,'mnemonic',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_areasurvey'); ?>
		<?php echo $form->textField($model,'kd_areasurvey'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->