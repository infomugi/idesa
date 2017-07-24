<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatan'=>array('index'),
	$model->kd_kecamatan=>array('view','id'=>$model->kd_kecamatan),
	'Update',
	);

	$this->pageTitle='Edit Kecamatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>