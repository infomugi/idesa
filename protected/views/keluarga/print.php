<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
// 

$this->breadcrumbs=array(
	'Keluarga'=>array('daftar'),
	$model->kd_umpi,
	);

$this->pageTitle='Detail Keluarga - '.$model->kd_umpi;

$dataKecamatan = Kecamatan::model()->findByPk($model->Desa->kd_kecamatan);
$dataProvider=new CActiveDataProvider('Responden',array('criteria'=>array('condition'=>'kd_umpi='.$model->kd_umpi)));
?>

<section class="col-xs-12">
	<H3>ISIAN DATA - TIDAK BEKERJA                          
		<?php echo CHtml::image(Yii::app()->request->baseurl.'/images/kab_bandung.png',"Foto Profile",
		array("style"=>"width:150px;", "class"=>"pull-right")); ?>
	</H3>
	<TABLE class="table table-bordered">
		<TR>
			<TD>Nama KK</TD>
			<TD><B><?php echo $model->no_kk; ?></B></TD>
			<TD>Tanggal Update</TD>
			<TD style="background:#F5f5f5;"><B><?php echo $model->waktuupdate; ?></B></TD>
		</TR>
		<TR>
			<TD>NIK</TD>
			<TD><B><?php echo $model->no_kk; ?></B></TD>
			<TD colspan="2"></TD>
		</TR>			
		<TR>
			<TD>Kecamatan</TD>
			<TD><B><?php echo $dataKecamatan->nama; ?></B></TD>
			<TD>Alamat</TD>
			<TD><B><?php echo $model->alamat; ?></B></TD>
		</TR>
		<TR>
			<TD>Desa</TD>
			<TD><B><?php echo $model->Desa->nama; ?></B></TD>
			<TD>RT / RW</TD>
			<TD><B><?php echo $model->rt; ?> / <?php echo $model->rw; ?></B></TD>
		</TR>	
		<TR>
			<TD colspan="2"></TD>
			<TD>Telp Rumah</TD>
			<TD><B><?php echo $model->telponrumah; ?></B></TD>
		</TR>						
	</TABLE>

	<H4>Data Anggota Keluarga</H4>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'responden-grid',
		'dataProvider'=>$dataProvider,
		'summaryText'=>'',
		'itemsCssClass' => 'table table-bordered',
		'columns'=>array(

			array(
				'header'=>'No',
				'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
				'htmlOptions'=>array('width'=>'10px', 
					'style' => 'text-align: center;')),

			array('header'=>'Nama','value'=>'$data->nama','htmlOptions'=>array('width'=>'110px')),
			array('header'=>'SDRT','value'=>'$data->Saudara->nama'),
			array('header'=>'Tgl Lahir','value'=>'$data->tgllahir'),
			array('header'=>'Umur','value'=>'Responden::model()->countBirth($data->tgllahir)'),
			array('header'=>'L/P','value'=>'Responden::model()->jeniskelamin($data->jeniskelamin)'),
			array('header'=>'Status Nikah','value'=>'$data->Statusnikah->nama'),
			array('header'=>'Agama','value'=>'$data->Agama->nama'),
			array('header'=>'Pendidikan Terakhir','value'=>'$data->Pendidikan->nama'),

			),
			)); ?>

		</section>
