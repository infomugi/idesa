<?php
/* @var $this LevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Levels',
	);

	$this->pageTitle='Daftar Level';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Level',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Level',
 array('admin'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>