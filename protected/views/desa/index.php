<?php
/* @var $this DesaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Desas',
	);

	$this->pageTitle='Daftar Desa';
	?>


		<?php echo CHtml::link('Tambah Desa',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Desa',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

