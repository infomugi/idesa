<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	$model->id,
	);

	$this->pageTitle='Detail Jurusan';
	?>


		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Jurusan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Jurusan'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Jurusan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Jurusan'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Jurusan'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id',
		'kd_jurusan',
		'kd_pendidikan',
		'nama',
				),
				)); ?>

			
			<STYLE>
				th{width:150px;}
			</STYLE>

