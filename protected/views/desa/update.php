<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	$model->kd_desa=>array('view','id'=>$model->kd_desa),
	'Update',
	);

	$this->pageTitle='Edit Desa';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>