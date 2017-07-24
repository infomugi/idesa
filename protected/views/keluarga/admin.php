<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	'Kelola',
	);

$this->pageTitle='Kelola Keluarga';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Keluarga',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>		
		<?php echo CHtml::link('Daftar Keluarga',
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
						'tglupdate',
						'no_kk',
						'nama',
						// 'kd_umpi',
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


					<!-- Modal -->
					<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<!-- Popup Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"><strong>View</strong> Division</h4>
								</div>
								<!-- Popup Content -->
								<div class="modal-body">
									<p>Details</p>
								</div>
								<!-- Popup Footer -->
								<div class="modal-footer">
									<BR>
										<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>