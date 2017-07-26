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

		<H3><i class="fa fa-archive"></i> DATA KELUARGA</H3>
		<TABLE class="table table-bordered table-responsive">
			<TR>
				<TD>
					<?php echo $form->label($model,'no_kk'); ?>
				</TD>
				<TD>
					<?php echo $form->error($model,'no_kk'); ?>
					<?php echo $form->textField($model,'no_kk',array('class'=>'form-control','placeholder'=>'Nomor Kartu Keluarga')); ?>
				</TD>
				<TD>
					<?php echo $form->label($model,'tglupdate'); ?>
				</TD>
				<TD style="background:#F5f5f5;">
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
					</TD>
				</TR>
				<TR>
					<TD>
						<?php echo $form->label($model,'nama'); ?>
					</TD>
					<TD>
						<?php echo $form->error($model,'nama'); ?>
						<?php echo $form->textField($model,'nama',array('class'=>'form-control','placeholder'=>'Nama Kepala Keluarga')); ?>
					</TD>
					<TD colspan="2"></TD>
				</TR>			
				<TR>
					<TD><b>Kecamatan</b></TD>
					<TD>
						
					</TD>
					<TD>
						<?php echo $form->label($model,'alamat'); ?>
					</TD>
					<TD>
						<?php echo $form->error($model,'alamat'); ?>
						<?php echo $form->textField($model,'alamat',array('class'=>'form-control','placeholder'=>'Alamat Lengkap')); ?></TD>
					</TR>
					<TR>
						<TD>
							<?php echo $form->label($model,'kd_desa'); ?>
						</TD>
						<TD>
							<?php echo $form->dropDownList($model, "kd_desa",
								CHtml::listData(Desa::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
									'id', 'nama'
									),
								array("empty"=>"-- Pilih Desa --", 'class'=>'form-control')
								); ?> 
							</B>
						</TD>
						<TD><?php echo $form->label($model,'rt'); ?> / <?php echo $form->label($model,'rw'); ?>

						</TD>
						<TD>
							<div>
								<?php echo $form->error($model,'rt'); ?>
								<?php echo $form->textField($model,'rt',array('class'=>'form-control','placeholder'=>'RT')); ?>
							</div> 
							<div> 
								<?php echo $form->error($model,'rw'); ?>
								<?php echo $form->textField($model,'rw',array('class'=>'form-control','placeholder'=>'RW')); ?>
							</div>
						</TD>
					</TR>	
					<TR>
						<TD colspan="2"></TD>
						<TD>
							<?php echo $form->label($model,'telponrumah'); ?>
						</TD>
						<TD><?php echo $form->error($model,'telponrumah'); ?>
							<?php echo $form->textField($model,'telponrumah',array('class'=>'form-control','placeholder'=>'Telpon Rumah')); ?></TD>
						</TR>						
					</TABLE>

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

							'tempatlahir'=>array(
								'type'=>'text',
								'class'=>'form-control',
								'placeholder'=>'Tempat Lahir',
								),										

							'tgllahir'=>array(
										// 'type'=>'text',
										// 'placeholder'=>'Tanggal Lahir',
										// 'class'=>'form-control',
										// ),		
								'type'=>'zii.widgets.jui.CJuiDatePicker',
								'language'=>'id',
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
		           				// 'removeOnClick' => 'alert("Yakin di Hapus ?")',
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
						'addItemText' => '<div class="btn btn-success btn-flat btn-small btn-sm"><i class="fa fa-plus"></i> Keluarga</div>',
						'removeHtmlOptions' => array('class' => 'btn btn-danger btn-flat btn-small', 'style' => 'margin-top: -13px;margin-bottom: -1px;'),		            

						));
						?>

						<div class="form-group">
							<div class="col-md-12">  
							</br></br>
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
						</div>
					</div>

					<?php $this->endWidget(); ?>

				</div></div><!-- form -->


				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery("#Keluarga_no_kk").keyup(function(event){
							if(event.keyCode == 13){
								jQuery("#Keluarga_nama").focus();
							}
						});

						jQuery("#Keluarga_nama").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#kd_kecamatan').focus();
							}
						});

						jQuery("#kd_kecamatan").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#Keluarga_kd_desa').focus();
							}
						});

						jQuery("#Keluarga_kd_desa").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#Keluarga_alamat').focus();
							}
						});

						jQuery("#Keluarga_alamat").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#Keluarga_rt').focus();
							}
						});		

						jQuery("#Keluarga_rt").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#Keluarga_rw').focus();
							}
						});									

						jQuery("#Keluarga_rw").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#Keluarga_telponrumah').focus();
							}
						});

						jQuery("#kd_responden").keyup(function(event){   
							if(event.keyCode == 13){      
								jQuery('#Responden_nama').focus();
							}
						});																																
					});


					jQuery(function($){
        // Apabila ingin ada notifikasi
        // $("#WnaExistence_created_date").mask("99/99/9999",{completed:function(){alert("You typed the following: "+this.val());}});
        $("#Responden_tgllahir").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
        $("#Responden_tgllahir2").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
        $("#Responden_tgllahir3").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
        $("#Responden_tgllahir4").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
        $("#Responden_tgllahir5").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
        $("#Responden_tgllahir6").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
    });     	
</script>							
</script>