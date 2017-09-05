<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Dashboard';
?>
<?php if(Yii::app()->user->getLevel()==2 || Yii::app()->user->getLevel()==4): ?>
	<div class="row">
		<div class="col-md-12">
			<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
				<ul class="nav nav-tabs" id="myTabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Surat Pindah <span class="label label-warning "><?php echo $dataKepindahan->getTotalItemCount(); ?></span></a>
					</li>
					<li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Surat Keterangan Tidak Mampu <span class="label label-warning "><?php echo $dataSktm->getTotalItemCount(); ?></span></a>
					</li>
					<li role="presentation" class=""><a href="#dropdown1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Surat Pengantar Keluarga <span class="label label-warning "><?php echo $dataKK->getTotalItemCount(); ?></span></a>
					</li>

				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab">
						<H3><i class="fa fa-file-text"></i> Surat Pindah (Dalam Proses) <span class="label label-danger pull-right"><?php echo $dataKepindahan->getTotalItemCount(); ?></span></H3>

						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'1-grid',
							'dataProvider'=>$dataKepindahan,
					// 'filter'=>$model,
							'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
							'columns'=>array(

								array(
									'header'=>'No',
									'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
									'htmlOptions'=>array('width'=>'10px', 
										'style' => 'text-align: center;')),

								'tanggal_buat',
								'no_kk',
								'nama_kk',
								'alamat',
								'kode_pos',

								array(
									'class'=>'CButtonColumn',
									'template'=>'{view}',
									'header'=>'Detail',
									'buttons'=>array(
										'view'=>
										array(
											'label'=>'Detail',
											'url'=>'Yii::app()->createUrl("kepindahan/view", array("id"=>$data->id_kepindahan))',
											),


										),
									),

								),
								)); ?>
							</div>
							<div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
								<H3><i class="fa fa-file-text"></i> SKTM (Dalam Proses) <span class="label label-success pull-right"><?php echo $dataSktm->getTotalItemCount(); ?></span></H3>

								<?php $this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'2-grid',
									'dataProvider'=>$dataSktm,
					// 'filter'=>$model,
									'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
									'columns'=>array(

										array(
											'header'=>'No',
											'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
											'htmlOptions'=>array('width'=>'10px', 
												'style' => 'text-align: center;')),

										'no_sktm',
										'nama_anak',
										'tingkat',
										'instansi',
										'nama_ayah',
										'nama_ibu',

										array(
											'class'=>'CButtonColumn',
											'template'=>'{view}',
											'header'=>'Detail',
											'buttons'=>array(
												'view'=>
												array(
													'label'=>'Detail',
													'url'=>'Yii::app()->createUrl("sktm/view", array("id"=>$data->id_sktm))',
													),


												),
											),

										),
										)); ?>	

									</div>
									<div class="tab-pane fade" role="tabpanel" id="dropdown1" aria-labelledby="dropdown1-tab">
										<H3><i class="fa fa-file-text"></i> Pengantar KK (Dalam Proses) <span class="label label-warning pull-right"><?php echo $dataKK->getTotalItemCount(); ?></span></H3>

										<?php $this->widget('zii.widgets.grid.CGridView', array(
											'id'=>'3-grid',
											'dataProvider'=>$dataKK,
					// 'filter'=>$model,
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
												'alamat',

												array(
													'class'=>'CButtonColumn',
													'template'=>'{view}',
													'header'=>'Detail',
													'buttons'=>array(
														'view'=>
														array(
															'label'=>'Detail',
															'url'=>'Yii::app()->createUrl("keluarga/view", array("id"=>$data->kd_umpi))',
															),


														),
													),
												),
												)); ?>
											</div>

										</div>
									</div>


								</div>
							</div>





							<div class="row">
								<div class="col-md-12">
									<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
										<ul class="nav nav-tabs" id="myTabs" role="tablist">
											<li role="presentation" class="active"><a href="#home-1" id="home-tab-1" role="tab" data-toggle="tab" aria-controls="home-1" aria-expanded="true">Surat Pindah <span class="label label-success "><?php echo $dataKepindahan1->getTotalItemCount(); ?></span></a>
											</li>
											<li role="presentation" class=""><a href="#profile-1" role="tab" id="profile-tab-1" data-toggle="tab" aria-controls="profile-1" aria-expanded="false">Surat Keterangan Tidak Mampu <span class="label label-success "><?php echo $dataSktm1->getTotalItemCount(); ?></span></a>
											</li>
											<li role="presentation" class=""><a href="#dropdown1-1" role="tab" id="profile-tab-1" data-toggle="tab" aria-controls="profile-1" aria-expanded="false">Surat Pengantar Keluarga <span class="label label-success "><?php echo $dataKK1->getTotalItemCount(); ?></span></a>
											</li>

										</ul>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade active in" role="tabpanel" id="home-1" aria-labelledby="home-tab-1">
												<H3><i class="fa fa-file-text"></i> Surat Pindah (Sudah Selesai) <span class="label label-danger pull-right"><?php echo $dataKepindahan1->getTotalItemCount(); ?></span></H3>

												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'4-grid',
													'dataProvider'=>$dataKepindahan1,
					// 'filter'=>$model,
													'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
													'columns'=>array(

														array(
															'header'=>'No',
															'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
															'htmlOptions'=>array('width'=>'10px', 
																'style' => 'text-align: center;')),

														'tanggal_buat',
														'no_kk',
														'nama_kk',


														array('name'=>'print_by','value'=>'$data->print_by==0 ? "Belum di Cetak" : $data->PrintPetugas->namalengkap'),
														'print_deskripsi',
														array('name'=>'pengambilan_id','value'=>'$data->pengambilan_id==0 ? "Belum di Ambil" : $data->PengambilanPetugas->namalengkap'),



														array(
															'class'=>'CButtonColumn',
															'template'=>'{print}',
															'header'=>'Print',
															'buttons'=>array(
																'print'=>
																array(
																	'label'=>'Print',
																	'url'=>'Yii::app()->createUrl("kepindahan/print", array("id"=>$data->id_kepindahan))',
																	'imageUrl'=>Yii::app()->request->baseUrl.'/images/print.png',
																	),


																),
															),



														array(
															'class'=>'CButtonColumn',
															'template'=>'{ambil}',
															'header'=>'Pengambilan',
															'buttons'=>array(
																'ambil'=>
																array(
																	'label'=>'Pengambilan',
																	'url'=>'Yii::app()->createUrl("kepindahan/pengambilan", array("id"=>$data->id_kepindahan))',
																	'imageUrl'=>Yii::app()->request->baseUrl.'/images/verifikasi.png',
																	),


																),
															),






														),
														)); ?>
													</div>
													<div class="tab-pane fade" role="tabpanel" id="profile-1" aria-labelledby="profile-tab-1">
														<H3><i class="fa fa-file-text"></i> SKTM (Sudah Selesai) <span class="label label-success pull-right"><?php echo $dataSktm1->getTotalItemCount(); ?></span></H3>

														<?php $this->widget('zii.widgets.grid.CGridView', array(
															'id'=>'5-grid',
															'dataProvider'=>$dataSktm1,
					// 'filter'=>$model,
															'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
															'columns'=>array(

																array(
																	'header'=>'No',
																	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																	'htmlOptions'=>array('width'=>'10px', 
																		'style' => 'text-align: center;')),

																'no_sktm',
																'nama_anak',


																array('name'=>'print_by','value'=>'$data->print_by==0 ? "Belum di Cetak" : $data->PrintPetugas->namalengkap'),
																'print_deskripsi',
																array('name'=>'pengambilan_id','value'=>'$data->pengambilan_id==0 ? "Belum di Ambil" : $data->PengambilanPetugas->namalengkap'),



																array(
																	'class'=>'CButtonColumn',
																	'template'=>'{print}',
																	'header'=>'Print',
																	'buttons'=>array(
																		'print'=>
																		array(
																			'label'=>'Print',
																			'url'=>'Yii::app()->createUrl("sktm/print", array("id"=>$data->id_sktm))',
																			'imageUrl'=>Yii::app()->request->baseUrl.'/images/print.png',
																			),


																		),
																	),



																array(
																	'class'=>'CButtonColumn',
																	'template'=>'{ambil}',
																	'header'=>'Pengambilan',
																	'buttons'=>array(
																		'ambil'=>
																		array(
																			'label'=>'Pengambilan',
																			'url'=>'Yii::app()->createUrl("sktm/pengambilan", array("id"=>$data->id_sktm))',
																			'imageUrl'=>Yii::app()->request->baseUrl.'/images/verifikasi.png',
																			),


																		),
																	),

																),
																)); ?>	

															</div>
															<div class="tab-pane fade" role="tabpanel" id="dropdown1-1" aria-labelledby="dropdown1-tab-1">
																<H3><i class="fa fa-file-text text-"></i> Pengantar KK (Sudah Selesai) <span class="label label-warning pull-right"><?php echo $dataKK1->getTotalItemCount(); ?></span></H3>

																<?php $this->widget('zii.widgets.grid.CGridView', array(
																	'id'=>'6-grid',
																	'dataProvider'=>$dataKK1,
					// 'filter'=>$model,
																	'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
																	'columns'=>array(

																		array(
																			'header'=>'No',
																			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																			'htmlOptions'=>array('width'=>'10px', 
																				'style' => 'text-align: center;')),


																		'no_kk',
																		'nama',


																		array('name'=>'print_by','value'=>'$data->print_by==0 ? "Belum di Cetak" : $data->PrintPetugas->namalengkap'),
																		'print_deskripsi',
																		array('name'=>'pengambilan_id','value'=>'$data->pengambilan_id==0 ? "Belum di Ambil" : $data->PengambilanPetugas->namalengkap'),



																		array(
																			'class'=>'CButtonColumn',
																			'template'=>'{print}',
																			'header'=>'Print',
																			'buttons'=>array(
																				'print'=>
																				array(
																					'label'=>'Print',
																					'url'=>'Yii::app()->createUrl("keluarga/print", array("id"=>$data->kd_umpi))',
																					'imageUrl'=>Yii::app()->request->baseUrl.'/images/print.png',
																					),


																				),
																			),



																		array(
																			'class'=>'CButtonColumn',
																			'template'=>'{ambil}',
																			'header'=>'Pengambilan',
																			'buttons'=>array(
																				'ambil'=>
																				array(
																					'label'=>'Pengambilan',
																					'url'=>'Yii::app()->createUrl("keluarga/pengambilan", array("id"=>$data->kd_umpi))',
																					'imageUrl'=>Yii::app()->request->baseUrl.'/images/verifikasi.png',
																					),


																				),
																			),


																		),
																		)); ?>
																	</div>

																</div>
															</div>


														</div>
													</div>
												<?php endif; ?>




