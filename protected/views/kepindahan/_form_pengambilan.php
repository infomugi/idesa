<?php
/* @var $this BagianController */
/* @var $model Bagian */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bagian-form',
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
					<?php echo $form->labelEx($model,'pengambilan_tanggal'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'pengambilan_tanggal'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model'=>$model,
						'language'=>'id',
						'attribute'=>'pengambilan_tanggal',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->pengambilan_tanggal)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'placeholder'=>'Tanggal Pengambilan',												
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

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'pengambilan_oleh'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'pengambilan_oleh'); ?>
						<?php echo $form->textField($model,'pengambilan_oleh',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan', array('class' => 'btn btn-info btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->