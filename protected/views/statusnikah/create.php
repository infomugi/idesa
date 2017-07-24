<?php
/* @var $this StatusnikahController */
/* @var $model Statusnikah */

$this->breadcrumbs=array(
	'Statusnikahs'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Statusnikah';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>