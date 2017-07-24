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
	<div class="col-lg-6 col-xs-12"> 

		<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
			'id'=>'".$this->class2id($this->modelClass)."-form',
			'enableAjaxValidation'=>false,
			)); ?>\n"; ?>

			<?php echo "<?php echo \$form->errorSummary(\$model, null, null, array('class' => 'alert alert-warning')); ?>\n"; ?>

			<?php
			foreach($this->tableSchema->columns as $column)
			{
				if($column->autoIncrement)
					continue;
				?>

				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
							<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column).",array('class'=>'form-control')); ?>\n"; ?>
						</div>
		
				</div>  

				<?php
			}
			?>
			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>\n"; ?>
			</div>
		</div>

		<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div></div><!-- form -->