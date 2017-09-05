<?php
/* @var $this SktmController */
/* @var $data Sktm */
?>


<div class="alert <?php echo Kepindahan::model()->alert($data->status); ?>">
	Status Dokumen  <?php echo Kepindahan::model()->status($data->status); ?>
</div>


<h4>
	<?php echo CHtml::link(CHtml::encode("No. Surat SKTM ".$data->no_sktm), array('view', 'id'=>$data->id_sktm)); ?>
</h4>


<div class="profile-about-summary">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$data,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			'tempat_lahir',
			'tanggal_lahir',
			'tingkat',
			'instansi',
			),
			)); ?>

			<h4>Riwayat Cetak Dokumen</h4>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(


					array(
						'name'=>'print_deskripsi',
						'value'=>$data->print_deskripsi,
						'visible'=>$data->print_by!=0,
						),


					),
					)); ?>
				</div>


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

