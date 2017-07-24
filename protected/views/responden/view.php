<?php
/* @var $this RespondenController */
/* @var $model Responden */

$this->breadcrumbs=array(
	'Respondens'=>array('index'),
	$model->kd_responden,
	);

$this->pageTitle='Profile Responden - '.$model->nama;
?>


<section class="col-xs-12">

		<?php echo CHtml::link('List',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Responden'));
			?>
			<?php echo CHtml::link('Kelola',
				array('kelola'),
				array('class' => 'btn btn-success btn-flat','title'=>'Kelola Responden'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->kd_responden,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Responden'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->kd_responden,
								),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Responden'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											// 'kd_responden',
											// 'kd_umpi',
											// 'kd_tempatlahir',
											// 'nik',
											// 'nomor',
											'nama',
											'tempatlahir',
											'tgllahir',
											array(
												'label'=>'Jenis Kelamin',
									            'value'=>$model->jeniskelamin == 1 ? "Laki-Laki" : "Perempuan",					
												'htmlOptions'=>array(
									      		'style' =>'width: 133px; color: red;')	
												),												 
											 array('name'=>'sdrt','value'=>$model->Saudara->nama),
											 array('name'=>'kd_statusnikah','value'=>$model->Statusnikah->nama),
											 array('name'=>'kd_pendidikan','value'=>$model->Pendidikan->nama),
											 array('name'=>'kd_agama','value'=>$model->Agama->nama),
											 // array('name'=>'kd_pekerjaan','value'=>$model->kd_pekerjaan == 0 ? "Tidak diset" : $model->Pekerjaan->nama),
											// 'sdrt',
											// 'tg',
											// 'bl',
											// 'th',
											// 'kd_jurusanpendidikan',
											// 'kd_bidangusaha',
											// 'bidangusaha',
											// 'nomorkartukuning',
											// 'telpongenggam',
											// 'email',
											// 'ipk',
											// 'tb',
											// 'bb',
											 // array('name'=>'kd_operator','value'=>$model->kd_operator == 0 ? "Tidak diset" : $model->Operator->username),
											// 'migrasi',
											// 'waktumigrasi',
											'waktuupdate',
											),
											)); ?>

										</section>

										<STYLE>
										th{width:250px;}
										</STYLE>

