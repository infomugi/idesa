<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>




<div class="form-normal form-horizontal clearfix">
	<div class="col-md-offset-1 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'Keluarga-form',
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

		<?php
		echo $form->errorSummary(array_merge(array($model),$validatedrespondens), null, null, array('class' => 'alert alert-warning'));
		?>		

		<H3><i class="fa fa-users"></i> Data Keluarga</H3>
		<HR>
			<div class="form-group">
				<div class="col-md-4">
					<?php echo $form->label($model,'no_kk'); ?>
				</div>

				<div class="col-md-8">
					<?php echo $form->error($model,'no_kk'); ?>
					<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'no_kk','mask'=>'999999-999999-9999','htmlOptions'=>array('class'=>'form-control')));
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-4">
					<?php echo $form->label($model,'tglupdate'); ?>
				</div>

				<div class="col-md-8">
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model'=>$model,
						'language'=>'id',
						'attribute'=>'tglupdate',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tglupdate)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'placeholder'=>'Tanggal Pencatatan',												
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
							'language'=>'id',
												'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
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
					<div class="col-md-4">
						<?php echo $form->label($model,'nama'); ?>
					</div>

					<div class="col-md-8">
						<?php echo $form->error($model,'nama'); ?>
						<?php echo $form->textField($model,'nama',array('class'=>'form-control','placeholder'=>'Nama Kepala Keluarga')); ?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-4">
						<?php echo $form->label($model,'alamat'); ?>
					</div>

					<div class="col-md-8">
						<?php echo $form->error($model,'alamat'); ?>
						<?php echo $form->textField($model,'alamat',array('class'=>'form-control','placeholder'=>'Alamat Lengkap')); ?>
					</div>
				</div>				

				<div class="form-group">
					<div class="col-md-4">
						<b>Kecamatan</b>
					</div>
					<div class="col-md-8">
						<?php                                   
						echo CHtml::dropDownList('kd_kecamatan','', 
							CHtml::listData(Kecamatan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
								'kd_kecamatan', 'nama'
								),
							array(
								'prompt'=>'-- Pilih Kecamatan --.',
								'class'=>'form-control selectz',
								'ajax' => array(
									'type'=>'POST', 
									'url'=>Yii::app()->createUrl('desa/data'), 
									'update'=>'#Keluarga_kd_desa', 
									'data'=>array('kd_kecamatan'=>'js:this.value'),
									))
							); 

							?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4">
							<?php echo $form->label($model,'kd_desa'); ?>
						</div>

						<div class="col-md-8">
							<?php echo $form->dropDownList($model, "kd_desa",
								array(),
								array("empty"=>"-- Pilih Desa --", 'class'=>'form-control')
								); ?> 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<?php echo $form->label($model,'rt'); ?> / <?php echo $form->label($model,'rw'); ?>
							</div>

							<div class="col-md-8">
								<div class="col-md-6 no-padding">
									<?php echo $form->error($model,'rt'); ?>
									<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'rt','mask'=>'99','htmlOptions'=>array('class'=>'form-control')));
									?>
								</div> 
								<div class="col-md-6 no-padding"> 
									<?php echo $form->error($model,'rw'); ?>
									<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'rw','mask'=>'99','htmlOptions'=>array('class'=>'form-control')));
									?>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<?php echo $form->label($model,'telponrumah'); ?>
							</div>

							<div class="col-md-8">
								<?php echo $form->error($model,'telponrumah'); ?>
								<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'telponrumah','mask'=>'999999999999','htmlOptions'=>array('class'=>'form-control')));
								?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<?php
								$memberFormConfig = array(
									'elements'=>array(

										'nama'=>array(
											'type'=>'text',
											'class'=>'form-control',
											'placeholder'=>'Nama',
											),

										'sdrt'=>array(
											'type'=>'dropdownlist',
											'class'=>'form-control',
											'items'=>CHtml::listData(Sdrt::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
												'kode', 'nama'
												)
											),

									// 'tempatlahir'=>array(
									// 	'type'=>'text',
									// 	'class'=>'form-control',
									// 	'placeholder'=>'Tempat Lahir',
									// 	),										

										'tgllahir'=>array(
										// 'type'=>'text',
										// 'placeholder'=>'Tanggal Lahir',
										// 'class'=>'form-control',
										// ),		
											'type'=>'zii.widgets.jui.CJuiDatePicker',
											'language'=>'id',
											'value'=>date('d-m-Y'),  
											'htmlOptions'=>array(
												'class'=>'form-control',
												'placeholder'=>'Tanggal Lahir',
												'tabindex'=>2
												),

											'options'=>array(
												'dateFormat' => 'd-mm-yy',
												'showAnim'=>'slideDown',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'yearRange'=>'1980:1999',
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),),					

										'jeniskelamin'=>array(
											'type'=>'dropdownlist',
											'class'=>'form-control',
											'items'=>array(''=>'---',1=>'Laki-laki',0=>'Perempuan'),
											),		

										'kd_statusnikah'=>array(
											'type'=>'dropdownlist',
											'class'=>'form-control',
											'items'=>CHtml::listData(Statusnikah::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
												'id', 'nama'
												)
											),

										'kd_agama'=>array(
											'type'=>'dropdownlist',
											'class'=>'form-control',
											'items'=>CHtml::listData(Agama::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
												'id', 'nama'
												)
											),			

										'kd_pendidikan'=>array(
											'type'=>'dropdownlist',
											'class'=>'form-control',
											'items'=>CHtml::listData(Pendidikan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
												'id', 'nama'
												)
											),																					



										));

								echo CHtml::script('function alertIds(newElem,sourceElem){alert(newElem.attr("id"));alert(sourceElem.attr("id"));}');
								$this->widget('ext.multimodelform.MultiModelForm',array(
									'id' => 'kd_responden', 
									'jsAfterNewId' => MultiModelForm::afterNewIdDatePicker($memberFormConfig['elements']['tgllahir']),
									'formConfig' => $memberFormConfig, 
									'model' => $responden,
									'validatedItems' => $validatedrespondens,
									'data' => empty($validatedItems) ? $responden->findAll(array('condition'=>'kd_umpi=:kd_umpi','params'=>array(':kd_umpi'=>$model->kd_umpi),'order'=>'kd_responden')) : null,
									'sortAttribute' => 'kd_responden', 
									'removeOnClick' => 'alert("Yakin di Hapus ?")',
		            			//'jsAfterCloneCallback'=>'alertIds',
									'hideCopyTemplate'=>true,
									'clearInputs'=>true,
									'tableView' => true, 
									'showAddItemOnError' => true, 
									'tableView' => true, 

									'fieldsetWrapper' => array('tag' => 'div',
										'htmlOptions' => array('class' => 'view','style'=>'position:relative;background:#EFEFEF;')
										),

									'removeLinkWrapper' => array('tag' => 'div',
										'htmlOptions' => array('style'=>'position:absolute; top:1em; right:1em;','class'=>'btn btn-danger')
										),

									'removeText' => '<div class=""><i class="fa fa-remove"></i></div>',
									'addItemText' => '<div class="btn btn-success btn-flat btn-small btn-sm"><i class="fa fa-plus"></i> Anggota Keluarga</div>',
									'removeHtmlOptions' => array('class' => 'btn btn-danger btn-flat btn-small', 'style' => 'margin-top: -13px;margin-bottom: -1px;'),		            

									));
									?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">  

									<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
								</div>
							</div>

						</div>
					</div>
					<?php $this->endWidget(); ?>

