<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	$model->kd_umpi=>array('view','id'=>$model->kd_umpi),
	'Update',
	);

$this->pageTitle='Verifikasi SKTM';
?>

<?php echo $this->renderPartial('_form_verifikasi', array('model'=>$model)); ?>