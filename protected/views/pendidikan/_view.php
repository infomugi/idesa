<?php
/* @var $this PendidikanController */
/* @var $data Pendidikan */
?>

<div class="col-xs-12 col-md-6 col-lg-3">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('kd_pendidikan')); ?>:</b>
				<?php echo CHtml::encode($data->kd_pendidikan); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
				<?php echo CHtml::encode($data->nama); ?>
				<br />

				

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
