<?php

/**
 * This is the model class for table "umpi".
 *
 * The followings are the available columns in table 'umpi':
 * @property integer $kd_umpi
 * @property string $tglupdate
 * @property string $nomorformulir
 * @property integer $kd_desa
 * @property string $nama
 * @property string $alamat
 * @property integer $rt
 * @property integer $rw
 * @property string $telponrumah
 * @property integer $tks
 * @property string $no_kk
 * @property integer $kd_surveyor
 * @property string $tglsensus
 * @property string $catatan
 * @property string $waktuupdate
 * @property integer $kd_operator
 * @property string $ip_client
 */
class Keluarga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'umpi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_desa, nama, alamat, rt, rw, no_kk, waktuupdate, kd_operator, ip_client', 'required'),
			array('kd_desa, rt, rw, tks, kd_surveyor, kd_operator, status', 'numerical', 'integerOnly'=>true),
			array('nomorformulir', 'length', 'max'=>10),
			array('nama, alamat, ip_client', 'length', 'max'=>100),
			array('telponrumah', 'length', 'max'=>15),
			array('rt, rw', 'length', 'max'=>2),
			array('no_kk', 'length', 'max'=>20),
			array('catatan', 'length', 'max'=>200),
			array('tglupdate, tglsensus, waktuupdate', 'safe'),
			array('no_kk', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_umpi, tglupdate, nomorformulir, kd_desa, alamat, rt, rw, telponrumah, tks, no_kk, kd_surveyor, tglsensus, catatan, waktuupdate, kd_operator, ip_client', 'safe', 'on'=>'search'),
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
			'Desa'=>array(self::BELONGS_TO,'Desa','kd_desa'),
			'Operator'=>array(self::BELONGS_TO,'User','kd_operator'),
			'Surveyor'=>array(self::BELONGS_TO,'User','kd_surveyor'),
			'Tks'=>array(self::BELONGS_TO,'User','tks'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_umpi' => 'Kode UMPI',
			'tglupdate' => 'Tanggal Catat',
			'nomorformulir' => 'Nomor Formulir',
			'kd_desa' => 'Desa',
			'kd_kecamatan' => 'Kecamatan',
			'nama' => 'Nama KK',
			'alamat' => 'Alamat',
			'rt' => 'RT',
			'rw' => 'RW',
			'telponrumah' => 'Telpon Rumah',
			'tks' => 'Petugas',
			'nama' => 'Nama Kepala Keluarga',
			'no_kk' => 'No Kartu Keluarga',
			'kd_surveyor' => 'Kode Surveyor',
			'tglsensus' => 'Tanggal Sensus',
			'catatan' => 'Catatan',
			'waktuupdate' => 'Tanggal Update',
			'kd_operator' => 'Operator',
			'ip_client' => 'IP Address',
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

		$criteria->order = "kd_umpi DESC";
		$criteria->compare('kd_umpi',$this->kd_umpi);
		$criteria->compare('tglupdate',$this->tglupdate,true);
		$criteria->compare('nomorformulir',$this->nomorformulir,true);
		$criteria->compare('nama',$this->nama);
		$criteria->compare('kd_desa',$this->kd_desa);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('rt',$this->rt);
		$criteria->compare('rw',$this->rw);
		$criteria->compare('telponrumah',$this->telponrumah,true);
		$criteria->compare('tks',$this->tks);
		$criteria->compare('no_kk',$this->no_kk,true);
		$criteria->compare('kd_surveyor',$this->kd_surveyor);
		$criteria->compare('tglsensus',$this->tglsensus,true);
		$criteria->compare('catatan',$this->catatan,true);
		$criteria->compare('waktuupdate',$this->waktuupdate,true);
		$criteria->compare('kd_operator',$this->kd_operator);
		$criteria->compare('ip_client',$this->ip_client,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Umpi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->waktuupdate = date('Y-m-d h:i:s', strtotime($this->waktuupdate));
		$this->tglupdate = date('Y-m-d h:i:s', strtotime($this->tglupdate));
		$this->tglsensus = date('Y-m-d h:i:s', strtotime($this->tglsensus));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->waktuupdate = date('d-m-Y', strtotime($this->waktuupdate));
		$this->tglupdate = date('d-m-Y', strtotime($this->tglupdate));
		$this->tglsensus = date('d-m-Y', strtotime($this->tglsensus));
		return TRUE;
	}   	

	public function kecamatan($data){
		$inikec = Kecamatan::model()->findByPk($data);
		return $inikec->nama;
	}	
}
