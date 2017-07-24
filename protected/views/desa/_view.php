<?php
/* @var $this DesaController */
/* @var $data Desa */
?>

<div class="col-xs-12 col-md-6 col-lg-3">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->kd_desa)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
				<?php echo CHtml::encode($data->id); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('kd_kecamatan')); ?>:</b>
				<?php echo CHtml::encode($data->kd_kecamatan); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('mnemonic')); ?>:</b>
				<?php echo CHtml::encode($data->mnemonic); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
				<?php echo CHtml::encode($data->nama); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('KK2012')); ?>:</b>
				<?php echo CHtml::encode($data->KK2012); ?>
				<br />

				

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
