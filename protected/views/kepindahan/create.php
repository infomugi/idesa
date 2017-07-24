<?php
/* @var $this KepindahanController */
/* @var $model Kepindahan */

$this->breadcrumbs=array(
	'Kepindahans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Kepindahan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>