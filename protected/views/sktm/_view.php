<?php
/* @var $this SktmController */
/* @var $data Sktm */
?>
<div class="col-xs-4">

	<div class="alert <?php echo Kepindahan::model()->alert($data->status); ?>">
		<?php echo Kepindahan::model()->status($data->status); ?>
	</div>

	<div class="panel panel-default panel-profile clearfix">
		<div class="panel-heading col-md-12 col-sm-5">
			<div class="row">
				<div class="avatar col-md-12">
					<center>
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/1.png" class="img-responsive img-circle text-center">
					</center>
				</div>
				<div class="avatar-info col-md-12">
					<h4>
						<?php echo CHtml::link(CHtml::encode("No. Surat SKTM ".$data->no_sktm), array('view', 'id'=>$data->id_sktm)); ?>
					</h4>
					
					<span><?php echo $data->nama_anak; ?></span>

					<?php if($data->status==0): ?>

						<?php echo CHtml::link(CHtml::encode("Setujui SKTM"), array('terima', 'id'=>$data->id_sktm),array('class'=>'btn btn-success')); ?>
						<?php echo CHtml::link(CHtml::encode("Tolak SKTM"), array('tolak', 'id'=>$data->id_sktm),array('class'=>'btn btn-danger')); ?>

					<?php endif; ?>

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
