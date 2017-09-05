<?php
/* @var $this SktmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sktms',
	);

$this->pageTitle='Pencarian Surat Pengantar Pindah';
?>


<div class="wrapper-page animated fadeInDown">
	<div class="panel panel-color panel-success">
		<div class="panel-heading"> 
			<h3 class="text-center m-t-10"> <strong>Pelayanan Pembuatan Surat Pengantar KK</strong> </h3>
		</div> 
		<center>
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/login.png" width="120px" style="padding-top:30px" class="img-responsive text-center">
		</center>
		<div class="form-horizontal m-t-40">


			
			<div class="alert <?php echo Kepindahan::model()->alert($data->status); ?>">
				Status Dokumen  <?php echo Kepindahan::model()->status($data->status); ?>
			</div>


			<h4>
				<?php echo CHtml::link(CHtml::encode(ucwords($data->nama)), array('view', 'id'=>$data->kd_umpi)); ?>
			</h4>


			<div class="profile-about-summary">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'alamat',
						'kode_pos',
						array('label'=>'RT / RW','value'=>$data->rt . " / " . $data->rw),
						'telponrumah',
						),
						)); ?>

						<h4>Riwayat Cetak Dokumen</h4>
						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$data,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(

								array(
									'name'=>'print_by',
									'value'=>$data->print_by==0 ? "Belum di Cetak" : $data->PrintPetugas->namalengkap
									),


								array(
									'name'=>'print_deskripsi',
									'value'=>$data->print_deskripsi,
									'visible'=>$data->print_by!=0,
									),


								),
								)); ?>


								<h4>Riwayat Pengambilan Dokumen</h4>
								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$data,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										array(
											'name'=>'pengambilan_id',
											'value'=>$data->pengambilan_id==0 ? "Belum di Ambil" : $data->PengambilanPetugas->namalengkap
											),

										array(
											'name'=>'pengambilan_tanggal',
											'value'=>$data->pengambilan_tanggal,
											'visible'=>$data->pengambilan_id!=0,
											),

										array(
											'name'=>'pengambilan_oleh',
											'value'=>$data->pengambilan_oleh,
											'visible'=>$data->pengambilan_id!=0,
											),
										),
										)); ?>
									</div>



								</div>

							</div>
						</div>    





