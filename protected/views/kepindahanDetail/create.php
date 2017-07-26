<?php
/* @var $this KepindahanDetailController */
/* @var $model KepindahanDetail */

$this->breadcrumbs=array(
	'Kepindahan Details'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah KepindahanDetail';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>