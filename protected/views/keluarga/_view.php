<?php
/* @var $this KeluargaController */
/* @var $data Keluarga */
// $dataKecamatan = Kecamatan::model()->findByPk($data->Desa->kd_kecamatan);
?>

<div class="col-xs-4">

	<div class="panel panel-default panel-profile clearfix">
		<div class="panel-heading col-md-12 col-sm-5">
			<div class="row">
				<div class="avatar col-md-12">
					<center>
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/3.png" class="img-responsive img-circle text-center">
					</center>
				</div>
				<div class="avatar-info col-md-12">
					<h4><?php echo $data->nama; ?></h4>
					<span>No. Surat Pengantar KK <?php echo $data->kd_umpi; ?></span>

					<?php echo CHtml::link(CHtml::encode("Setujui Pengantar KK"), array('view', 'id'=>$data->kd_umpi),array('class'=>'btn btn-success')); ?>
					<?php echo CHtml::link(CHtml::encode("Tolak Pengantar KK"), array('view', 'id'=>$data->kd_umpi),array('class'=>'btn btn-danger')); ?>

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
							array('label'=>'RT / RW','value'=>$data->rt . " / " . $data->rw),
							'telponrumah',
							),
							)); ?>
						</div>

					</div>
				</div>
			</div>
			
		</div>


