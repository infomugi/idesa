<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('daftar'),
	'Top',
	);

$this->pageTitle='Pengguna Aktif';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah User',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar User',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>
			<div class="alert alert-info">Setiap Pengguna akan diberikan point apabila login ke sistem dan menambah data keluarga tidak bekerja.</div>
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'user-grid',
					'dataProvider'=>$model->search(),
					'itemsCssClass' => 'table dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'username',
						array('header'=>'Jumlah Point','value'=>'Yii::app()->db->createCommand("SELECT SUM(point) FROM activities WHERE user_id=".$data->id_user."")->queryScalar()'),

						),
						)); ?>

					</section>