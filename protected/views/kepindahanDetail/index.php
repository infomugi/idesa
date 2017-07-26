<?php
/* @var $this KepindahanDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kepindahan Details',
	);

	$this->pageTitle='Daftar KepindahanDetail';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah KepindahanDetail',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola KepindahanDetail',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>