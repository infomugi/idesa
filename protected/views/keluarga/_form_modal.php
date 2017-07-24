<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'Keluarga-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tglupdate'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tglupdate'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'options'=>array(
							'showAnim'=>'fold',
							),
						'model'=>$model,
						'attribute'=>'tglupdate',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tglupdate)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
												'showAnim'=>'clip',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),
						));
						?>
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'nomorformulir'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'nomorformulir'); ?>
						<?php echo $form->textField($model,'nomorformulir',array('class'=>'form-control')); ?>
					</div>
					
				</div>  

				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'kd_kecamatan'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'kd_kecamatan'); ?>
						<?php echo $form->dropDownList($model, "kd_kecamatan",
							CHtml::listData(Kecamatan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
								'id', 'nama'
								),
							array("empty"=>"-- Pilih Kecamatan --", 'class'=>'form-control')
							); ?> 
						</div>
						
					</div>

					
					<div class="form-group">
						
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kd_desa'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kd_desa'); ?>
							<?php echo $form->dropDownList($model, "kd_desa",
								CHtml::listData(Desa::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
									'id', 'nama'
									),
								array("empty"=>"-- Pilih Desa --", 'class'=>'form-control')
								); ?> 
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
						<div class="col-sm-12">
							<div class="col-sm-4">
							</div>
							<div class="col-sm-8">
								<div class="col-sm-6">
									<div class="form-group">
										
										<div class="col-sm-2 control-label">
											<?php echo $form->labelEx($model,'rt'); ?>
										</div>   

										<div class="col-sm-10">
											<?php echo $form->error($model,'rt'); ?>
											<?php echo $form->textField($model,'rt',array('class'=>'form-control')); ?>
										</div>
										
									</div>  

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										
										<div class="col-sm-2 control-label">
											<?php echo $form->labelEx($model,'rw'); ?>
										</div>   

										<div class="col-sm-10">
											<?php echo $form->error($model,'rw'); ?>
											<?php echo $form->textField($model,'rw',array('class'=>'form-control')); ?>
										</div>
										
									</div>  
								</div>
							</div>
						</div>
						
						<div class="form-group">
							
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'telponrumah'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'telponrumah'); ?>
								<?php echo $form->textField($model,'telponrumah',array('class'=>'form-control')); ?>
							</div>
							
						</div>  

						
						<div class="form-group">
							
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'tks'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'tks'); ?>
								<?php echo $form->textField($model,'tks',array('class'=>'form-control')); ?>
							</div>
							
						</div>  

						
						<div class="form-group">
							
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'nama_kk'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'nama_kk'); ?>
								<?php echo $form->textField($model,'nama_kk',array('class'=>'form-control')); ?>
							</div>
							
						</div> 			

						<div class="form-group">
							
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'no_kk'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'no_kk'); ?>
								<?php echo $form->textField($model,'no_kk',array('class'=>'form-control')); ?>
							</div>
							
						</div>  

						
						<div class="form-group">
							
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'kd_surveyor'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'kd_surveyor'); ?>
								<?php echo $form->textField($model,'kd_surveyor',array('class'=>'form-control')); ?>
							</div>
							
						</div>  

						
						<div class="form-group">
							
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'tglsensus'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'tglsensus'); ?>
								<?php
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
									'options'=>array(
										'showAnim'=>'fold',
										),
									'model'=>$model,
									'attribute'=>'tglsensus',
									'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tglsensus)),
									'htmlOptions'=>array(
										'class'=>'form-control',
										'tabindex'=>2
										),
									'options'=>array(
										'dateFormat' => 'd-mm-yy',
												'showAnim'=>'clip',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),
									));
									?>
								</div>
								
							</div>  

							
							<div class="form-group">
								
								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'catatan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'catatan'); ?>
									<?php echo $form->textArea($model,'catatan',array('class'=>'form-control')); ?>
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