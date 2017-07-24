<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Desa';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>