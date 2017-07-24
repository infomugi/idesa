<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
			'id'=>'".$this->class2id($this->modelClass)."-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>\n"; ?>

			<?php echo "<?php echo \$form->errorSummary(\$model, null, null, array('class' => 'alert alert-warning')); ?>\n"; ?>

			<?php
			foreach($this->tableSchema->columns as $column)
			{
				if($column->autoIncrement)
					continue;
				?>

				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
						</div>   

						<div class="col-sm-8">
							<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
							<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column).",array('class'=>'form-control md-input')); ?>\n"; ?>
						</div>
		
				</div>  

				<?php
			}
			?>
			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'md-btn md-btn-primary pull-right')); ?>\n"; ?>
			</div>
		</div>

		<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div></div><!-- form -->