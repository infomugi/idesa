<?php
/* @var $this JadwalController */
/* @var $data Jadwal */
?>

<div class="col-xs-12">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

			<?php echo CHtml::link(CHtml::encode($data->Kegiatan->nama . " - " . Jadwal::model()->jalur($data->jalur)), array('jadwal/view', 'id'=>$data->id_jadwal)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						array(
							'name'=>'petugas_id',
							'value'=>$data->Petugas->namaLengkap,
							),											
						array(
							'name'=>'pic_id',
							'value'=>$data->PIC->namaLengkap,
							),

						'tanggal',
						'waktu',

						array(    
							'name'=>'status',
							'type'=>'raw', 
							'value'=>Divisi::model()->status($data->status),
							),

						),
						)); ?>


					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
