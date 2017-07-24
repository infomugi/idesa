<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $data <?php echo $this->getModelClass(); ?> */
?>

	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php
				echo "\t<?php echo CHtml::link(CHtml::encode(\$data->{$this->tableSchema->primaryKey}), array('view', 'id'=>\$data->{$this->tableSchema->primaryKey})); ?>\n\t<br />\n\n";
				?>
				
			</div>
			<div class="box-body">

				<?php
				$count=0;
				foreach($this->tableSchema->columns as $column)
				{
					if($column->isPrimaryKey)
						continue;
					if(++$count==7)
						echo "\t<?php /*\n";
					echo "\t<b><?php echo CHtml::encode(\$data->getAttributeLabel('{$column->name}')); ?>:</b>\n";
					echo "\t<?php echo CHtml::encode(\$data->{$column->name}); ?>\n\t<br />\n\n";
				}
				if($count>=7)
					echo "\t*/ ?>\n";
				?>        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
<HR>