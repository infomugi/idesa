<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'Respondens'=>array('index'),
	$model->kd_responden=>array('view','id'=>$model->kd_responden),
	'Update',
	);

	$this->pageTitle='Edit Responden';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>