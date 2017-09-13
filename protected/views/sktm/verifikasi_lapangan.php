<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	$model->id_sktm=>array('view','id'=>$model->id_sktm),
	'Update',
	);


$this->pageTitle='Verifikasi Kelayakan SKTM';
?>

<?php echo $this->renderPartial('_form_verifikasi_lapangan', array('model'=>$model)); ?>