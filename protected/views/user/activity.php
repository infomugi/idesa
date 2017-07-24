<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('daftar'),
	'Top',
	);

	$this->pageTitle='Log Aktifitas Pengguna';
	?>

	<section class="col-xs-12">

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'user-grid',
			'dataProvider'=>$dataProvider,
			'itemsCssClass' => 'table dataTable table-hover',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),
			array('name'=>'user_id','value'=>'$data->Member->username'),
			array('name'=>'created_date','value'=>'$data->created_date'),
			array('name'=>'activity_id','value'=>'Activities::model()->activityDescription($data->activity_id)'),
			'description',

			),
			)); ?>
			
		</section>