<?php
/* @var $this KepindahanDetailController */
/* @var $model KepindahanDetail */

$this->breadcrumbs=array(
	'Kepindahan Details'=>array('index'),
	'Kelola',
	);

	$this->pageTitle='Kelola KepindahanDetail';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah KepindahanDetail',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Daftar KepindahanDetail',
 array('daftar'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'kepindahan-detail-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_kepindahan_detail',
		'kepindahan_id',
		'nik',
		'nama_lengkap',
		'masa_berlaku_ktp',
		'sdrt_id',
			array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
			'style' => 'text-align: center;'),
			),
			),
			)); ?>
			
		</section>