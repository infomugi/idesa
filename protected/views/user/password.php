<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('daftar'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
	);

	$this->pageTitle='Edit Password - '.$model->username;
	?>

	<?php echo $this->renderPartial('form_password', array('model'=>$model)); ?>