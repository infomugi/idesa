<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	$model->id_sktm=>array('view','id'=>$model->id_sktm),
	'Update',
	);

$this->pageTitle='Edit SKTM';
?>

<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>