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
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
	);\n";
	?>

	$this->pageTitle='Detail <?php echo $this->modelClass; ?>';
	?>

	<span class="visible-xs">

		<?php echo "<?php echo CHtml::link('<i class='fa fa-plus'></i>',\n\t array('create'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Add $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-tasks'></i>',\n\t array('index'),\n array('class' => 'btn btn-primary btn-flat', 'title'=>'List $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-table'></i>',\n\t array('admin'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Manage $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-edit'></i>', \n\t array('update', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit $this->modelClass'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-remove'></i>', \n\t array('delete', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus $this->modelClass'));\n ?>\n"; ?>

	</span> 

	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Add',\n\t array('create'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Add $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('List',\n\t array('index'),\n array('class' => 'btn btn-primary btn-flat', 'title'=>'List $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Manage',\n\t array('admin'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Manage $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Edit', \n\t array('update', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit $this->modelClass'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Delete', \n\t array('delete', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus $this->modelClass'));\n ?>\n"; ?>

	</span>

	<HR>

		<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			<?php
			foreach($this->tableSchema->columns as $column)
				echo "\t\t'".$column->name."',\n";
			?>
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

