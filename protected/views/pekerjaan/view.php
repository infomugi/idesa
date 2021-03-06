<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	$model->id,
	);

	$this->pageTitle='Detail Pekerjaan';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Pekerjaan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Pekerjaan'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Pekerjaan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pekerjaan'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pekerjaan'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id',
		'kd_pekerjaan',
		'nama',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

