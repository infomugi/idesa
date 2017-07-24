<?php
/* @var $this KecamatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kecamatan',
	);

	$this->pageTitle='Daftar Kecamatan';
	
	$jumlah_kecamatan =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM Kecamatan")->queryScalar();
	$tidak_terdaftar =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM perusahaan where kecamatan=''")->queryScalar();

	?>

	<div class="alert alert-warning">
			Total Kecamatan di Kab. Bandung <b><?php echo $jumlah_kecamatan; ?></b> Wilayah, ada sekitar <b><?php echo $tidak_terdaftar; ?></b> Perusahaan tidak terdaftar.
		</div>


			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

