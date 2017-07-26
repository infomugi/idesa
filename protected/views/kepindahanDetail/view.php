<?php
/* @var $this KepindahanDetailController */
/* @var $model KepindahanDetail */

$this->breadcrumbs=array(
	'Kepindahan Details'=>array('index'),
	$model->id_kepindahan_detail,
	);

	$this->pageTitle='Detail KepindahanDetail';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah KepindahanDetail'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar KepindahanDetail'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola KepindahanDetail'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_kepindahan_detail,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit KepindahanDetail'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id_kepindahan_detail,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus KepindahanDetail'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_kepindahan_detail',
		'kepindahan_id',
		'nik',
		'nama_lengkap',
		'masa_berlaku_ktp',
		'sdrt_id',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

