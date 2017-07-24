<?php
/* @var $this KepindahanController */
/* @var $model Kepindahan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kepindahan'); ?>
		<?php echo $form->textField($model,'id_kepindahan'); ?>
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
		<?php echo $form->label($model,'no_kk'); ?>
		<?php echo $form->textField($model,'no_kk',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kk'); ?>
		<?php echo $form->textField($model,'nama_kk',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_pos'); ?>
		<?php echo $form->textField($model,'kode_pos',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alasan_pindah'); ?>
		<?php echo $form->textArea($model,'alasan_pindah',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_tujuan'); ?>
		<?php echo $form->textArea($model,'alamat_tujuan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinsi_id'); ?>
		<?php echo $form->textField($model,'provinsi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kabkota_id'); ?>
		<?php echo $form->textField($model,'kabkota_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kecamatan_id'); ?>
		<?php echo $form->textField($model,'kecamatan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desa_id'); ?>
		<?php echo $form->textField($model,'desa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kepindahan'); ?>
		<?php echo $form->textField($model,'jenis_kepindahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_kk_yang_tidak_pindah'); ?>
		<?php echo $form->textField($model,'status_kk_yang_tidak_pindah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_kk_pindah'); ?>
		<?php echo $form->textField($model,'status_kk_pindah'); ?>
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