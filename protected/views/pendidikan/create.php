<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Pendidikan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>