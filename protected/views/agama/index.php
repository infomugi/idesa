<?php
/* @var $this AgamaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agamas',
	);

$this->pageTitle='Daftar Agama';
?>



<?php echo CHtml::link('Tambah Agama',
	array('tambah'),
	array('class' => 'btn btn-success btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Agama',
		array('kelola'),
		array('class' => 'btn btn-success btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

