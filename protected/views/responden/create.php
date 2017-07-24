<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'Respondens'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Responden';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>