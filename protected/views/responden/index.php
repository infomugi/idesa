<?php
/* @var $this RespondenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Respondens',
	);

	$this->pageTitle='Daftar Responden';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Kelola Responden',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>