<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);

	$this->pageTitle='Edit Pendidikan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>