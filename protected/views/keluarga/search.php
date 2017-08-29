<?php
/* @var $this SktmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sktms',
	);

$this->pageTitle='Pencarian Surat Pengantar Pindah';
?>


<div class="wrapper-page animated fadeInDown">
	<div class="panel panel-color panel-success">
		<div class="panel-heading"> 
			<h3 class="text-center m-t-10"> <strong>Pelayanan Pembuatan Surat Pengantar KK</strong> </h3>
		</div> 
		<center>
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/login.png" width="120px" style="padding-top:30px" class="img-responsive text-center">
		</center>
		<div class="form-horizontal m-t-40">


			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view_search',
				'summaryText'=>'',
				)); ?>



			</div>

		</div>
	</div>    





