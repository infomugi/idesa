<?php
/* @var $this SdrtController */
/* @var $model Sdrt */

$this->breadcrumbs=array(
	'Sdrts'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Sdrt';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>