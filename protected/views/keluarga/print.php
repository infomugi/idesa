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
	<CENTER>
		<H5>PEMERINTAH KABUPATEN BANDUNG<H5>
			<H5>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL<H5>
				<H5>FORMULIR BIODATA PENDUDUK WARGA NEGARA<H5>
				</CENTER>
				<TABLE class="gridtable">
					<TR>
						<TD>Nomor KK</TD>
						<TD><B><?php echo $model->no_kk; ?></B></TD>
						<TD>Provinsi</TD>
						<TD><B>32</B></TD>
						<TD><B>JAWA BARAT</B></TD>
					</TR>
					<TR>
						<TD>Nama Kepala Keluarga</TD>
						<TD><B><?php echo $model->nama; ?></B></TD>
						<TD>Kabupaten</TD>
						<TD>4</TD>
						<TD><B>BANDUNG</B></TD>
					</TR>			
					<TR>
						<TD>Alamat</TD>
						<TD><B><?php echo $model->alamat; ?></B></TD>
						<TD>Kecamatan</TD>
						<TD>14</TD>
						<TD><B><?php echo $dataKecamatan->nama; ?></B></TD>
					</TR>
					<TR>
						<TD>Kode Pos</TD>
						<TD>
							.................
							RT <B><?php echo $model->rt; ?></B>
							RW <B><?php echo $model->rw; ?></B>
							
						</TD>
						<TD>Desa</TD>
						<TD>2004</TD>
						<TD><B><?php echo $model->Desa->nama; ?></B></TD>
					</TR>	
					<TR>
						<TD>Jumlah Anggota Keluarga</TD>
						<TD>.................</TD>
						<TD>Flag</TD>
						<TD>.................</TD>
					</TR>						
				</TABLE>

				<H4>Data Keluarga</H4>
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'responden-grid',
					'dataProvider'=>$dataProvider,
					'summaryText'=>'',
					'itemsCssClass' => 'gridtable',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'5px', 
								'style' => 'text-align: center;')),

						array('header'=>'Flag','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Nama Lengkap','value'=>'$data->nama','htmlOptions'=>array('width'=>'150px')),
						array('header'=>'Gelar','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Enrolment','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Status e-KTP','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'NIK','value'=>'$data->nik','htmlOptions'=>array('width'=>'110px')),
						array('header'=>'Alamat Sebelumnya','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'No Paspor','value'=>'','htmlOptions'=>array('width'=>'20px')),


						),
						)); ?>


				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'responden-grid',
					'dataProvider'=>$dataProvider,
					'summaryText'=>'',
					'itemsCssClass' => 'gridtable',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						array('header'=>'Jenis Kelamin','value'=>'Responden::model()->jeniskelamin($data->jeniskelamin)'),
						array('header'=>'Tempat Lahir','value'=>''),
						array('header'=>'Tanggal Lahir','value'=>'$data->tgllahir'),
						array('header'=>'Umur','value'=>'Responden::model()->countBirth($data->tgllahir)'),
						array('header'=>'Akta Lahir','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Nomor Akta Kelahiran','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Gol Darah','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Agama','value'=>'$data->Agama->nama'),
						array('header'=>'Kepercayaan','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Status Kawin','value'=>'$data->Statusnikah->nama'),
						array('header'=>'Akta Kawin','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Nomor Akta Kawin','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Tgl Kawin','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Akta Cerai','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Nomor Akta Cerai','value'=>'','htmlOptions'=>array('width'=>'20px')),
						
						
						),
						)); ?>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'responden-grid',
					'dataProvider'=>$dataProvider,
					'summaryText'=>'',
					'itemsCssClass' => 'gridtable',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),


						array('header'=>'Hub. Kel','value'=>'$data->Saudara->nama'),
						array('header'=>'Kelainan Fisik','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Peny Cacat','value'=>'','htmlOptions'=>array('width'=>'20px')),
						array('header'=>'Pendidikan Terakhir','value'=>'$data->Pendidikan->nama'),
						array('header'=>'N I K Ibu','value'=>''),
						array('header'=>'Nama Lengkap Ibu','value'=>''),
						array('header'=>'NIK Ayah','value'=>''),
						array('header'=>'Nama Lengkap Ayah','value'=>''),

						),
						)); ?>

						<div style="width:200px;margin-top:15px;">
							
							<TABLE class="gridtable">

								<TR>
									<TD>Nama Ketua RW</TD>
									<TD>
										RT <B><?php echo $model->rt; ?></B>
									</TD>

								</TR>
								<TR>

									<TD>Nama Ketua RT</TD>
									<TD>
										RW <B><?php echo $model->rw; ?></B>
									</TD>

								</TR>	

							</TABLE>
						</div>


					</section>
