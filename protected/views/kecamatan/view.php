<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatan'=>array('daftar'),
	$model->nama,
	);

$this->pageTitle='Data Kecamatan - '.$model->nama;
?>

<?php echo CHtml::link('List',
	array('daftar'),
	array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Kecamatan'));
	?>
	<?php echo CHtml::link('Kelola',
		array('kelola'),
		array('class' => 'btn btn-success btn-flat','title'=>'Kelola Kecamatan'));
		?>

		<HR> 

			