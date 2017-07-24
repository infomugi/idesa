<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	'Tambah',
	);

$this->pageTitle='Form Isian Keluarga';
?>

<?php
if(Yii::app()->user->getLevel()==1){
	echo $this->renderPartial('_form', array('model'=>$model,
		'responden'=>$responden,
		'validatedrespondens'=>$validatedrespondens));
}else{
	echo $this->renderPartial('_form_create', array('model'=>$model,
		'responden'=>$responden,
		'validatedrespondens'=>$validatedrespondens));		
}
?>