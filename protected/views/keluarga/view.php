<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
// 

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	$model->kd_umpi,
	);

$this->pageTitle='Detail Keluarga - #'.$model->kd_umpi;

$dataKecamatan = Kecamatan::model()->findByPk($model->Desa->kd_kecamatan);
$dataProvider=new CActiveDataProvider('Responden',array('criteria'=>array('condition'=>'kd_umpi='.$model->kd_umpi)));
?>


<div class="col-md-offset-1 col-md-10">
	<span class="hidden-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',
			array('tambah'),
			array('class' => 'btn btn-success btn-flat','title'=>'Tambah Keluarga'));
			?>
			<?php echo CHtml::link('<i class="fa fa-tasks"></i> List',
				array('daftar'),
				array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Keluarga'));
				?>
				<?php echo CHtml::link('<i class="fa fa-list"></i> Kelola',
					array('kelola'),
					array('class' => 'btn btn-success btn-flat','title'=>'Kelola Keluarga'));
					?>
					<?php echo CHtml::link('<i class="fa fa-remove"></i> Hapus', 
						array('delete', 'id'=>$model->kd_umpi,
							),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keluarga'));
							?>
							<?php echo CHtml::link('<i class="fa fa-edit"></i> Edit', 
								array('update', 'id'=>$model->kd_umpi,
									), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Keluarga'));
									?>
									
									<?php echo CHtml::link(CHtml::encode("Setujui Surat Pengantar KK"), array('terima', 'id'=>$model->kd_umpi),array('class'=>'btn btn-success')); ?>

									<?php echo CHtml::link(CHtml::encode("Tolak Surat Pengantar KK"), array('tolak', 'id'=>$model->kd_umpi),array('class'=>'btn btn-danger')); ?>

									<?php if($model->status==1): ?>
										<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak Pengantar KK', 
											array('print', 'id'=>$model->kd_umpi,
												),  array('class' => 'btn btn-primary pull-right btn-flat', 'title'=>'Print Pengantar KK'));
												?>
											<?php endif; ?>

										</span>

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



											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													'tglupdate',
													'waktuupdate',
													'ip_client',
													array('name'=>'kd_operator','value'=>$model->Operator->namalengkap),
													// array('name'=>'kd_surveyor','value'=>$model->Surveyor->username),
													// array('name'=>'tks','value'=>$model->Tks->username),
													// 'catatan',
													// array('name'=>'status','value'=>Kepindahan::model()->status($model->status)),
													),
													)); ?>



													<H3><i class="fa fa-users"></i> Data Keluarga</H3>
													<TABLE class="table table-bordered">
														<TR>
															<TD>Nama KK</TD>
															<TD><B><?php echo ucwords($model->nama); ?></B></TD>
															<TD>Tanggal Update</TD>
															<TD style="background:#F5f5f5;"><B><?php echo $model->tglupdate; ?></B></TD>
														</TR>
														<TR>
															<TD>NIK</TD>
															<TD><B><?php echo $model->no_kk; ?></B></TD>
															<TD colspan="2"></TD>
														</TR>			
														<TR>
															<TD>Kecamatan</TD>
															<TD><B><?php echo $dataKecamatan->nama; ?></B></TD>
															<TD>Alamat</TD>
															<TD><B><?php echo ucwords($model->alamat); ?></B></TD>
														</TR>
														<TR>
															<TD>Desa</TD>
															<TD><B><?php echo $model->Desa->nama; ?></B></TD>
															<TD>RT / RW</TD>
															<TD><B><?php echo $model->rt; ?> / <?php echo $model->rw; ?></B></TD>
														</TR>	
														<TR>
															<TD colspan="2"></TD>
															<TD>Telp Rumah</TD>
															<TD><B><?php echo $model->telponrumah; ?></B></TD>
														</TR>						
													</TABLE>

													<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah Anggota Keluarga', 
														array('responden/tambah', 'id'=>$model->kd_umpi,
															), array('class' => 'btn btn-info pull-right btn-sm btn-flat', 'title'=>'Tambah Anggota Keluarga'));
															?>	
															<H4><i class="fa fa-user"></i> Data Anggota Keluarga</H4>
															<?php $this->widget('zii.widgets.grid.CGridView', array(
																'id'=>'responden-grid',
																'dataProvider'=>$dataProvider,
																'summaryText'=>'',
																'itemsCssClass' => 'table table-bordered',
																'columns'=>array(

																	array(
																		'header'=>'No',
																		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																		'htmlOptions'=>array('width'=>'10px', 
																			'style' => 'text-align: center;')),

																	array(
																		'class' => 'CButtonColumn',
																		'template' => '{view}{update}',
																		'class'=>'CButtonColumn',
																		'viewButtonUrl' => 'Yii::app()->controller->createUrl("responden/view",array("id"=>$data->kd_responden))',
																		'updateButtonUrl' => 'Yii::app()->controller->createUrl("responden/update",array("id"=>$data->kd_responden,))'
																		),																		

																	array('header'=>'Nama','value'=>'ucwords($data->nama)','htmlOptions'=>array('width'=>'110px')),
																	array('header'=>'SDRT','value'=>'$data->Saudara->nama'),
																	array('header'=>'Tgl Lahir','value'=>'$data->tgllahir'),
																	array('header'=>'Umur','value'=>'Responden::model()->countBirth($data->tgllahir)'),
																	array('header'=>'L/P','value'=>'Responden::model()->jeniskelamin($data->jeniskelamin)'),
																	array('header'=>'Status Nikah','value'=>'$data->Statusnikah->nama'),
																	array('header'=>'Agama','value'=>'$data->Agama->nama'),
																	array('header'=>'Pendidikan Terakhir','value'=>'$data->Pendidikan->nama'),

																	array(
																		'class' => 'CButtonColumn',
																		'template' => '{delete}',
																		'class'=>'CButtonColumn',
																		'deleteButtonUrl' => 'Yii::app()->controller->createUrl("responden/delete",array("id"=>$data->kd_responden))',
																		),	
																	),
																	)); ?>

																</div>


																<STYLE>
																	th{width:150px;}
																</STYLE>

