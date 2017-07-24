<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	$model->kd_desa,
	);

	$this->pageTitle='Detail Desa';
	?>



		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Desa'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Desa'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Desa'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->kd_desa,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Desa'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->kd_desa,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Desa'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id',
		'kd_desa',
		'kd_kecamatan',
		'mnemonic',
		'nama',
		'KK2012',
				),
				)); ?>


			<STYLE>
				th{width:150px;}
			</STYLE>

