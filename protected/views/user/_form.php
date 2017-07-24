<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => false,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-success',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'username'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'password'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'email'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'namalengkap'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'namalengkap'); ?>
					<?php echo $form->textField($model,'namalengkap',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tanggallahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tanggallahir'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model'=>$model,
						'language'=>'id',
						'attribute'=>'tanggallahir',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tanggallahir)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
							'language'=>'id',
												'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'yearRange'=>'1960:2000',
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),
						));
						?>	
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'handphone'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'handphone'); ?>
						<?php echo $form->textField($model,'handphone',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'alamat'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'alamat'); ?>
						<?php echo $form->textArea($model,'alamat',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'bagian'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'bagian'); ?>
						<?php echo $form->dropDownList($model, "bagian",
							CHtml::listData(Kecamatan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
								'kd_kecamatan', 'nama'
								),
							array("empty"=>"-- Pilih Bagian --", 'class'=>'form-control')
							); ?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'level'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'level'); ?>
							<?php
							echo $form->radioButtonList($model,'level',
								array('1'=>'Administrator','2'=>'TKS'),
								array(
									'template'=>'{input}{label}',
									'separator'=>'',
									'labelOptions'=>array(
										'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

									)                              
								);
								?>
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