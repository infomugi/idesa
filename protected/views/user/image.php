<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('daftar'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
	);

	$this->pageTitle='Edit Image';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>