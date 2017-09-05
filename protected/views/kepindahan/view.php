<?php
/* @var $this KepindahanController */
/* @var $model Kepindahan */

$this->breadcrumbs=array(
	'Kepindahans'=>array('index'),
	$model->id_kepindahan,
	);

$this->pageTitle='Detail Kepindahan';
?>


<div class="col-md-offset-1 col-md-10">

	<?php echo CHtml::link('Tambah',
		array('tambah'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Tambah Kepindahan'));
		?>
		<?php echo CHtml::link('Kelola',
			array('kelola'),
			array('class' => 'btn btn-warning btn-flat','title'=>'Kelola Kepindahan'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_kepindahan,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Kepindahan'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->id_kepindahan,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Kepindahan'));
							?>

							<?php if($model->status==1): ?>
								<?php if($model->pengambilan_id==0){ ?>
									<?php if(Yii::app()->user->getLevel()==3 || Yii::app()->user->getLevel()==4): ?>
									<?php echo CHtml::link(CHtml::encode("Pengambilan Surat Pindah"), array('pengambilan', 'id'=>$model->id_kepindahan),array('class'=>'btn btn-success')); ?>
								<?php endif; ?>
								<?php }else{ ?>
									<button class="btn btn-info disabled">Sudah di Ambil</button>
									<?php } ?>
								<?php endif; ?>
								<?php if(Yii::app()->user->getLevel()==1 || Yii::app()->user->getLevel()==2): ?>
									<?php echo CHtml::link(CHtml::encode("Setujui Surat Pindah"), array('terima', 'id'=>$model->id_kepindahan),array('class'=>'btn btn-success')); ?>

									<?php echo CHtml::link(CHtml::encode("Tolak Surat Pindah"), array('tolak', 'id'=>$model->id_kepindahan),array('class'=>'btn btn-danger')); ?>
								<?php endif; ?>

								<?php if($model->status==1): ?>
									<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak', 
										array('print', 'id'=>$model->id_kepindahan,
											),  array('class' => 'btn btn-primary pull-right btn-flat', 'title'=>'Print Kepindahan'));
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

											<H3><i class="fa fa-qrcode"></i> No. Resi Surat Pindah : <?php echo $model->no_resi; ?></H3>
											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
												// 'id_kepindahan',
													'tanggal_buat',
													array('name'=>'petugas_id','value'=>$model->Petugas->namalengkap),
													'no_kk',
													'nama_kk',
													'alamat',
													'kode_pos',
													'alasan_pindah',
													'alamat_tujuan',

													array('name'=>'provinsi_id','value'=>$model->Provinsi->name == NULL ? "-" : $model->Provinsi->name),
													array('name'=>'kabkota_id','value'=>$model->Kota->name == NULL ? "-" : $model->Kota->name),
													array('name'=>'kecamatan_id','value'=>$model->Kecamatan->name == NULL ? "-" : $model->Kecamatan->name),
													array('name'=>'desa_id','value'=>$model->Desa->name == NULL ? "-" : $model->Desa->name),

													array('name'=>'jenis_kepindahan','value'=>Kepindahan::model()->jenis($model->jenis_kepindahan)),
													array('name'=>'status_kk_yang_tidak_pindah','value'=>Kepindahan::model()->statuskk($model->status_kk_yang_tidak_pindah)),
													array('name'=>'status_kk_pindah','value'=>Kepindahan::model()->statuskkpindah($model->status_kk_pindah)),

													),
													)); ?>


											<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah Anggota Keluarga', 
												array('kepindahandetail/tambah', 'id'=>$model->id_kepindahan,
													), array('class' => 'btn btn-info pull-right btn-sm btn-flat', 'title'=>'Tambah Anggota Keluarga'));
													?>	

													<?php $this->widget('zii.widgets.grid.CGridView', array(
														'id'=>'kepindahan-detail-grid',
														'dataProvider'=>$dataProvider,
														'summaryText'=>'',
														// 'filter'=>$model,
														'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
														'columns'=>array(

															'nik',
															'nama_lengkap',
															array('name'=>'masa_berlaku_ktp','value'=>'kepindahandetail::model()->masaberlaku($data->masa_berlaku_ktp)'),
															array('name'=>'sdrt_id','value'=>'$data->Sdrt->nama'),

															array(
																'class' => 'CButtonColumn',
																'template' => '{delete}',
																'class'=>'CButtonColumn',
																'deleteButtonUrl' => 'Yii::app()->controller->createUrl("kepindahandetail/delete",array("id"=>$data->id_kepindahan_detail))',
																),	

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
																			th{width:250px;}
																		</STYLE>

