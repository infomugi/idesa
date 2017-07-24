<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);

	$this->pageTitle='Edit Jurusan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>