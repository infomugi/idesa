<?php
/* @var $this AgamaController */
/* @var $model Agama */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-xs-12 col-md-9 col-lg-9">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'agama-form',
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
							<?php echo $form->labelEx($model,'kd_agama'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kd_agama'); ?>
							<?php echo $form->textField($model,'kd_agama',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'mnemonic'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'mnemonic'); ?>
							<?php echo $form->textField($model,'mnemonic',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'nama'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'nama'); ?>
							<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

							<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->