<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property string $created_date
 * @property string $update_date
 * @property string $last_login
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $namalengkap
 * @property string $tanggallahir
 * @property string $handphone
 * @property string $alamat
 * @property integer $bagian
 * @property integer $level
 * @property string $image
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, update_date, last_login, username, password, email, namalengkap, tanggallahir, handphone, alamat, bagian, level, image', 'required','on'=>'create'),
			array('username, password, email, namalengkap, tanggallahir, handphone, alamat, bagian, level', 'required','on'=>'update'),
			array('bagian, level', 'numerical', 'integerOnly'=>true),
			array('username, password, email', 'length', 'max'=>250),
			array('namalengkap', 'length', 'max'=>25),
			array('handphone', 'length', 'max'=>15),
			array('image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, created_date, update_date, last_login, username, password, email, namalengkap, tanggallahir, handphone, alamat, bagian, level, image', 'safe', 'on'=>'search'),
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
			'Kecamatan'=>array(self::BELONGS_TO,'Kecamatan','bagian'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'created_date' => 'Created Date',
			'update_date' => 'Update Date',
			'last_login' => 'Last Login',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'namalengkap' => 'Nama Lengkap',
			'tanggallahir' => 'Tanggal Lahir',
			'handphone' => 'Handphone',
			'alamat' => 'Alamat',
			'bagian' => 'Bagian',
			'level' => 'Level',
			'image' => 'Image',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('namalengkap',$this->namalengkap,true);
		$criteria->compare('tanggallahir',$this->tanggallahir,true);
		$criteria->compare('handphone',$this->handphone,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('bagian',$this->bagian);
		$criteria->compare('level',$this->level);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function kecamatan($data){
		$model=Kecamatan::model()->findByPk($data);
		return $model->nama;
	}


}
