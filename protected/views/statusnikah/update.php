<?php
/* @var $this StatusnikahController */
/* @var $model Statusnikah */

$this->breadcrumbs=array(
	'Statusnikahs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);

	$this->pageTitle='Edit Statusnikah';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>