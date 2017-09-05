<?php
/* @var $this SktmController */
/* @var $data Sktm */
?>


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
					