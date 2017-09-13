<?php
/* @var $this SktmController */
/* @var $model Sktm */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'sktm-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-success',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array('enctype'=>'multipart/form-data'), 
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
<!-- 			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'no_sktm'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'no_sktm'); ?>
					<?php echo $form->textField($model,'no_sktm',array('class'=>'form-control','placeholder'=>'NO SKTM')); ?>
				</div>

			</div>   -->


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tanggal_buat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tanggal_buat'); ?>
					<?php echo $form->textField($model,'tanggal_buat',array('class'=>'form-control','placeholder'=>'Tanggal','value'=>date('Y-m-d'),'readOnly'=>true)); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nama_anak'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama_anak'); ?>
					<?php echo $form->textField($model,'nama_anak',array('class'=>'form-control','placeholder'=>'Nama Lengkap Anak')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tempat_lahir'); ?> / <?php echo $form->labelEx($model,'tanggal_lahir'); ?>
				</div>   

				<div class="col-sm-8 no-padding">
					<div class="col-sm-5">
						<?php echo $form->error($model,'tempat_lahir'); ?>
						<?php echo $form->textField($model,'tempat_lahir',array('class'=>'form-control','placeholder'=>'Tempat Lahir',)); ?>

					</div>
					<div class="col-sm-7">
						<?php echo $form->error($model,'tanggal_lahir'); ?>
						<?php
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'model'=>$model,
							'language'=>'id',
							'attribute'=>'tanggal_lahir',
							'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tanggal_lahir)),
							'htmlOptions'=>array(
								'class'=>'form-control',
								'placeholder'=>'Tanggal Lahir',
								'tabindex'=>2
								),
							'options'=>array(
								'dateFormat' => 'd-mm-yy',
								'language'=>'id',
							'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
							'showButtonPanel'=>true,
							'changeMonth'=>true,
							// 'yearRange'=>'1960:2018',
							'changeYear'=>true,
							'defaultDate'=>'+1w',
							),
							));
							?>	

						</div>
					</div>

				</div>  

				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'tingkat'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'tingkat'); ?>
						<?php echo $form->textField($model,'tingkat',array('class'=>'form-control','placeholder'=>'Tingkat',)); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'instansi'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'instansi'); ?>
						<?php echo $form->textField($model,'instansi',array('class'=>'form-control','placeholder'=>'Instansi Sekolah',)); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'nama_ayah'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'nama_ayah'); ?>
						<?php echo $form->textField($model,'nama_ayah',array('class'=>'form-control','placeholder'=>'Nama Lengkap Ayah')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'umur_ayah'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'umur_ayah'); ?>
						<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'umur_ayah','mask'=>'99','htmlOptions'=>array('class'=>'form-control')));
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'agama_ayah'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'agama_ayah'); ?>
						<?php echo $form->dropDownList($model, "agama_ayah",
							CHtml::listData(Agama::model()->findAll(array('order'=>'nama ASC')),
								'kd_agama', 'nama'
								),
							array("empty"=>"-- Pilih Agama --", 'class'=>'form-control')
							); ?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'pekerjaan_ayah'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'pekerjaan_ayah'); ?>
							<?php echo $form->dropDownList($model, "pekerjaan_ayah",
								CHtml::listData(Pekerjaan::model()->findAll(array('order'=>'nama ASC')),
									'kd_pekerjaan', 'nama'
									),
								array("empty"=>"-- Pilih Pekerjaan --", 'class'=>'form-control')
								); ?> 
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'alamat_ayah'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'alamat_ayah'); ?>
								<?php echo $form->textArea($model,'alamat_ayah',array('class'=>'form-control','placeholder'=>'Alamat Ayah')); ?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'nama_ibu'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'nama_ibu'); ?>
								<?php echo $form->textField($model,'nama_ibu',array('class'=>'form-control','placeholder'=>'Nama Ibu')); ?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'umur_ibu'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'umur_ibu'); ?>
								<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'umur_ibu','mask'=>'99','htmlOptions'=>array('class'=>'form-control')));
								?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'agama_ibu'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'agama_ibu'); ?>
								<?php echo $form->dropDownList($model, "agama_ibu",
									CHtml::listData(Agama::model()->findAll(array('order'=>'nama ASC')),
										'kd_agama', 'nama'
										),
									array("empty"=>"-- Pilih Agama --", 'class'=>'form-control')
									); ?> 
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'pekerjaan_ibu'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'pekerjaan_ibu'); ?>
									<?php echo $form->dropDownList($model, "pekerjaan_ibu",
										CHtml::listData(Pekerjaan::model()->findAll(array('order'=>'nama ASC')),
											'kd_pekerjaan', 'nama'
											),
										array("empty"=>"-- Pilih Pekerjaan --", 'class'=>'form-control')
										); ?> 
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'alamat_ibu'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'alamat_ibu'); ?>
										<?php echo $form->textArea($model,'alamat_ibu',array('class'=>'form-control','placeholder'=>'Alamat Ibu')); ?>
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