<?php
/* @var $this KeluargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keluargas',
	);

$this->pageTitle='Report Surat Pindah';
?>


<?php $this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => $this->pageTitle.'.xls',
	'columns'=>array(

		'no_kk',
		'nama_kk',
		'alamat',
		'kode_pos',
		'alasan_pindah',
		'alamat_tujuan',

		array('name'=>'provinsi_id','value'=>'$data->Provinsi->name == NULL ? "-" : $data->Provinsi->name'),
		array('name'=>'kabkota_id','value'=>'$data->Kota->name == NULL ? "-" : $data->Kota->name'),
		array('name'=>'kecamatan_id','value'=>'$data->Kecamatan->name == NULL ? "-" : $data->Kecamatan->name'),
		array('name'=>'desa_id','value'=>'$data->Desa->name == NULL ? "-" : $data->Desa->name'),

		array('name'=>'jenis_kepindahan','value'=>'Kepindahan::model()->jenis($data->jenis_kepindahan)'),
		array('name'=>'status_kk_yang_tidak_pindah','value'=>'Kepindahan::model()->statuskk($data->status_kk_yang_tidak_pindah)'),
		array('name'=>'status_kk_pindah','value'=>'Kepindahan::model()->statuskkpindah($data->status_kk_pindah)'),
		),
		)); ?>

		<div class="alert alert-success">
			<H3>Data <?php echo $this->pageTitle; ?> ke Excel, Download <B><a href="<?php echo Yii::app()->baseUrl; ?>/<?php echo $this->pageTitle; ?>.xls"/>Disini</a></B></H3>
		</div>