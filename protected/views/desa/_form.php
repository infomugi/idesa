<?php
/* @var $this DesaController */
/* @var $model Desa */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'desa-form',
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
							<?php echo $form->labelEx($model,'kd_desa'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kd_desa'); ?>
							<?php echo $form->textField($model,'kd_desa',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kd_kecamatan'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kd_kecamatan'); ?>
							<?php echo $form->textField($model,'kd_kecamatan',array('class'=>'form-control')); ?>
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
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'KK2012'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'KK2012'); ?>
							<?php echo $form->textField($model,'KK2012',array('class'=>'form-control')); ?>
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