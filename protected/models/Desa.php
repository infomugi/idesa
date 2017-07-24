<?php

/**
 * This is the model class for table "desa".
 *
 * The followings are the available columns in table 'desa':
 * @property integer $id
 * @property integer $kd_desa
 * @property integer $kd_kecamatan
 * @property string $mnemonic
 * @property string $nama
 * @property integer $KK2012
 */
class Desa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'desa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_desa, kd_kecamatan, KK2012, mnemonic, nama', 'required'),
			array('kd_desa, mnemonic, nama', 'unique'),
			array('kd_desa, kd_kecamatan, KK2012', 'numerical', 'integerOnly'=>true),
			array('mnemonic', 'length', 'max'=>3),
			array('nama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kd_desa, kd_kecamatan, mnemonic, nama, KK2012', 'safe', 'on'=>'search'),
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
			'Kecamatan'=>array(self::BELONGS_TO,'Kecamatan','kd_kecamatan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kd_desa' => 'Kode Desa',
			'kd_kecamatan' => 'Kode Kecamatan',
			'mnemonic' => 'Mnemonic',
			'nama' => 'Nama',
			'KK2012' => 'KK 2012',
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
		$criteria->compare('kd_desa',$this->kd_desa);
		$criteria->compare('kd_kecamatan',$this->kd_kecamatan);
		$criteria->compare('mnemonic',$this->mnemonic,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('KK2012',$this->KK2012);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Desa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
