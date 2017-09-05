<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	'Kelola',
	);

$this->pageTitle='Kelola Sktm';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah SKTM',
		array('tambah'),
		array('class' => 'btn btn-info btn-flat'));
		?>
		<?php echo CHtml::link('Daftar SKTM',
			array('daftar'),
			array('class' => 'btn btn-info btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'sktm-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

					// 'id_sktm',
						'no_resi',
		// 'tanggal_input',
		// 'tanggal_buat',
		// 'petugas_id',
						'nama_anak',
						'tingkat',
						'instansi',
						'nama_ayah',
						'nama_ibu',
		/*
		'tempat_lahir',
		'tanggal_lahir',
		'umur_ayah',
		'agama_ayah',
		'pekerjaan_ayah',
		'alamat_ayah',
		'umur_ibu',
		'agama_ibu',
		'pekerjaan_ibu',
		'alamat_ibu',
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