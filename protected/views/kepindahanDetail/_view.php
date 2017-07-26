<?php
/* @var $this KepindahanDetailController */
/* @var $data KepindahanDetail */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_kepindahan_detail), array('view', 'id'=>$data->id_kepindahan_detail)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('kepindahan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kepindahan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?>:</b>
	<?php echo CHtml::encode($data->nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_lengkap')); ?>:</b>
	<?php echo CHtml::encode($data->nama_lengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masa_berlaku_ktp')); ?>:</b>
	<?php echo CHtml::encode($data->masa_berlaku_ktp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sdrt_id')); ?>:</b>
	<?php echo CHtml::encode($data->sdrt_id); ?>
	<br />

        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
