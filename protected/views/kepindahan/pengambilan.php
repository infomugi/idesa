<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'Respondens'=>array('index'),
	$model->id_kepindahan=>array('view','id'=>$model->id_kepindahan),
	'Update',
	);

$this->pageTitle='Pengambilan Dokumen';
?>

<?php echo $this->renderPartial('_form_pengambilan', array('model'=>$model)); ?>