<?php
/* @var $this KepindahanController */
/* @var $model Kepindahan */

$this->breadcrumbs=array(
	'Kepindahans'=>array('index'),
	$model->id_kepindahan=>array('view','id'=>$model->id_kepindahan),
	'Update',
	);

	$this->pageTitle='Edit Kepindahan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>