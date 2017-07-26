<?php
/* @var $this KepindahanDetailController */
/* @var $model KepindahanDetail */

$this->breadcrumbs=array(
	'Kepindahan Details'=>array('index'),
	$model->id_kepindahan_detail=>array('view','id'=>$model->id_kepindahan_detail),
	'Update',
	);

	$this->pageTitle='Edit KepindahanDetail';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>