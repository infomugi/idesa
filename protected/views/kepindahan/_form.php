<?php
/* @var $this KepindahanController */
/* @var $model Kepindahan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-11 "> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'kepindahan-form',
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
					<?php echo $form->labelEx($model,'nama_kk'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama_kk'); ?>
					<?php echo $form->textField($model,'nama_kk',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'kode_pos'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kode_pos'); ?>
					<?php echo $form->textField($model,'kode_pos',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'alasan_pindah'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'alasan_pindah'); ?>
					<?php echo $form->textArea($model,'alasan_pindah',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'alamat_tujuan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'alamat_tujuan'); ?>
					<?php echo $form->textArea($model,'alamat_tujuan',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'provinsi_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'provinsi_id'); ?>
					<?php echo $form->dropDownList($model, "provinsi_id",
						CHtml::listData(Provinsi::model()->findAll(array('condition'=>'','order'=>'name ASC')),
							'id', 'name'
							),
						array("empty"=>"-- Pilih Provinsi --", 'class'=>'form-control','ajax' => array(
							'type'=>'POST', 
							'url'=>Yii::app()->createUrl('kepindahan/kabkota'), 
							'update'=>'#Kepindahan_kabkota_id', 
							'data'=>array('province_id'=>'js:this.value'),
							))
							); ?> 


							
						</div>

					</div>  



					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kabkota_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kabkota_id'); ?>
							<?php echo $form->dropDownList($model, "kabkota_id",
								array(),
								array(
									'prompt'=>'-- Pilih Kabupaten / Kota --.',
									'class'=>'form-control selectz',
									'ajax' => array(
										'type'=>'POST', 
										'url'=>Yii::app()->createUrl('kepindahan/kecamatan'), 
										'update'=>'#Kepindahan_kecamatan_id', 
										'data'=>array('regency_id'=>'js:this.value'),
										))
										); ?> 
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'kecamatan_id'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'kecamatan_id'); ?>
										<?php echo $form->dropDownList($model, "kecamatan_id",
											array(),
											array(
												'prompt'=>'-- Pilih Kecamatan --.',
												'class'=>'form-control selectz',
												'ajax' => array(
													'type'=>'POST', 
													'url'=>Yii::app()->createUrl('kepindahan/loaddesa'), 
													'update'=>'#Kepindahan_desa_id', 
													'data'=>array('district_id'=>'js:this.value'),
													))
													); ?> 
												</div>

											</div> 		



											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'desa_id'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'desa_id'); ?>
													<?php echo $form->dropDownList($model, "desa_id",
														array(),
														array(
															'prompt'=>'-- Pilih Desa --.',
															'class'=>'form-control selectz'
															)); ?> 
														</div>

													</div>  


													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'jenis_kepindahan'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'jenis_kepindahan'); ?>
															<?php
															echo $form->radioButtonList($model,'jenis_kepindahan',
																array('1'=>'Kepala Keluarga','2'=>'Kepala & Seluruh Anggota','3'=>'Kepala & Sebagian Keluarga','4'=>'Anggota Keluarga'),
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

															<div class="col-sm-4 control-label">
																<?php echo $form->labelEx($model,'status_kk_yang_tidak_pindah'); ?>
															</div>   

															<div class="col-sm-8">
																<?php echo $form->error($model,'status_kk_yang_tidak_pindah'); ?>
																<?php
																echo $form->radioButtonList($model,'status_kk_yang_tidak_pindah',
																	array('1'=>'Tetap','2'=>'KK Baru'),
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

																<div class="col-sm-4 control-label">
																	<?php echo $form->labelEx($model,'status_kk_pindah'); ?>
																</div>   

																<div class="col-sm-8">
																	<?php echo $form->error($model,'status_kk_pindah'); ?>
																	<?php
																	echo $form->radioButtonList($model,'status_kk_pindah',
																		array('1'=>'Numpang KK','2'=>'Membuat KK Baru'),
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