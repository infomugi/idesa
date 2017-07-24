<?php
/* @var $this KeluargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keluargas',
	);

$this->pageTitle='Daftar Keluarga';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pengantar KK',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Kelola Pengantar KK',
			array('kelola'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>