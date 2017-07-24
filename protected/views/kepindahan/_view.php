<?php
/* @var $this KepindahanController */
/* @var $data Kepindahan */
?>

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
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/2.png" class="img-responsive img-circle text-center">
					</center>
				</div>
				<div class="avatar-info col-md-12">
					<h4><?php echo $data->nama_kk; ?></h4>
					<span>No. Surat Pindah <?php echo $data->no_kk; ?></span>

					<?php echo CHtml::link(CHtml::encode("Setujui Surat Pindah"), array('view', 'id'=>$data->id_kepindahan),array('class'=>'btn btn-success')); ?>
					<?php echo CHtml::link(CHtml::encode("Tolak Surat Pindah"), array('view', 'id'=>$data->id_kepindahan),array('class'=>'btn btn-danger')); ?>

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
							'alamat',
							'kode_pos',
							'alasan_pindah',
							'alamat_tujuan',
							),
							)); ?>
						</div>

					</div>
				</div>
			</div>
			
		</div>

