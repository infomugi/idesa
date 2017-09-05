<?php

/**
 * This is the model class for table "kepindahan".
 *
 * The followings are the available columns in table 'kepindahan':
 * @property integer $id_kepindahan
 * @property string $tanggal_buat
 * @property integer $petugas_id
 * @property string $no_kk
 * @property string $nama_kk
 * @property string $alamat
 * @property string $kode_pos
 * @property string $alasan_pindah
 * @property string $alamat_tujuan
 * @property integer $provinsi_id
 * @property integer $kabkota_id
 * @property integer $kecamatan_id
 * @property integer $desa_id
 * @property integer $jenis_kepindahan
 * @property integer $status_kk_yang_tidak_pindah
 * @property integer $status_kk_pindah
 * @property integer $status
 */
class Kepindahan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kepindahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_buat, petugas_id, no_kk, nama_kk, alamat, kode_pos, alasan_pindah, alamat_tujuan, provinsi_id, kabkota_id, kecamatan_id, desa_id, jenis_kepindahan, status_kk_yang_tidak_pindah, status_kk_pindah, status', 'required'),
			array('petugas_id, provinsi_id, kabkota_id, kecamatan_id, jenis_kepindahan, status_kk_yang_tidak_pindah, status_kk_pindah, status', 'numerical', 'integerOnly'=>true),
			array('deskripsi', 'length', 'max'=>255),
			array('desa_id', 'length', 'max'=>10),
			array('no_kk, no_resi', 'length', 'max'=>25),
			array('nama_kk', 'length', 'max'=>50),
			array('kode_pos', 'length', 'max'=>6),
			array('no_kk', 'unique'),



			array('print_by, print_klik, pengambilan_id', 'numerical', 'integerOnly'=>true),
			array('print_deskripsi', 'length', 'max'=>255),
			array('pengambilan_tanggal, print_tanggal, pengambilan_oleh', 'length', 'max'=>25),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kepindahan, tanggal_buat, petugas_id, no_kk, nama_kk, alamat, kode_pos, alasan_pindah, alamat_tujuan, provinsi_id, kabkota_id, kecamatan_id, desa_id, jenis_kepindahan, status_kk_yang_tidak_pindah, status_kk_pindah, status', 'safe', 'on'=>'search'),
			);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'PengambilanPetugas'=>array(self::BELONGS_TO,'User','pengambilan_id'),
			'PrintPetugas'=>array(self::BELONGS_TO,'User','print_by'),
			'Petugas'=>array(self::BELONGS_TO,'User','petugas_id'),
			'Desa'=>array(self::BELONGS_TO,'Desas','desa_id'),
			'Kecamatan'=>array(self::BELONGS_TO,'Kecamatans','kecamatan_id'),
			'Kota'=>array(self::BELONGS_TO,'Kota','kabkota_id'),
			'Provinsi'=>array(self::BELONGS_TO,'Provinsi','provinsi_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kepindahan' => 'Id Kepindahan',
			'tanggal_buat' => 'Tanggal Buat',
			'petugas_id' => 'Petugas',
			'no_kk' => 'No KK',
			'nama_kk' => 'Nama Kepala Keluarga',
			'alamat' => 'Alamat',
			'kode_pos' => 'Kode Pos',
			'alasan_pindah' => 'Alasan Pindah',
			'alamat_tujuan' => 'Alamat Tujuan',
			'provinsi_id' => 'Provinsi',
			'kabkota_id' => 'Kab / Kota',
			'kecamatan_id' => 'Kecamatan',
			'desa_id' => 'Desa',
			'jenis_kepindahan' => 'Jenis Kepindahan',
			'status_kk_yang_tidak_pindah' => 'Status KK Yang Tidak Pindah',
			'status_kk_pindah' => 'Status KK Pindah',
			'status' => 'Status',
			'deskripsi' => 'Keterangan Verifikasi',

			'print_by' => 'Terakhir Dicetak Oleh',
			'print_klik' => 'Total Tombol Print Di Klik',
			'print_tanggal' => 'Tanggal Cetak',
			'print_deskripsi' => 'Berita Acara Cetak Dokumen',
			'pengambilan_id' => 'Diserahkan Oleh',
			'pengambilan_tanggal' => 'Diserahkan Pada',
			'pengambilan_oleh' => 'Diambil Oleh',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_kepindahan',$this->id_kepindahan);
		$criteria->compare('tanggal_buat',$this->tanggal_buat,true);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('no_kk',$this->no_kk,true);
		$criteria->compare('nama_kk',$this->nama_kk,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kode_pos',$this->kode_pos,true);
		$criteria->compare('alasan_pindah',$this->alasan_pindah,true);
		$criteria->compare('alamat_tujuan',$this->alamat_tujuan,true);
		$criteria->compare('provinsi_id',$this->provinsi_id);
		$criteria->compare('kabkota_id',$this->kabkota_id);
		$criteria->compare('kecamatan_id',$this->kecamatan_id);
		$criteria->compare('desa_id',$this->desa_id);
		$criteria->compare('jenis_kepindahan',$this->jenis_kepindahan);
		$criteria->compare('status_kk_yang_tidak_pindah',$this->status_kk_yang_tidak_pindah);
		$criteria->compare('status_kk_pindah',$this->status_kk_pindah);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kepindahan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function jenis($data){
		if($data==1){
			return "Kepala Keluarga";
		}else if($data==2){
			return "Kepala & Seluruh Anggota";
		}else if($data==3){
			return "Kepala & Sebagian Keluarga";
		}else{
			return "Anggota Keluarga";
		}
	}

	public function statuskk($data){
		if($data==1){
			return "Tetap";
		}else{
			return "KK Baru";
		}
	}

	public function statuskkpindah($data){
		if($data==1){
			return "Numpang KK";
		}else{
			return "Membuat KK Baru";
		}
	}		

	public function status($data){
		if($data==1){
			return "Disetujui (Oleh Kepala Desa)";
		}else if($data==2){
			return "Tidak Disetujui (Oleh Kepala Desa)";
		}else{
			return "Dalam Proses (Tinggal di Verifikasi Kepala Desa)";
		}
	}	

	public function alert($data){
		if($data==1){
			return "alert-success";
		}else if($data==2){
			return "alert-danger";
		}else{
			return "alert-info";
		}
	}		

	protected function beforeSave()
	{
		$this->pengambilan_tanggal = date('Y-m-d h:i:s', strtotime($this->pengambilan_tanggal));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->pengambilan_tanggal = date('d-m-Y', strtotime($this->pengambilan_tanggal));
		return TRUE;
	} 

	public function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}
