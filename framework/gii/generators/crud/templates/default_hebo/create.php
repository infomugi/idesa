<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
$this->pageTitle='Tambah <?php echo $this->getModelClass(); ?>';

$this->menu=array(
	array('label'=>'Daftar <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'Kelola <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
