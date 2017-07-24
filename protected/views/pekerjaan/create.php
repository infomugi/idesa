<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Pekerjaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>