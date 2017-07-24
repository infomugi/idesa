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

<div class="row-fluid">
        <div class="span6" id="form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>

		<div class="row-fluid">
			<div class="span4">
				<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
			</div>   

			<div class="span8">
				<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
				<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
			</div>
		</div>  

<?php
}
?>
		<div class="row-fluid">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-primary pull-right')); ?>\n"; ?>
		</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div></div><!-- form -->