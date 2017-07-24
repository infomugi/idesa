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

	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Tambah',\n\t array('create'),\n array('class' => 'md-btn md-btn-primary btn btn-primary btn-flat','title'=>'Add $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Daftar',\n\t array('index'),\n array('class' => 'md-btn md-btn-primary btn btn-primary btn-flat', 'title'=>'List $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Kelola',\n\t array('admin'),\n array('class' => 'md-btn md-btn-primary btn btn-primary btn-flat','title'=>'Manage $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Edit', \n\t array('update', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t), array('class' => 'md-btn md-btn-primary btn btn-info btn-flat', 'title'=>'Edit $this->modelClass'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Hapus', \n\t array('delete', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t),  array('class' => 'md-btn md-btn-primary btn btn-danger btn-flat', 'title'=>'Hapus $this->modelClass'));\n ?>\n"; ?>

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

