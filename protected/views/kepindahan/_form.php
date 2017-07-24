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
					<?php echo $form->labelEx($model,'desa_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'desa_id'); ?>
					<?php 
					$this->widget('zii.widgets.jui.CJuiAutoComplete', 
						array( 
							'name'=>'search', 
							'source'=>$this->createUrl('desa'), 
							'options'=>array( 
								'showAnim'=>'fold', 
								'select' => 'js:function(event, ui) {
									$("#Kepindahan_kecamatan_id").val(ui.item.kecamatan_id);
									$("#Kepindahan_desa_id").val(ui.item.desa_id);
									$("#nama_kecamatan").val("KECAMATAN " + ui.item.nama_kecamatan);
									$("#Kepindahan_kabkota_id").val(ui.item.kota_id);
									$("#nama_kota").val("KABUPATEN " + ui.item.nama_kota);
									$("#Kepindahan_provinsi_id").val(ui.item.provinsi_id);
									$("#nama_provinsi").val("PROVINSI " + ui.item.nama_provinsi);
									return false;
								}'
								), 
							'htmlOptions'=>array(
								'class'=>'form-control',
								'placeholder'=>'Cari Desa'
								),
							)); 
							?>					
							<div style="display:none">
								<?php echo $form->textField($model,'desa_id',array('class'=>'form-control')); ?>
							</div>
						</div>

					</div>  

					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kecamatan_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kecamatan_id'); ?>
							<input type="text" name="" class="form-control" id="nama_kecamatan" readonly="true">
							<div style="display:none">
								<?php echo $form->textField($model,'kecamatan_id',array('class'=>'form-control')); ?>
							</div>
						</div>

					</div> 		



					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kabkota_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kabkota_id'); ?>
							<input type="text" name="" class="form-control" id="nama_kota" readonly="true">
							<div style="display:none">
								<?php echo $form->textField($model,'kabkota_id',array('class'=>'form-control')); ?>
							</div>
						</div>

					</div>  




					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'provinsi_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'provinsi_id'); ?>
							<input type="text" name="" class="form-control" id="nama_provinsi" readonly="true">
							<div style="display:none">
								<?php echo $form->textField($model,'provinsi_id',array('class'=>'form-control')); ?>
							</div>
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