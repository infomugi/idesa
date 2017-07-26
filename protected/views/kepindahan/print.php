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
					<td width="28%">1. No. KK</td>
					<td width="2%">:</td>
					<td width="70%"> <b><?php echo strtoupper($model->no_kk); ?></b></td>
				</tr>
				<tr>
					<td width="28%">2. Nama Kepala Keluarga</td>
					<td width="2%">:</td>
					<td width="70%"> <?php echo $model->nama_kk; ?></td>
				</tr>	
				<tr>
					<td width="28%">3. Alamat</td>
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
					<td width="28%">1. Alasan Pindah</td>
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
					<td width="28%">2. Alamat Tujuan</td>
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
					<td width="28%">3. Jenis Kepindahan</td>
					<td width="2%">:</td>
					<td width="70%"> 
						<div style="padding:8px;border:1px solid #000;width:10px"><?php echo $model->jenis_kepindahan; ?></div>
					</td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%"> 
						1. Kepala Keluarga &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp; &ensp;2. Kepala & Seluruh Anggota Keluarga  <BR>
						3. Kepala & Sebagian Anggota &ensp; &nbsp; &ensp; &ensp; 4. Anggota Keluarga
					</td>
				</tr>
				<tr>
					<td width="28%">4. Status KK bagi yang tidak Pindah</td>
					<td width="2%">:</td>
					<td width="70%"> 
						<div style="padding:8px;border:1px solid #000;width:10px"><?php echo $model->status_kk_yang_tidak_pindah; ?></div>
					</td>
				</tr>
				<tr>
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%"> 
						1. Tetap &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 2. KK Baru
					</td>
				</tr>	

				<tr>
					<td width="28%">5. Status KK bagi yang Pindah</td>
					<td width="2%">:</td>
					<td width="70%"> 
						<div style="padding:8px;border:1px solid #000;width:10px"><?php echo $model->status_kk_pindah; ?></div>
					</td>
				</tr>
				<tr>;width:30px
					<td width="28%"></td>
					<td width="2%"></td>
					<td width="70%"> 
						1. Numpang KK &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 2. Membuat KK Baru
					</td>
				</tr>	

				<tr>
					<td width="28%">6. Keluarga yang Pindah</td>
					<td width="2%">:</td>
					<td width="70%"> 
					</td>
				</tr>											


			</table>
		</div>
	</div>
</div>
<BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR>
	<BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR>
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




