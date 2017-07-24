<?php
/* @var $this KeluargaController */
/* @var $data Keluarga */
// $dataKecamatan = Kecamatan::model()->findByPk($data->Desa->kd_kecamatan);
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode("Kode Keluarga - ".$data->kd_umpi), array('view', 'id'=>$data->kd_umpi)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<TABLE class="table table-bordered">
					<TR>
						<TD>Tanggal Update</TD>
						<TD><B class="format-date"><?php echo $data->waktuupdate; ?></B></TD>
					</TR>					
					<TR>
						<TD>No KK</TD>
						<TD><B><?php echo $data->no_kk; ?></B></TD>
					</TR>			
<!-- 					<TR>
						<TD>Kecamatan</TD>
						<TD><B><?php echo $dataKecamatan->nama; ?></B></TD>
					</TR> -->
					<TR>
						<TD>Alamat</TD>
						<TD><B><?php echo $data->alamat; ?></B></TD>
					</TR>
<!-- 					<TR>
						<TD>Desa</TD>
						<TD><B><?php echo $data->Desa->nama; ?></B></TD>
					</TR> -->
					<TR>	
						<TD>RT / RW</TD>
						<TD><B><?php echo $data->rt; ?> / <?php echo $data->rw; ?></B></TD>
					</TR>
					<TR>
						<TD>Telp Rumah</TD>
						<TD><B><?php echo $data->telponrumah; ?></B></TD>
					</TR>						
				</TABLE>

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
