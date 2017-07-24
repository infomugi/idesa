<?php
/* @var $this JurusanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jurusans',
	);

	$this->pageTitle='Daftar Jurusan';
	?>


		<?php echo CHtml::link('Tambah Jurusan',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Jurusan',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

