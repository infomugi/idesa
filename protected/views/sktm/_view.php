<?php
/* @var $this SktmController */
/* @var $data Sktm */
?>
<div class="col-xs-4">

	<div class="panel panel-default panel-profile clearfix">
		<div class="panel-heading col-md-12 col-sm-5">
			<div class="row">
				<div class="avatar col-md-12">
					<center>
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/1.png" class="img-responsive img-circle text-center">
					</center>
				</div>
				<div class="avatar-info col-md-12">
					<h4>No. Surat SKTM <?php echo $data->no_sktm; ?></h4>
					<span><?php echo $data->nama_anak; ?></span>

					<?php echo CHtml::link(CHtml::encode("Setujui SKTM"), array('view', 'id'=>$data->id_sktm),array('class'=>'btn btn-success')); ?>
					<?php echo CHtml::link(CHtml::encode("Tolak SKTM"), array('view', 'id'=>$data->id_sktm),array('class'=>'btn btn-danger')); ?>

				</div>
			</div>
		</div>
		<div class="panel-body no-padding col-md-12 col-sm-7">
			<div class="profile-about panel-body-section">

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

					</div>
				</div>
			</div>

		</div>
