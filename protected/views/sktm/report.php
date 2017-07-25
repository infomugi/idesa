<?php
/* @var $this KeluargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keluargas',
	);

$this->pageTitle='Report SKTM';
?>


<?php $this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => $this->pageTitle.'.xls',
	'columns'=>array(

		'no_sktm',
		'nama_anak',
		'tingkat',
		'instansi',
		'tempat_lahir',
		'tanggal_lahir',


		'nama_ayah',
		'umur_ayah',
		array('name'=>'agama_ayah','value'=>'$data->AgamaAyah->nama'),
		array('name'=>'pekerjaan_ayah','value'=>'$data->PekerjaanAyah->nama'),
		'alamat_ayah',

		'nama_ibu',
		'umur_ibu',
		array('name'=>'agama_ibu','value'=>'$data->AgamaIbu->nama'),
		array('name'=>'pekerjaan_ibu','value'=>'$data->PekerjaanIbu->nama'),
		'alamat_ibu',
		
		),
		)); ?>

		<div class="alert alert-success">
			<H3>Data <?php echo $this->pageTitle; ?> ke Excel, Download <B><a href="<?php echo Yii::app()->baseUrl; ?>/<?php echo $this->pageTitle; ?>.xls"/>Disini</a></B></H3>
		</div>