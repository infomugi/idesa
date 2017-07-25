<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'Kepindahan'=>array('daftar'),
	$model->id_kepindahan,
	);

$this->pageTitle='Detail Pengantar Surat Pindah';

?>
<!-- 
<div class="kotak">
	<div class="kiri">

		<p>PEMERINTAH PROVINSI JAWA BARAT</p>
		<p>PEMERINTAH KABUPATEN BANDUNG</p>
		<p>KECAMATAN : 14 PAMEUNGPEUK</p>
		<p>DESA / KELURAHAN : 2004 BOJONGKUNCI</p>

	</div>
	<div class="kanan">

	</div>
-->

<div class="kotak">
	<div class="line3"></div>
	<div class="line2"></div>
	<BR> <BR>
		<div class="judul"><U>SURAT KETERANGAN PINDAH WNI</U></div>
		<div class="info">Antar Kecamatan Dalam Satu Kabupaten / Kota</div>
		<div class="info">NOMOR : 475/&ensp; &ensp; &ensp;/DS/<?php echo date('m')."/".date('Y'); ?></div>

	</div>
</center>

<div class="kotak" style="text-align:justify;font-size:13px;line-height:20px;margin: 0px 20px;">
	<div class="isi">
		<p>
			<h3>DATA DAERAH ASAL</h3> 
		</p>
		<div class="jadwal">
			<table>
				<tr>
					<td width="28%">No. KK</td>
					<td width="2%">:</td>
					<td width="70%"> <b><?php echo strtoupper($model->no_kk); ?></b></td>
				</tr>
				<tr>
					<td width="28%">Nama Kepala Keluarga</td>
					<td width="2%">:</td>
					<td width="70%"> <?php echo $model->nama_kk; ?></td>
				</tr>	
				<tr>
					<td width="28%">Alamat</td>
					<td width="2%">:</td>
					<td width="70%"> <?php echo $model->alamat; ?></td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%">					
						a. Desa Kelurahan &ensp; &ensp; &ensp; : <b>BOJONGKUNCI</b> &ensp;  &ensp; &ensp;   b. Kecamatan &ensp; : <b>PAMEUNGPEUK</b> <BR>
						c. Kabupaten / KOTA &ensp; &nbsp; : <b>BANDUNG</b> &ensp;  &ensp; &ensp;  &ensp; &ensp;  &ensp; d. Provinsi &ensp; &nbsp; &nbsp; &nbsp;: <b>JAWA BARAT</b> <BR>
					</td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%">Kode Pos : <?php echo $model->kode_pos; ?></td>
				</tr>					
			</table>
		</div>
	</div>
</div>

<div class="kotak" style="text-align:justify;font-size:13px;line-height:20px;margin: 0px 20px;">
	<div class="isi">
		<p>
			<h3>DATA KEPINDAHAN</h3> 
		</p>
		<div class="jadwal">
			<table>
				<tr>
					<td width="28%">Alasan Pindah</td>
					<td width="2%">:</td>
					<td width="70%"> 
						<?php echo $model->alasan_pindah; ?>
					</td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%"> 
						1. Pekerjaan &ensp; &ensp; &ensp; 3 Keamanan &ensp; &ensp; &ensp; 5. Perumahan &ensp; &ensp; &ensp; &nbsp; 7. lainnya <BR>
						2. Pendidikan &ensp; &nbsp; &ensp; 4. Kesehatan &ensp; &ensp; &ensp; 6. Keluarga &ensp;  &ensp;&nbsp; &nbsp; &nbsp; ................ 
					</td>
				</tr>
				<tr>
					<td width="28%">Alamat Tujuan</td>
					<td width="2%">:</td>
					<td width="70%"> 
						<b><?php echo $model->alamat_tujuan; ?></b>
					</td>
				</tr>	

				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%">					
						a. Desa Kelurahan &ensp; &ensp;: <b><?php echo $model->Desa->name; ?></b> &ensp; &ensp; &ensp; &ensp;  b. Kecamatan &ensp; : <b><?php echo $model->Kecamatan->name; ?></b> <BR>
						c. Kabupaten/ Kota &ensp; &nbsp;: <b><?php echo $model->Kota->name; ?></b> &ensp; &ensp; d. Provinsi &ensp; &nbsp; &nbsp; &nbsp;: <b><?php echo $model->Provinsi->name; ?></b> <BR>
					</td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%">Kode Pos : </td>
				</tr>	
				<tr>
					<td width="28%">Jenis Kepindahan</td>
					<td width="2%">:</td>
					<td width="70%"> 
						<?php echo $model->jenis_kepindahan; ?>
					</td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%"> 
						1. Kepala Keluarga &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp; &ensp; 2. Kepala & Seluruh Anggota Keluarga  <BR>
						3. Kepala & Sebagian Anggota &ensp; &nbsp; &ensp; &ensp; &ensp; 4. Anggota Keluarga
					</td>
				</tr>

			</table>
		</div>
	</div>
</div>
<BR>

	<BR>
		<BR>
			<div class="kotak">
				<div class="kiri">

				</div>
				<div class="kanan" style="font-size:18px;line-height:20px;text-align: left;">

					Bojongkunci, <?php echo $model->tanggal_buat;?>
					<BR>
						KEPALA DESA BOJONGKUNCI <BR>
						<BR> <BR> <BR> <BR> <BR> <BR> 
							<b><u>ECEP BUDIMAN</u></b><BR>
						</div>
					</div>




