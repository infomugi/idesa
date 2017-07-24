<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	'Tambah',
	);

$this->pageTitle='Tambah SKTM';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>