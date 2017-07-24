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

	<section class="col-xs-12">

		<?php echo "<?php echo CHtml::link('Tambah $this->modelClass',\n array('tambah'),\n array('class' => 'btn btn-success btn-flat'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('Kelola $this->modelClass',\n array('kelola'),\n array('class' => 'btn btn-success btn-flat'));\n ?>\n"; ?>

		<HR>

			<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>