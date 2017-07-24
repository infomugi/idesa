<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Agama';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>