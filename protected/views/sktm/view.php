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

							<?php if($model->status==1): ?>
								<?php if($model->pengambilan_id==0){ ?>
									<?php if(Yii::app()->user->getLevel()==3 || Yii::app()->user->getLevel()==4): ?>
									<?php echo CHtml::link(CHtml::encode("Pengambilan SKTM"), array('pengambilan', 'id'=>$model->id_sktm),array('class'=>'btn btn-success')); ?>
								<?php endif; ?>

								<?php }else{ ?>
									<button class="btn btn-info disabled">Sudah di Ambil</button>
									<?php } ?>
								<?php endif; ?>
								
								<?php if(Yii::app()->user->getLevel()==1 || Yii::app()->user->getLevel()==2): ?>
									<?php echo CHtml::link(CHtml::encode("Setujui SKTM"), array('terima', 'id'=>$model->id_sktm),array('class'=>'btn btn-success')); ?>

									<?php echo CHtml::link(CHtml::encode("Tolak SKTM"), array('tolak', 'id'=>$model->id_sktm),array('class'=>'btn btn-danger')); ?>
								<?php endif; ?>

								<?php if($model->status==1): ?>

									<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak', 
										array('print', 'id'=>$model->id_sktm,
											),  array('class' => 'btn btn-primary pull-right btn-flat', 'title'=>'Print SKTM'));
											?>

										<?php endif; ?>

										<HR>

											<div class="alert <?php echo Kepindahan::model()->alert($model->status); ?>">
												<?php echo Kepindahan::model()->status($model->status); ?>
											</div>

											<?php if($model->deskripsi!=""): ?>
												Memo
												<div class="alert <?php echo Kepindahan::model()->alert($model->status); ?>">
													<?php echo $model->deskripsi; ?>
												</div>
											<?php endif; ?>

											<H3><i class="fa fa-qrcode"></i> No. Resi SKTM : <?php echo $model->no_resi; ?></H3>
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
													// array('name'=>'status','value'=>Kepindahan::model()->status($model->status)),
													// 'status',
													),
													)); ?>


													<div class="col-md-6"> 
														<H3>Riwayat Cetak Dokumen</H3>
														<?php $this->widget('zii.widgets.CDetailView', array(
															'data'=>$model,
															'htmlOptions'=>array("class"=>"table"),
															'attributes'=>array(
																array('name'=>'print_by','value'=>$model->print_by==0 ? "-" : $model->PrintPetugas->namalengkap),

																array(
																	'name'=>'print_klik',
																	'value'=>$model->print_klik,
																	'visible'=>$model->print_by!=0,
																	),

																array(
																	'name'=>'print_tanggal',
																	'value'=>$model->print_tanggal,
																	'visible'=>$model->print_by!=0,
																	),

																array(
																	'name'=>'print_deskripsi',
																	'value'=>$model->print_deskripsi,
																	'visible'=>$model->print_by!=0,
																	),


																),
																)); ?>
															</div>


															<div class="col-md-6"> 
																<H3>Riwayat Pengambilan Dokumen</H3>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(
																		array(
																			'name'=>'pengambilan_id',
																			'value'=>$model->pengambilan_id==0 ? "Belum di Ambil" : $model->PengambilanPetugas->namalengkap
																			),

																		array(
																			'name'=>'pengambilan_tanggal',
																			'value'=>$model->pengambilan_tanggal,
																			'visible'=>$model->pengambilan_id!=0,
																			),

																		array(
																			'name'=>'pengambilan_oleh',
																			'value'=>$model->pengambilan_oleh,
																			'visible'=>$model->pengambilan_id!=0,
																			),


																		),
																		)); ?>
																	</div>

																</div>

																<STYLE>
																	th{width:150px;}
																</STYLE>

