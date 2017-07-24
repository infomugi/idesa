<?php
/* @var $this SdrtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sdrts',
	);

	$this->pageTitle='Daftar Sdrt';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Sdrt',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Sdrt',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>