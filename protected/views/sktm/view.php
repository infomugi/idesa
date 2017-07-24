<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	$model->id_sktm,
	);

$this->pageTitle='Detail SKTM';
?>


<div class="col-md-offset-1 col-md-10">

	<?php echo CHtml::link('Tambah',
		array('tambah'),
		array('class' => 'btn btn-info btn-flat','title'=>'Tambah SKTM'));
		?>
		<?php echo CHtml::link('List',
			array('daftar'),
			array('class' => 'btn btn-info btn-flat', 'title'=>'Daftar SKTM'));
			?>
			<?php echo CHtml::link('Kelola',
				array('kelola'),
				array('class' => 'btn btn-info btn-flat','title'=>'Kelola SKTM'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_sktm,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit SKTM'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->id_sktm,
								),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus SKTM'));
								?>

								<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak SKTM', 
									array('print', 'id'=>$model->id_sktm,
										),  array('class' => 'btn btn-danger pull-right btn-flat', 'title'=>'Print SKTM'));
										?>

										<HR>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													// 'id_sktm',
													'no_sktm',
													'tanggal_input',
													'tanggal_buat',
													array('name'=>'petugas_id','value'=>$model->Petugas->namalengkap),
													'nama_anak',
													'tempat_lahir',
													'tanggal_lahir',
													'tingkat',
													'instansi',
													'nama_ayah',
													'umur_ayah',
													array('name'=>'agama_ayah','value'=>$model->AgamaAyah->nama),
													array('name'=>'pekerjaan_ayah','value'=>$model->PekerjaanAyah->nama),
													'alamat_ayah',
													'nama_ibu',
													'umur_ibu',
													array('name'=>'agama_ibu','value'=>$model->AgamaIbu->nama),
													array('name'=>'pekerjaan_ibu','value'=>$model->PekerjaanIbu->nama),
													'alamat_ibu',
													array('name'=>'status','value'=>Kepindahan::model()->status($model->status)),
													// 'status',
													),
													)); ?>

												</div>

												<STYLE>
													th{width:150px;}
												</STYLE>

