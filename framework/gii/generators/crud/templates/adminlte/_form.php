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

<div class="row">
	<div class="col-lg-7 col-xs-12"> 

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
					<div class="col-lg-7 col-xs-12">  
						<div class="col-lg-4 col-xs-12">
							<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
						</div>   

						<div class="col-lg-8 col-md-7 col-xs-12">
							<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
							<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column).",array('class'=>'form-control')); ?>\n"; ?>
						</div>
					</div>
				</div>  

				<?php
			}
			?>
			<div class="form-group">
				<div class="col-md-7 col-xs-12">  
				</br></br>
				<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>\n"; ?>
			</div>
		</div>

		<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div></div><!-- form -->