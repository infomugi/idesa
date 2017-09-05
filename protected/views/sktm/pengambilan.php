<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	$model->id_sktm=>array('view','id'=>$model->id_sktm),
	'Update',
	);


$this->pageTitle='Pengambilan Dokumen SKTM';
?>

<?php echo $this->renderPartial('_form_pengambilan', array('model'=>$model)); ?>