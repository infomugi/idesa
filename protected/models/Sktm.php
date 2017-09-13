<?php

/**
 * This is the model class for table "sktm".
 *
 * The followings are the available columns in table 'sktm':
 * @property integer $id_sktm
 * @property string $no_sktm
 * @property string $tanggal_input
 * @property string $tanggal_buat
 * @property integer $petugas_id
 * @property string $nama_anak
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $tingkat
 * @property string $instansi
 * @property string $nama_ayah
 * @property integer $umur_ayah
 * @property integer $agama_ayah
 * @property integer $pekerjaan_ayah
 * @property string $alamat_ayah
 * @property string $nama_ibu
 * @property integer $umur_ibu
 * @property integer $agama_ibu
 * @property integer $pekerjaan_ibu
 * @property string $alamat_ibu
 * @property integer $status
 */
class Sktm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sktm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_input, tanggal_buat, petugas_id, nama_anak, tempat_lahir, tanggal_lahir, tingkat, instansi, nama_ayah, umur_ayah, agama_ayah, pekerjaan_ayah, alamat_ayah, nama_ibu, umur_ibu, agama_ibu, pekerjaan_ibu, alamat_ibu, status, pengantar_no, pengantar_tanggal', 'required'),
			array('petugas_id, umur_ayah, agama_ayah, pekerjaan_ayah, umur_ibu, agama_ibu, pekerjaan_ibu, status,', 'numerical', 'integerOnly'=>true),


			array('print_by, print_klik, pengambilan_id', 'numerical', 'integerOnly'=>true),
			array('print_deskripsi', 'length', 'max'=>255),
			array('pengambilan_tanggal, print_tanggal, pengambilan_oleh', 'length', 'max'=>25),	
			array('pengantar_no, pengantar_tanggal', 'length', 'max'=>25),	

			array('no_sktm, tempat_lahir, tingkat, no_resi', 'length', 'max'=>25),
			array('nama_anak, nama_ayah, nama_ibu', 'length', 'max'=>50),
			array('instansi', 'length', 'max'=>100),
			array('deskripsi', 'length', 'max'=>255),
			array('no_sktm', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sktm, no_sktm, tanggal_input, tanggal_buat, petugas_id, nama_anak, tempat_lahir, tanggal_lahir, tingkat, instansi, nama_ayah, umur_ayah, agama_ayah, pekerjaan_ayah, alamat_ayah, nama_ibu, umur_ibu, agama_ibu, pekerjaan_ibu, alamat_ibu, status', 'safe', 'on'=>'search'),
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
			'VerifikasiPetugas'=>array(self::BELONGS_TO,'User','verifikasi_id'),
			'PengambilanPetugas'=>array(self::BELONGS_TO,'User','pengambilan_id'),
			'PrintPetugas'=>array(self::BELONGS_TO,'User','print_by'),
			'Petugas'=>array(self::BELONGS_TO,'User','petugas_id'),
			'AgamaAyah'=>array(self::BELONGS_TO,'Agama','agama_ayah'),
			'AgamaIbu'=>array(self::BELONGS_TO,'Agama','agama_ibu'),
			'PekerjaanAyah'=>array(self::BELONGS_TO,'Pekerjaan','pekerjaan_ayah'),
			'PekerjaanIbu'=>array(self::BELONGS_TO,'Pekerjaan','pekerjaan_ibu'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sktm' => 'Id SKTM',
			'no_sktm' => 'No SKTM',
			'tanggal_input' => 'Tanggal Input',
			'tanggal_buat' => 'Tanggal Buat',
			'petugas_id' => 'Petugas',
			'nama_anak' => 'Nama Anak',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'tingkat' => 'Tingkat',
			'instansi' => 'Instansi',
			'nama_ayah' => 'Nama Ayah',
			'umur_ayah' => 'Umur Ayah',
			'agama_ayah' => 'Agama Ayah',
			'pekerjaan_ayah' => 'Pekerjaan Ayah',
			'alamat_ayah' => 'Alamat Ayah',
			'nama_ibu' => 'Nama Ibu',
			'umur_ibu' => 'Umur Ibu',
			'agama_ibu' => 'Agama Ibu',
			'pekerjaan_ibu' => 'Pekerjaan Ibu',
			'alamat_ibu' => 'Alamat Ibu',
			'status' => 'Status',
			'print_by' => 'Terakhir Dicetak Oleh',
			'print_klik' => 'Total Tombol Print Di Klik',
			'print_tanggal' => 'Tanggal Cetak',
			'print_deskripsi' => 'Berita Acara Cetak Dokumen',
			'pengambilan_id' => 'Diserahkan Oleh',
			'pengambilan_tanggal' => 'Diserahkan Pada',
			'pengambilan_oleh' => 'Diambil Oleh',

			'verifikasi_id' => 'Verifikasi Oleh',
			'verifikasi_tanggal' => 'Tanggal Verifikasi',
			'verifikasi_keterangan' => 'Hasil Verifikasi',

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

		$criteria->compare('id_sktm',$this->id_sktm);
		$criteria->compare('no_sktm',$this->no_sktm,true);
		$criteria->compare('tanggal_input',$this->tanggal_input,true);
		$criteria->compare('tanggal_buat',$this->tanggal_buat,true);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('nama_anak',$this->nama_anak,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('tingkat',$this->tingkat,true);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('nama_ayah',$this->nama_ayah,true);
		$criteria->compare('umur_ayah',$this->umur_ayah);
		$criteria->compare('agama_ayah',$this->agama_ayah);
		$criteria->compare('pekerjaan_ayah',$this->pekerjaan_ayah);
		$criteria->compare('alamat_ayah',$this->alamat_ayah,true);
		$criteria->compare('nama_ibu',$this->nama_ibu,true);
		$criteria->compare('umur_ibu',$this->umur_ibu);
		$criteria->compare('agama_ibu',$this->agama_ibu);
		$criteria->compare('pekerjaan_ibu',$this->pekerjaan_ibu);
		$criteria->compare('alamat_ibu',$this->alamat_ibu,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sktm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->tanggal_lahir = date('Y-m-d h:i:s', strtotime($this->tanggal_lahir));
		$this->tanggal_buat = date('Y-m-d h:i:s', strtotime($this->tanggal_buat));
		$this->tanggal_input = date('Y-m-d h:i:s', strtotime($this->tanggal_input));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tanggal_lahir = date('d-m-Y', strtotime($this->tanggal_lahir));
		$this->tanggal_buat = date('d-m-Y', strtotime($this->tanggal_buat));
		$this->tanggal_input = date('d-m-Y', strtotime($this->tanggal_input));
		return TRUE;
	}   	
	
}
