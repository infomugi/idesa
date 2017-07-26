<?php
/* @var $this KepindahanDetailController */
/* @var $model KepindahanDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kepindahan_detail'); ?>
		<?php echo $form->textField($model,'id_kepindahan_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepindahan_id'); ?>
		<?php echo $form->textField($model,'kepindahan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nik'); ?>
		<?php echo $form->textField($model,'nik',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'masa_berlaku_ktp'); ?>
		<?php echo $form->textField($model,'masa_berlaku_ktp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sdrt_id'); ?>
		<?php echo $form->textField($model,'sdrt_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->