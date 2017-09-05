<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'Pengantar KK'=>array('daftar'),
	$model->kd_umpi=>array('view','id'=>$model->kd_umpi),
	'Update',
	);


$this->pageTitle='Pengambilan Dokumen Pengantar KK';
?>

<?php echo $this->renderPartial('_form_pengambilan', array('model'=>$model)); ?>