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
		</div>
		
		