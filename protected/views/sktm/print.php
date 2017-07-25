<?php
/* @var $this SktmController */
/* @var $model Sktm */

$this->breadcrumbs=array(
	'SKTM'=>array('daftar'),
	$model->id_sktm,
	);

$this->pageTitle='Detail SKTM';

?>

<div class="kotak">
	<div class="line3"></div>
	<div class="line2"></div>
	<BR> <BR>
		<div class="judul"><U>SURAT KETERANGAN TIDAK MAMPU</U></div>
		<div class="info">NOMOR : 463.4/<?php echo $model->no_sktm;?><?php echo "/SKTM/DS/"; ?><?php echo date('m')."/".date('Y'); ?></div>

	</div>

	<div class="kotak" style="text-align:justify;font-size:18px;line-height:20px;">
		<div class="isi">
			<BR> <BR> 
				<p>
					Yang bertanda tangan dibawah ini, Kepala Desa Bojongkunci Kecamatan Pameungpeuk Kabupaten Bandung, dengan ini menerangkan :
				</p>
				<p>
					<u>a. Data Anak :</u> 
				</p>
				<div class="jadwal">
					<table>
						<tr>
							<td width="28%">Nama</td>
							<td width="2%">:</td>
							<td width="70%"> <b><?php echo strtoupper($model->nama_anak); ?></b></td>
						</tr>
						<tr>
							<td width="28%">Tempat & Tanggal Lahir</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->tempat_lahir; ?>, <?php echo $model->tanggal_lahir; ?></td>
						</tr>	
						<tr>
							<td width="28%">Kelas / Tingkat</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->tingkat; ?></td>
						</tr>
						<tr>
							<td width="28%">Nama Sekolah</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo strtoupper($model->instansi); ?></td>
						</tr>
					</table>
				</div>
				<BR> <BR> <BR> <BR> <BR>

					<p>
						<u>b. Data Orang Tua / Wali :</u> 
					</p>
					<div class="jadwal">
						<table>
							<tr>
								<td width="28%">Nama Ayah</td>
								<td width="2%">:</td>
								<td width="70%"> <b><?php echo strtoupper($model->nama_ayah); ?></b></td>
							</tr>
							<tr>
								<td width="28%">Umur</td>
								<td width="2%">:</td>
								<td width="70%"> <?php echo $model->umur_ayah; ?></td>
							</tr>	
							<tr>
								<td width="28%">Agama</td>
								<td width="2%">:</td>
								<td width="70%"> <?php echo $model->AgamaAyah->nama; ?></td>
							</tr>
							<tr>
								<td width="28%">Pekerjaan</td>
								<td width="2%">:</td>
								<td width="70%"> <?php echo $model->PekerjaanAyah->nama; ?></td>
							</tr>
							<tr>
								<td width="28%">Alamat</td>
								<td width="2%">:</td>
								<td width="70%"> Kp. <?php echo $model->alamat_ayah; ?> Desa Bojongkunci Kecamatan Pameungpeuk Kabupaten Bandung </td>
							</tr>

							<tr>
								<td width="28%"</td>
									<td width="2%"></td>
									<td width="70%"></td>
								</tr>

								<tr>
									<td width="28%"</td>
										<td width="2%"></td>
										<td width="70%"></td>
									</tr>

									<tr>
										<td width="28%">Nama Ibu</td>
										<td width="2%">:</td>
										<td width="70%"> <b><?php echo strtoupper($model->nama_ibu); ?></b></td>
									</tr>
									<tr>
										<td width="28%">Umur</td>
										<td width="2%">:</td>
										<td width="70%"> <?php echo $model->umur_ibu; ?></td>
									</tr>	
									<tr>
										<td width="28%">Agama</td>
										<td width="2%">:</td>
										<td width="70%"> <?php echo $model->AgamaIbu->nama; ?></td>
									</tr>
									<tr>
										<td width="28%">Pekerjaan</td>
										<td width="2%">:</td>
										<td width="70%"> <?php echo $model->PekerjaanIbu->nama; ?></td>
									</tr>
									<tr>
										<td width="28%">Alamat</td>
										<td width="2%">:</td>
										<td width="70%"> Kp. <?php echo $model->alamat_ibu; ?> Desa Bojongkunci Kecamatan Pameungpeuk Kabupaten Bandung</td>
									</tr>																
								</table>
							</div>					



							<BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <p>
								Anak tersebut diatas berkeinginan untuk Sekolah / Melanjutkan Sekolah tetapi Keadaan Ekonominya Lemah / Tidak mampu, karena tergolong dari keluarga miskin ( Pra - Sejahtera ) untuk mengurangi Jumlah angka siswa yang Rawan Putus Sekolah ( RPS ), kami mohon kebijakan semua pihak yang berkepentingan agar dapat memberikan keringanan biaya yang berhubungan dengan masalah keuangan. Kalau mungkin anak / siswa tersebut didaftarkan sebagai penerima Beasiswa / Anak Asuh.
							</p>
							&ensp; &ensp; &ensp;Demikian Surat Keterangan ini dibuat dengan sebenarnya agar berkepentingan menjadi tahu dan maklum adanya.																															<p>
						</p>												

					</div>
				</div>
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




