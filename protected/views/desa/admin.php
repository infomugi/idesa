<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Desa';
?>


	<?php echo CHtml::link('Tambah Desa',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Desa',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'desa-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						// 'id',
						// 'kd_desa',
						array('name'=>'kd_kecamatan','value'=>'$data->Kecamatan->nama'),
						// 'kd_kecamatan',
						// 'mnemonic',
						'nama',
						'KK2012',
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					