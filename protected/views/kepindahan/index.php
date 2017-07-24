<?php
/* @var $this KepindahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kepindahans',
	);

	$this->pageTitle='Daftar Kepindahan';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Kepindahan',
 array('tambah'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Kepindahan',
 array('kelola'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>