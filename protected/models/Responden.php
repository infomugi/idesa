<?php

/**
 * This is the model class for table "responden".
 *
 * The followings are the available columns in table 'responden':
 * @property integer $kd_responden
 * @property integer $kd_umpi
 * @property integer $sdrt
 * @property integer $nomor
 * @property string $nama
 * @property integer $kd_tempatlahir
 * @property string $tempatlahir
 * @property string $tgllahir
 * @property integer $tg
 * @property integer $bl
 * @property integer $th
 * @property string $jeniskelamin
 * @property integer $kd_statusnikah
 * @property integer $kd_pendidikan
 * @property integer $kd_jurusanpendidikan
 * @property integer $kd_agama
 * @property integer $kd_pekerjaan
 * @property integer $kd_bidangusaha
 * @property string $bidangusaha
 * @property string $nomorkartukuning
 * @property string $nik
 * @property string $telpongenggam
 * @property string $email
 * @property string $ipk
 * @property integer $tb
 * @property integer $bb
 * @property string $waktuupdate
 * @property integer $kd_operator
 * @property integer $migrasi
 * @property string $waktumigrasi
 */
class Responden extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'responden';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sdrt, nama, jeniskelamin, tgllahir, kd_statusnikah, kd_pendidikan, kd_agama', 'required'),
			array('kd_umpi, sdrt, nomor, kd_tempatlahir, tg, bl, th, kd_statusnikah, kd_pendidikan, kd_jurusanpendidikan, kd_agama, kd_pekerjaan, kd_bidangusaha, tb, bb, kd_operator, migrasi', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>60),
			array('tempatlahir, email', 'length', 'max'=>50),
			array('jeniskelamin', 'length', 'max'=>1),
			array('bidangusaha', 'length', 'max'=>100),
			array('nomorkartukuning, nik', 'length', 'max'=>16),
			array('telpongenggam', 'length', 'max'=>15),
			array('ipk', 'length', 'max'=>10),
			array('tgllahir, waktuupdate, waktumigrasi', 'safe'),
			array('kd_operator', 'default', 'value'=>YII::app()->user->id, 'on'=>'insert'),
			array('waktuupdate', 'default', 'value'=>date('Y-m-d h:i:s'), 'on'=>'insert'),			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_responden, kd_umpi, sdrt, nomor, nama, kd_tempatlahir, tempatlahir, tgllahir, tg, bl, th, jeniskelamin, kd_statusnikah, kd_pendidikan, kd_jurusanpendidikan, kd_agama, kd_pekerjaan, kd_bidangusaha, bidangusaha, nomorkartukuning, nik, telpongenggam, email, ipk, tb, bb, waktuupdate, kd_operator, migrasi, waktumigrasi', 'safe', 'on'=>'search'),
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
			'Saudara'=>array(self::BELONGS_TO,'Sdrt','sdrt'),
			'Agama'=>array(self::BELONGS_TO,'Agama','kd_agama'),
			'Operator'=>array(self::BELONGS_TO,'User','kd_operator'),
			'Statusnikah'=>array(self::BELONGS_TO,'Statusnikah','kd_statusnikah'),
			'Pendidikan'=>array(self::BELONGS_TO,'Pendidikan','kd_pendidikan'),
			'Pekerjaan'=>array(self::BELONGS_TO,'Pekerjaan','kd_pekerjaan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_responden' => 'Kode Responden',
			'kd_umpi' => 'Kode Umpi',
			'sdrt' => 'SDRT',
			'nomor' => 'Nomor',
			'nama' => 'Nama',
			'kd_tempatlahir' => 'Kode Tempat Lahir',
			'tempatlahir' => 'Tempat Lahir',
			'tgllahir' => 'Tanggal Lahir',
			'tg' => 'Tanggal',
			'bl' => 'Bulan',
			'th' => 'Tahun',
			'jeniskelamin' => 'JK',
			'kd_statusnikah' => 'Status Nikah',
			'kd_pendidikan' => 'Pendidikan',
			'kd_jurusanpendidikan' => 'Jurusan Pendidikan',
			'kd_agama' => 'Agama',
			'kd_pekerjaan' => 'Pekerjaan',
			'kd_bidangusaha' => 'Kode Bidang Usaha',
			'bidangusaha' => 'Bidang Usaha',
			'nomorkartukuning' => 'Nomor Kartu Kuning',
			'nik' => 'NIK',
			'telpongenggam' => 'HP',
			'email' => 'Email',
			'ipk' => 'IPK',
			'tb' => 'TB',
			'bb' => 'BB',
			'waktuupdate' => 'Tanggal Update',
			'kd_operator' => 'Kode Operator',
			'migrasi' => 'Migrasi',
			'waktumigrasi' => 'Waktu Migrasi',
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

		$criteria->compare('kd_responden',$this->kd_responden);
		$criteria->compare('kd_umpi',$this->kd_umpi);
		$criteria->compare('sdrt',$this->sdrt);
		$criteria->compare('nomor',$this->nomor);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('kd_tempatlahir',$this->kd_tempatlahir);
		$criteria->compare('tempatlahir',$this->tempatlahir,true);
		$criteria->compare('tgllahir',$this->tgllahir,true);
		$criteria->compare('tg',$this->tg);
		$criteria->compare('bl',$this->bl);
		$criteria->compare('th',$this->th);
		$criteria->compare('jeniskelamin',$this->jeniskelamin,true);
		$criteria->compare('kd_statusnikah',$this->kd_statusnikah);
		$criteria->compare('kd_pendidikan',$this->kd_pendidikan);
		$criteria->compare('kd_jurusanpendidikan',$this->kd_jurusanpendidikan);
		$criteria->compare('kd_agama',$this->kd_agama);
		$criteria->compare('kd_pekerjaan',$this->kd_pekerjaan);
		$criteria->compare('kd_bidangusaha',$this->kd_bidangusaha);
		$criteria->compare('bidangusaha',$this->bidangusaha,true);
		$criteria->compare('nomorkartukuning',$this->nomorkartukuning,true);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('telpongenggam',$this->telpongenggam,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ipk',$this->ipk,true);
		$criteria->compare('tb',$this->tb);
		$criteria->compare('bb',$this->bb);
		$criteria->compare('waktuupdate',$this->waktuupdate,true);
		$criteria->compare('kd_operator',$this->kd_operator);
		$criteria->compare('migrasi',$this->migrasi);
		$criteria->compare('waktumigrasi',$this->waktumigrasi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Responden the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function jeniskelamin($data){
		if($data==1){
			return "Laki-laki";
		}else{
			return "Perempuan";
		}
	}

	protected function beforeSave()
	{
		$this->tgllahir = date('Y-m-d h:i:s', strtotime($this->tgllahir));
		$this->waktuupdate = date('Y-m-d h:i:s', strtotime($this->waktuupdate));
		$this->waktumigrasi = date('Y-m-d h:i:s', strtotime($this->waktumigrasi));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tgllahir = date('d-m-Y', strtotime($this->tgllahir));
		$this->waktuupdate = date('d-m-Y', strtotime($this->waktuupdate));
		$this->waktumigrasi = date('d-m-Y', strtotime($this->waktumigrasi));
		return TRUE;
	}   	

	public function countBirth($countBirth)
	{
		$diff = abs(strtotime(date('Y-m-d')) - strtotime($countBirth));
		return $years = floor($diff / (365*60*60*24)) . " tahun";
	}		

}
