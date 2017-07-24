<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Jurusan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>