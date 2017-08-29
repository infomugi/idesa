<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Dashboard';
?>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
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
						'id'=>'kepindahan-grid',
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

							// array(
							// 	'header'=>'Action',
							// 	'class'=>'CButtonColumn',
							// 	'htmlOptions'=>array('width'=>'100px', 
							// 		'style' => 'text-align: center;'),
							// 	),
							),
							)); ?>
						</div>
						<div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
							<H3><i class="fa fa-file-text"></i> SKTM (Dalam Proses) <span class="label label-success pull-right"><?php echo $dataSktm->getTotalItemCount(); ?></span></H3>

							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'kepindahan-grid',
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

									// array(
									// 	'header'=>'Action',
									// 	'class'=>'CButtonColumn',
									// 	'htmlOptions'=>array('width'=>'100px', 
									// 		'style' => 'text-align: center;'),
									// 	),
									),
									)); ?>	

								</div>
								<div class="tab-pane fade" role="tabpanel" id="dropdown1" aria-labelledby="dropdown1-tab">
									<H3><i class="fa fa-file-text"></i> Pengantar KK (Dalam Proses) <span class="label label-warning pull-right"><?php echo $dataKK->getTotalItemCount(); ?></span></H3>

									<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'kepindahan-grid',
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

											// array(
											// 	'header'=>'Action',
											// 	'class'=>'CButtonColumn',
											// 	'htmlOptions'=>array('width'=>'100px', 
											// 		'style' => 'text-align: center;'),
											// 	),
											),
											)); ?>
										</div>

									</div>
								</div>


							</div>
						</div>




						
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
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
												'id'=>'kepindahan-grid',
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
													'alamat',
													'kode_pos',

							// array(
							// 	'header'=>'Action',
							// 	'class'=>'CButtonColumn',
							// 	'htmlOptions'=>array('width'=>'100px', 
							// 		'style' => 'text-align: center;'),
							// 	),
													),
													)); ?>
												</div>
												<div class="tab-pane fade" role="tabpanel" id="profile-1" aria-labelledby="profile-tab-1">
													<H3><i class="fa fa-file-text"></i> SKTM (Sudah Selesai) <span class="label label-success pull-right"><?php echo $dataSktm1->getTotalItemCount(); ?></span></H3>

													<?php $this->widget('zii.widgets.grid.CGridView', array(
														'id'=>'kepindahan-grid',
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
															'tingkat',
															'instansi',
															'nama_ayah',
															'nama_ibu',

									// array(
									// 	'header'=>'Action',
									// 	'class'=>'CButtonColumn',
									// 	'htmlOptions'=>array('width'=>'100px', 
									// 		'style' => 'text-align: center;'),
									// 	),
															),
															)); ?>	

														</div>
														<div class="tab-pane fade" role="tabpanel" id="dropdown1-1" aria-labelledby="dropdown1-tab-1">
															<H3><i class="fa fa-file-text text-"></i> Pengantar KK (Sudah Selesai) <span class="label label-warning pull-right"><?php echo $dataKK1->getTotalItemCount(); ?></span></H3>

															<?php $this->widget('zii.widgets.grid.CGridView', array(
																'id'=>'kepindahan-grid',
																'dataProvider'=>$dataKK1,
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

											// array(
											// 	'header'=>'Action',
											// 	'class'=>'CButtonColumn',
											// 	'htmlOptions'=>array('width'=>'100px', 
											// 		'style' => 'text-align: center;'),
											// 	),
																	),
																	)); ?>
																</div>

															</div>
														</div>


													</div>
												</div>




