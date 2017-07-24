<?php
/**
 * This is the template for generating a form script file.
 * The following variables are available in this template:
 * - $this: the FormCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getModelClass(); ?>Controller */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
        <div class="span6" id="form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass).'-'.basename($this->viewName)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php foreach($this->getModelAttributes() as $attribute): ?>

	<div class="row-fluid">
		<div class="span4">
			<?php echo "<?php echo \$form->labelEx(\$model,'$attribute'); ?>\n"; ?>
		</div>   

		<div class="span8">
			<?php echo "<?php echo \$form->error(\$model,'$attribute', array(class'=>'span12 form-control', 'placeholder'=>''$attribute'')); ?>\n"; ?>
			<?php echo "<?php echo \$form->textField(\$model,'$attribute'); ?>\n"; ?>
		</div>
	</div>  

<?php endforeach; ?>

	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary pull-right')); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->