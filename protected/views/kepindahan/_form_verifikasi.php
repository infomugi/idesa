<?php
/* @var $this BagianController */
/* @var $model Bagian */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bagian-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-warning',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'deskripsi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'deskripsi'); ?>
					<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control')); ?>
				</div>
				
			</div>  


			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Verifikasi', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->