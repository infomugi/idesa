<?php
/* @var $this SdrtController */
/* @var $model Sdrt */

$this->breadcrumbs=array(
	'Sdrts'=>array('index'),
	$model->Id,
	);

	$this->pageTitle='Detail Sdrt';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Sdrt'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Sdrt'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Sdrt'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->Id,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sdrt'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->Id,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Sdrt'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'Id',
		'kode',
		'nama',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

