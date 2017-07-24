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
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
	);\n";
	?>

	$this->pageTitle='Manage <?php echo $this->modelClass; ?>';
	?>

	<span class="visible-xs">

		<?php echo "<?php echo CHtml::link('<i class='fa fa-plus'></i>',\n array('create'),\n array('class' => 'btn btn-primary btn-md'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('<i class='fa fa-tasks'></i>',\n array('index'),\n array('class' => 'btn btn-primary btn-md'));\n ?>\n"; ?>

	</span> 

	<span class="hidden-xs">

		<?php echo "<?php echo CHtml::link('Add $this->modelClass',\n array('create'),\n array('class' => 'btn btn-primary btn-flat'));\n ?>\n"; ?>
		<?php echo "<?php echo CHtml::link('List $this->modelClass',\n array('index'),\n array('class' => 'btn btn-primary btn-flat'));\n ?>\n"; ?>

	</span>	

	<HR>

		<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
		'dataProvider'=>$model->search(),
		//'filter'=>$model,
		'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
		'columns'=>array(

		array(
		'header'=>'No',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
		'htmlOptions'=>array('width'=>'10px', 
		'style' => 'text-align: center;')),

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
				'template'=>'{view}',
				'buttons'=>array(
					'view'=>
					array(
						'url'=>'Yii::app()->createUrl("<?php echo $this->modelClass; ?>/view", array("id"=><?php echo "\$data->{$this->tableSchema->primaryKey}"; ?>))',
						'options'=>array(
							'ajax'=>array(
								'type'=>'POST',
								'url'=>"js:$(this).attr('href')",
								'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
								),
							),
						),
					),
				),
		),
		)); ?>



		<!-- Modal -->
		<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Popup Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>View</strong> <?php echo "$this->modelClass"; ?></h4>
					</div>
					<!-- Popup Content -->
					<div class="modal-body">
						<p>Details</p>
					</div>
					<!-- Popup Footer -->
					<div class="modal-footer">
						<BR>
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>


