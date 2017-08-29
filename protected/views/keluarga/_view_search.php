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
		</div>
		
		