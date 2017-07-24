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


	<section class="col-xs-12">

		<?php echo "<?php echo CHtml::link('Tambah',\n\t array('create'),\n array('class' => 'btn btn-success btn-flat','title'=>'Tambah $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('List',\n\t array('index'),\n array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Kalola',\n\t array('admin'),\n array('class' => 'btn btn-success btn-flat','title'=>'Kelola $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Edit', \n\t array('update', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit $this->modelClass'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Hapus', \n\t array('delete', 'id'=>\$model->{$this->tableSchema->primaryKey},\n\t\t),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus $this->modelClass'));\n ?>\n"; ?>

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

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

