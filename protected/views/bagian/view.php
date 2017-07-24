<?php
/* @var $this BagianController */
/* @var $model Bagian */

$this->breadcrumbs=array(
	'Bagians'=>array('index'),
	$model->id_bagian,
	);

	$this->pageTitle='Detail Bagian';
	?>


		<?php echo CHtml::link('Tambah',
	 array('create'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Bagian'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Bagian'));
		 ?>
		<?php echo CHtml::link('Kalola',
	 array('admin'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Bagian'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_bagian,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bagian'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id_bagian,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Bagian'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_bagian',
		'nama',
		'deskripsi',
		'status',
				),
				)); ?>

			

			<STYLE>
				th{width:150px;}
			</STYLE>

