<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
$this->pageTitle='Kelola <?php echo $this->getModelClass(); ?>';

$this->menu=array(
	array('label'=>'Tambah <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'Daftar <?php echo $this->modelClass; ?>', 'url'=>array('index')),
);
?>
	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Tambah $this->modelClass',\n array('create'),\n array('class' => 'btn btn-primary btn-flat'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Daftar $this->modelClass',\n array('index'),\n array('class' => 'btn btn-primary btn-flat'));\n ?>\n"; ?>

	</span>	

	<HR>

<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-striped table-hover',
	'columns'=>array(
	array(
		'header'=>'No',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
		),
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
			'class'=>'CButtonColumn',
		),
	),
)); ?>
