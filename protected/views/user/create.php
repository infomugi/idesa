<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('daftar'),
	'Tambah',
	);

	$this->pageTitle='Tambah User';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>