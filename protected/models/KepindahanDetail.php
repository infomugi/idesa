<?php

/**
 * This is the model class for table "kepindahan_detail".
 *
 * The followings are the available columns in table 'kepindahan_detail':
 * @property integer $id_kepindahan_detail
 * @property integer $kepindahan_id
 * @property string $nik
 * @property string $nama_lengkap
 * @property string $masa_berlaku_ktp
 * @property integer $sdrt_id
 */
class KepindahanDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kepindahan_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kepindahan_id, nik, nama_lengkap, sdrt_id', 'required'),
			array('kepindahan_id, sdrt_id', 'numerical', 'integerOnly'=>true),
			array('nik', 'length', 'max'=>32),
			array('nama_lengkap', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kepindahan_detail, kepindahan_id, nik, nama_lengkap, masa_berlaku_ktp, sdrt_id', 'safe', 'on'=>'search'),
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
			'Sdrt'=>array(self::BELONGS_TO,'Sdrt','sdrt_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kepindahan_detail' => 'Id Kepindahan Detail',
			'kepindahan_id' => 'Kepindahan',
			'nik' => 'NIK',
			'nama_lengkap' => 'Nama Lengkap',
			'masa_berlaku_ktp' => 'Masa Berlaku KTP',
			'sdrt_id' => 'SHDK',
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

		$criteria->compare('id_kepindahan_detail',$this->id_kepindahan_detail);
		$criteria->compare('kepindahan_id',$this->kepindahan_id);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('masa_berlaku_ktp',$this->masa_berlaku_ktp,true);
		$criteria->compare('sdrt_id',$this->sdrt_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return KepindahanDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->masa_berlaku_ktp = date('Y-m-d', strtotime($this->masa_berlaku_ktp));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->masa_berlaku_ktp = date('d-m-Y', strtotime($this->masa_berlaku_ktp));
		return TRUE;
	}   

	public function masaberlaku($data){
		if($data=="01-01-1970"){
			return "Seumur Hidup";
		}else{
			return $data;
		}
	}

}
