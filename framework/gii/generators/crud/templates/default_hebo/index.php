<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Daftar <?php echo $this->getModelClass(); ?>';
<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
	array('label'=>'Tambah <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'Kelola <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Tambah $this->modelClass',\n array('create'),\n array('class' => 'btn btn-primary btn-flat'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Kelola $this->modelClass',\n array('admin'),\n array('class' => 'btn btn-primary btn-flat'));\n ?>\n"; ?>

	</span>	

	<HR>
<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
