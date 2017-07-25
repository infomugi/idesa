<?php
/* @var $this KeluargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keluargas',
	);

$this->pageTitle='Report Daftar Keluarga';
?>


<?php $this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => $this->pageTitle.'.xls',
	'columns'=>array(

		'kd_umpi',
		'no_kk',
		'nama',
		'alamat',
		'rt',
		'rw',
		'telponrumah',
		
		),
		)); ?>

		<div class="alert alert-success">
			<H3>Data <?php echo $this->pageTitle; ?> ke Excel, Download <B><a href="<?php echo Yii::app()->baseUrl; ?>/<?php echo $this->pageTitle; ?>.xls"/>Disini</a></B></H3>
		</div>