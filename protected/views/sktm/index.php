<?php
/* @var $this SktmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sktms',
	);

$this->pageTitle='Daftar SKTM';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah SKTM',
		array('tambah'),
		array('class' => 'btn btn-info btn-flat'));
		?>
		<?php echo CHtml::link('Kelola SKTM',
			array('kelola'),
			array('class' => 'btn btn-info btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>