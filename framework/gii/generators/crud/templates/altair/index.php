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

	$this->pageTitle='Daftar <?php echo $this->modelClass; ?>';
	?>

	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Tambah',\n\t array('create'),\n array('class' => 'md-btn md-btn-primary btn btn-primary btn-flat','title'=>'Add $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Daftar',\n\t array('index'),\n array('class' => 'md-btn md-btn-primary btn btn-primary btn-flat', 'title'=>'List $this->modelClass'));\n\t\t ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Kelola',\n\t array('admin'),\n array('class' => 'md-btn md-btn-primary btn btn-primary btn-flat','title'=>'Manage $this->modelClass'));\n\t\t ?>\n"; ?>

	</span>

	<HR>

		<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>

