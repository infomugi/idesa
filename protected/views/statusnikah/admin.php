<?php
/* @var $this StatusnikahController */
/* @var $model Statusnikah */

$this->breadcrumbs=array(
	'Status Nikah'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Status Nikah';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Status Nikah',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Status Nikah',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'statusnikah-grid',
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
						'kd_statusnikah',
						'nama',
						'mnemonic',
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>
						
					</section>