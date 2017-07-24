<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	$model->kd_umpi=>array('view','id'=>$model->kd_umpi),
	'Update',
	);

	$this->pageTitle='Edit Keluarga';
	?>

	<?php

	if(YII::app()->user->record->level==1){

		echo $this->renderPartial('_form_update', array('model'=>$model,
                                             'responden'=>$responden,
                                              'validatedrespondens'=>$validatedrespondens));
	}else{
				echo $this->renderPartial('_form_update_tks', array('model'=>$model,
                                             'responden'=>$responden,
                                              'validatedrespondens'=>$validatedrespondens));
	}
                                               ?>	
