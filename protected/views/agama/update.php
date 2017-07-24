<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	$model->kd_agama=>array('view','id'=>$model->kd_agama),
	'Update',
	);

	$this->pageTitle='Edit Agama';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>