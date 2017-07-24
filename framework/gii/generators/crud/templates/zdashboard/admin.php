<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Kelola',
	);\n";
	?>

	$this->pageTitle='Kelola <?php echo $this->modelClass; ?>';
	?>

	<section class="col-xs-12">

		<?php echo "<?php echo CHtml::link('Tambah $this->modelClass',\n array('create'),\n array('class' => 'btn btn-success btn-flat'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Daftar $this->modelClass',\n array('index'),\n array('class' => 'btn btn-success btn-flat'));\n ?>\n"; ?>

		<HR>

			<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

			<?php
			$count=0;
			foreach($this->tableSchema->columns as $column)
			{
				if(++$count==7)
					echo "\t\t/*\n";
				echo "\t\t'".$column->name."',\n";
			}
			if($count>=7)
				echo "\t\t*/\n";
			?>
			array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
			'style' => 'text-align: center;'),
			),
			),
			)); ?>
			
		</section>