<?php
/* @var $this Status NikahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Nikah',
	);

	$this->pageTitle='Daftar Status Nikah';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Status Nikah',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Status Nikah',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>