<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	'Kelola',
	);

$this->pageTitle='Kelola Data Tidak Bekerja';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Isi Data Tidak Bekerja',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>		
		<?php echo CHtml::link('Daftar Data Tidak Bekerja',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'Keluarga-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),
						array('name'=>'kd_operator','value'=>'$data->Operator->username'),
						// 'kd_umpi',
						'tglupdate',
						'no_kk',
						'nama',
						// 'nomorformulir',
						// array('name'=>'kd_desa','value'=>'$data->Desa->nama'),
						// array('name'=>'kd_desa','value'=>'Keluarga::model()->kecamatan($data->Desa->kd_kecamatan)'),
						'alamat',

						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>


