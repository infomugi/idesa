<?php
/* @var $this SktmController */
/* @var $model Sktm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sktm'); ?>
		<?php echo $form->textField($model,'id_sktm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sktm'); ?>
		<?php echo $form->textField($model,'no_sktm',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_input'); ?>
		<?php echo $form->textField($model,'tanggal_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_buat'); ?>
		<?php echo $form->textField($model,'tanggal_buat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petugas_id'); ?>
		<?php echo $form->textField($model,'petugas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_anak'); ?>
		<?php echo $form->textField($model,'nama_anak',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tingkat'); ?>
		<?php echo $form->textField($model,'tingkat',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instansi'); ?>
		<?php echo $form->textField($model,'instansi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_ayah'); ?>
		<?php echo $form->textField($model,'nama_ayah',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umur_ayah'); ?>
		<?php echo $form->textField($model,'umur_ayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agama_ayah'); ?>
		<?php echo $form->textField($model,'agama_ayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pekerjaan_ayah'); ?>
		<?php echo $form->textField($model,'pekerjaan_ayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_ayah'); ?>
		<?php echo $form->textArea($model,'alamat_ayah',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_ibu'); ?>
		<?php echo $form->textField($model,'nama_ibu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umur_ibu'); ?>
		<?php echo $form->textField($model,'umur_ibu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agama_ibu'); ?>
		<?php echo $form->textField($model,'agama_ibu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pekerjaan_ibu'); ?>
		<?php echo $form->textField($model,'pekerjaan_ibu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_ibu'); ?>
		<?php echo $form->textArea($model,'alamat_ibu',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->