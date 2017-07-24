<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'Respondens'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Responden';
?>

<section class="col-xs-12">

		<?php echo CHtml::link('Daftar Responden',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'responden-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'kd_responden',
						'kd_umpi',
						'sdrt',
						'nomor',
						'nama',
						'kd_tempatlahir',
						/*
						'tempatlahir',
						'tgllahir',
						'tg',
						'bl',
						'th',
						'jeniskelamin',
						'kd_statusnikah',
						'kd_pendidikan',
						'kd_jurusanpendidikan',
						'kd_agama',
						'kd_pekerjaan',
						'kd_bidangusaha',
						'bidangusaha',
						'nomorkartukuning',
						'nik',
						'telpongenggam',
						'email',
						'ipk',
						'tb',
						'bb',
						'waktuupdate',
						'kd_operator',
						'migrasi',
						'waktumigrasi',
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