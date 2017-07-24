<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
	);\n";
	?>

	$this->pageTitle='List <?php echo $this->modelClass; ?>';
	?>

	<span class="visible-xs">

		<?php echo "<?php echo CHtml::link('<i class='fa fa-plus'></i>',\n\t array('create'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Add $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-tasks'></i>',\n\t array('index'),\n array('class' => 'btn btn-primary btn-flat', 'title'=>'List $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-table'></i>',\n\t array('admin'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Manage $this->modelClass'));\n\t\t ?>\n"; ?>

	</span> 

	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Add',\n\t array('create'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Add $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('List',\n\t array('index'),\n array('class' => 'btn btn-primary btn-flat', 'title'=>'List $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Manage',\n\t array('admin'),\n array('class' => 'btn btn-primary btn-flat','title'=>'Manage $this->modelClass'));\n\t\t ?>\n"; ?>

	</span>

	<HR>

		<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>

