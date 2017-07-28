<?php
/* @var $this KepindahanDetailController */
/* @var $model KepindahanDetail */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'kepindahan-detail-form',
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
					<?php echo $form->labelEx($model,'nik'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nik'); ?>
					<?php echo $form->textField($model,'nik',array('class'=>'form-control','placeholder'=>'NIK')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nama_lengkap'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama_lengkap'); ?>
					<?php echo $form->textField($model,'nama_lengkap',array('class'=>'form-control','placeholder'=>'Nama Lengkap')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'masa_berlaku_ktp'); ?>
				</div>   

				<div class="col-sm-8">
					<div class="alert alert-info">Kosongkan Form Berikut, Apabila KTP Berlaku Seumur Hidup</div>
					<?php echo $form->error($model,'masa_berlaku_ktp'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'options'=>array(
							'showAnim'=>'fold',
							),
						'model'=>$model,
						'attribute'=>'masa_berlaku_ktp',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->masa_berlaku_ktp)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'placeholder'=>'Masa Berlaku KTP',
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
							'showAnim'=>'clip',
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
						<?php echo $form->labelEx($model,'sdrt_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'sdrt_id'); ?>
						<?php 
						echo $form->radioButtonList($model, "sdrt_id",
							CHtml::listData(Sdrt::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
								'Id', 'nama'
								),
							array(
								'template'=>'{input}{label}',
								'separator'=>'',
								'labelOptions'=>array(
									'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

								) 
								); ?> 
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