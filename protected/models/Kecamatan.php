<?php

/**
 * This is the model class for table "kecamatan".
 *
 * The followings are the available columns in table 'kecamatan':
 * @property integer $id
 * @property integer $kd_kecamatan
 * @property string $mnemonic
 * @property integer $kd_areasurvey
 * @property string $nama
 */
class Kecamatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kecamatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_kecamatan, kd_areasurvey, mnemonic, nama', 'required'),
			array('kd_kecamatan, nama', 'unique'),
			array('kd_kecamatan, kd_areasurvey', 'numerical', 'integerOnly'=>true),
			array('mnemonic', 'length', 'max'=>2),
			array('nama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kd_kecamatan, mnemonic, kd_areasurvey, nama', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kd_kecamatan' => 'Kode Kecamatan',
			'mnemonic' => 'Mnemonic',
			'kd_areasurvey' => 'Kode Area Survey',
			'nama' => 'Nama',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('kd_kecamatan',$this->kd_kecamatan);
		$criteria->compare('mnemonic',$this->mnemonic,true);
		$criteria->compare('kd_areasurvey',$this->kd_areasurvey);
		$criteria->compare('nama',$this->nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kecamatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
