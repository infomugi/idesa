<?php
/* @var $this KepindahanController */
/* @var $model Kepindahan */

$this->breadcrumbs=array(
	'Kepindahans'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Kepindahan';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Kepindahan',
		array('tambah'),
		array('class' => 'btn btn-warning btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Kepindahan',
			array('daftar'),
			array('class' => 'btn btn-warning btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'kepindahan-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'no_resi',
						'tanggal_buat',
						'no_kk',
						'nama_kk',
						'alamat',
						'kode_pos',
						/*
						'id_kepindahan',
						'petugas_id',
						'alasan_pindah',
						'alamat_tujuan',
						'provinsi_id',
						'kabkota_id',
						'kecamatan_id',
						'desa_id',
						'jenis_kepindahan',
						'status_kk_yang_tidak_pindah',
						'status_kk_pindah',
						'status',
						*/
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>