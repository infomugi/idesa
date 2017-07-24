<?php
/* @var $this SdrtController */
/* @var $model Sdrt */

$this->breadcrumbs=array(
	'Sdrts'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
	);

	$this->pageTitle='Edit Sdrt';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>