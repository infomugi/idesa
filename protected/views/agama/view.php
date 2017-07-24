<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	$model->kd_agama,
	);

$this->pageTitle='Detail Agama';
?>

<?php echo CHtml::link('Tambah',
	array('tambah'),
	array('class' => 'btn btn-success btn-flat','title'=>'Tambah Agama'));
	?>
	<?php echo CHtml::link('List',
		array('daftar'),
		array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Agama'));
		?>
		<?php echo CHtml::link('Kelola',
			array('kelola'),
			array('class' => 'btn btn-success btn-flat','title'=>'Kelola Agama'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->kd_agama,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Agama'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->kd_agama,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Agama'));
							?>

							<HR>

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										'id',
										'kd_agama',
										'mnemonic',
										'nama',
										),
										)); ?>

										

								<STYLE>
									th{width:150px;}
								</STYLE>

