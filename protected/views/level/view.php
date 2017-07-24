<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->level_ID,
	);

	$this->pageTitle='Detail Level';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('create'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Level'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Level'));
		 ?>
		<?php echo CHtml::link('Kalola',
	 array('admin'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Level'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->level_ID,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Level'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->level_ID,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Level'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'level_ID',
		'level',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

