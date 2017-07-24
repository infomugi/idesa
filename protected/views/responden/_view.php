<?php
/* @var $this RespondenController */
/* @var $data Responden */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->kd_responden), array('view', 'id'=>$data->kd_responden)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('kd_umpi')); ?>:</b>
	<?php echo CHtml::encode($data->kd_umpi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sdrt')); ?>:</b>
	<?php echo CHtml::encode($data->sdrt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor')); ?>:</b>
	<?php echo CHtml::encode($data->nomor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_tempatlahir')); ?>:</b>
	<?php echo CHtml::encode($data->kd_tempatlahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempatlahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempatlahir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgllahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgllahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tg')); ?>:</b>
	<?php echo CHtml::encode($data->tg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bl')); ?>:</b>
	<?php echo CHtml::encode($data->bl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('th')); ?>:</b>
	<?php echo CHtml::encode($data->th); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jeniskelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jeniskelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_statusnikah')); ?>:</b>
	<?php echo CHtml::encode($data->kd_statusnikah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->kd_pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_jurusanpendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->kd_jurusanpendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_agama')); ?>:</b>
	<?php echo CHtml::encode($data->kd_agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->kd_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_bidangusaha')); ?>:</b>
	<?php echo CHtml::encode($data->kd_bidangusaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bidangusaha')); ?>:</b>
	<?php echo CHtml::encode($data->bidangusaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomorkartukuning')); ?>:</b>
	<?php echo CHtml::encode($data->nomorkartukuning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?>:</b>
	<?php echo CHtml::encode($data->nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telpongenggam')); ?>:</b>
	<?php echo CHtml::encode($data->telpongenggam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk')); ?>:</b>
	<?php echo CHtml::encode($data->ipk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb')); ?>:</b>
	<?php echo CHtml::encode($data->tb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bb')); ?>:</b>
	<?php echo CHtml::encode($data->bb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktuupdate')); ?>:</b>
	<?php echo CHtml::encode($data->waktuupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_operator')); ?>:</b>
	<?php echo CHtml::encode($data->kd_operator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('migrasi')); ?>:</b>
	<?php echo CHtml::encode($data->migrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktumigrasi')); ?>:</b>
	<?php echo CHtml::encode($data->waktumigrasi); ?>
	<br />

	*/ ?>
        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
