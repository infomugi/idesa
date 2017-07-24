<?php
/* @var $this KecamatanController */
/* @var $data Kecamatan */

$besar =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$data->nama."' AND klasifikasi='Besar'")->queryScalar();
$menengah =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$data->nama."' AND klasifikasi='Menengah'")->queryScalar();
$sedang =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$data->nama."' AND klasifikasi='Sedang'")->queryScalar();
$kecil =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$data->nama."' AND klasifikasi='Kecil'")->queryScalar();
$sangatkecil =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$data->nama."' AND klasifikasi='< Kecil'")->queryScalar();

?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->kd_kecamatan)); ?>
				<br />

				
			</div>

			<div class="box-body">
				
				<div class="panel panel-default panel-stats">
					<div class="panel-heading">
						<h3 class="panel-title">Klasifikasi Perusahaan di Kecamatan <?php echo $data->nama; ?></h3>
					</div>
					<div class="panel-body no-padding">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="panel-data">
									<?php echo $besar; ?>
									<span>Besar</span>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="panel-data">
									<?php echo $sedang; ?>
									<span>Sedang</span>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="panel-data">
									<?php echo $menengah; ?>
									<span>Menengah</span>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="panel-data">
									<?php echo $kecil; ?>
									<span>Kecil</span>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="panel-data">
									<?php echo $sangatkecil; ?>
									<span>< Kecil</span>
								</div>
							</div>

						</div>


					</div>
					<div class="panel-footer clearfix hidden-print">
						<span class="pull-left">
							Update Terakhir: <?php echo date('d-m-Y'); ?>
						</span>
					</div>
				</div>

			</div>
			
		</div><!-- /.box -->
	</div>
