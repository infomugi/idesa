<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);

	$this->pageTitle='Edit Pekerjaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>