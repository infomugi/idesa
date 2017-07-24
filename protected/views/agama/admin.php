<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Agama';
?>



<?php echo CHtml::link('Tambah Agama',
	array('tambah'),
	array('class' => 'btn btn-success btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Agama',
		array('daftar'),
		array('class' => 'btn btn-success btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'agama-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'id',
					'kd_agama',
					'mnemonic',
					'nama',
					array(
						'header'=>'Action',
						'class'=>'CButtonColumn',
						'htmlOptions'=>array('width'=>'100px', 
							'style' => 'text-align: center;'),
						),
					),
					)); ?>
					
