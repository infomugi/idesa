<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kd_umpi'); ?>
		<?php echo $form->textField($model,'kd_umpi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglupdate'); ?>
		<?php echo $form->textField($model,'tglupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomorformulir'); ?>
		<?php echo $form->textField($model,'nomorformulir',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_desa'); ?>
		<?php echo $form->textField($model,'kd_desa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rt'); ?>
		<?php echo $form->textField($model,'rt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rw'); ?>
		<?php echo $form->textField($model,'rw'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telponrumah'); ?>
		<?php echo $form->textField($model,'telponrumah',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tks'); ?>
		<?php echo $form->textField($model,'tks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_kk'); ?>
		<?php echo $form->textField($model,'no_kk',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_surveyor'); ?>
		<?php echo $form->textField($model,'kd_surveyor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglsensus'); ?>
		<?php echo $form->textField($model,'tglsensus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catatan'); ?>
		<?php echo $form->textField($model,'catatan',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktuupdate'); ?>
		<?php echo $form->textField($model,'waktuupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_operator'); ?>
		<?php echo $form->textField($model,'kd_operator'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_client'); ?>
		<?php echo $form->textField($model,'ip_client',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->