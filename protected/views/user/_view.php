<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="col-xs-4">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title" style="text-transform:capitalize;">

				<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->id_user)); ?>
				<br />

				
			</div>
			<div class="box-body">
<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$data,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								// 'id_user',
								// 'password',
								// 'date_create',
								'username',
								// 'email',
								array('label'=>'Level Akses','value'=>$data->level == 2 ? "TKS" : "Administrator"),
								array('label'=>'Total Point','value'=>Yii::app()->db->createCommand("SELECT SUM(point) FROM activities WHERE user_id=".$data->id_user."")->queryScalar()),
								),
								)); ?>



			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
