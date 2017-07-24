<?php
/* @var $this RespondenController */
/* @var $model Responden */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kd_responden'); ?>
		<?php echo $form->textField($model,'kd_responden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_umpi'); ?>
		<?php echo $form->textField($model,'kd_umpi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sdrt'); ?>
		<?php echo $form->textField($model,'sdrt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomor'); ?>
		<?php echo $form->textField($model,'nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_tempatlahir'); ?>
		<?php echo $form->textField($model,'kd_tempatlahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempatlahir'); ?>
		<?php echo $form->textField($model,'tempatlahir',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgllahir'); ?>
		<?php echo $form->textField($model,'tgllahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tg'); ?>
		<?php echo $form->textField($model,'tg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bl'); ?>
		<?php echo $form->textField($model,'bl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'th'); ?>
		<?php echo $form->textField($model,'th'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jeniskelamin'); ?>
		<?php echo $form->textField($model,'jeniskelamin',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_statusnikah'); ?>
		<?php echo $form->textField($model,'kd_statusnikah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_pendidikan'); ?>
		<?php echo $form->textField($model,'kd_pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_jurusanpendidikan'); ?>
		<?php echo $form->textField($model,'kd_jurusanpendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_agama'); ?>
		<?php echo $form->textField($model,'kd_agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_pekerjaan'); ?>
		<?php echo $form->textField($model,'kd_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_bidangusaha'); ?>
		<?php echo $form->textField($model,'kd_bidangusaha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bidangusaha'); ?>
		<?php echo $form->textField($model,'bidangusaha',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomorkartukuning'); ?>
		<?php echo $form->textField($model,'nomorkartukuning',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nik'); ?>
		<?php echo $form->textField($model,'nik',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telpongenggam'); ?>
		<?php echo $form->textField($model,'telpongenggam',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk'); ?>
		<?php echo $form->textField($model,'ipk',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tb'); ?>
		<?php echo $form->textField($model,'tb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bb'); ?>
		<?php echo $form->textField($model,'bb'); ?>
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
		<?php echo $form->label($model,'migrasi'); ?>
		<?php echo $form->textField($model,'migrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktumigrasi'); ?>
		<?php echo $form->textField($model,'waktumigrasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->