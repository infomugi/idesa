<?php

class KepindahanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
			);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','desa','loadKecamatan','loadIdKota','loadKota','loadIdProvinsi','loadProvinsi','daftarverifikasi','terima','tolak','print','kabkota','kecamatan','loaddesa','report'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('allow',
				'actions'=>array('view','kelola','daftar','view','desa','daftarverifikasi','terima','tolak','print','report'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
				),	
			array('allow',
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','desa','loadKecamatan','loadIdKota','loadKota','loadIdProvinsi','loadProvinsi','print','kabkota','kecamatan','loaddesa','report'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==3',
				),	
			array('allow',
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','desa','loadKecamatan','loadIdKota','loadKota','loadIdProvinsi','loadProvinsi','print','kabkota','kecamatan','loaddesa','report'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==4',
				),											
			array('deny',
				'users'=>array('*'),
				),
			);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$dataProvider=new CActiveDataProvider('KepindahanDetail',array(
			'criteria'=>array(
				'order'=>'sdrt_id DESC'
				),
			'pagination'=>array(
				'pageSize'=>'12',
				)));

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah()
	{
		$model=new Kepindahan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kepindahan']))
		{
			$model->attributes=$_POST['Kepindahan'];
			$model->status=0;
			$model->petugas_id= YII::app()->user->id;
			$model->tanggal_buat=date('Y-m-d h:i:s');
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_kepindahan));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kepindahan']))
		{
			$model->attributes=$_POST['Kepindahan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kepindahan));
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionDaftar()
	{
		$dataProvider=new CActiveDataProvider('Kepindahan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionKelola()
	{
		$model=new Kepindahan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kepindahan']))
			$model->attributes=$_GET['Kepindahan'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kepindahan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kepindahan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kepindahan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kepindahan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDesa($term) {
		$criteria = new CDbCriteria;
		$criteria->compare('name', $term, true);
		$model = Desas::model()->findAll($criteria);

		foreach ($model as $value) {
			$array[] = array(
				'value' => ($value->name),  
				'label' => ($value->name),
				'desa_id'=>$value->id,
				'kecamatan_id'=>$value->district_id,
				'nama_kecamatan'=>$this->loadKecamatan($value->district_id),
				'kota_id'=>$this->loadIdKota($value->district_id),
				'nama_kota'=>$this->loadKota($value->district_id),
				'provinsi_id'=>$this->loadIdProvinsi($value->district_id),
				'nama_provinsi'=>$this->loadProvinsi($value->district_id),
				);
		}

		echo CJSON::encode($array);
		Yii::app()->end();
	}		

	public function loadKecamatan($id)
	{
		$model=Kecamatans::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
		}{
			return $model->name;
		}
	}	

	public function loadIdKota($id)
	{
		$model=Kecamatans::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
		}{
			return $model->regency_id;
		}
	}

	public function loadKota($id)
	{
		$model=Kecamatans::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
		}{
			$data = Kota::model()->findByPk($model->regency_id);
			return $data->name;
		}
	}		

	public function loadIdProvinsi($id)
	{
		$model=Kecamatans::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
		}{
			$data = Kota::model()->findByPk($model->regency_id);
			$ini = Provinsi::model()->findByPk($data->province_id);
			return $ini->id;
		}
	}

	public function loadProvinsi($id)
	{
		$model=Kecamatans::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
		}{
			$data = Kota::model()->findByPk($model->regency_id);
			$ini = Provinsi::model()->findByPk($data->province_id);
			return $ini->name;
		}
	}			

	public function actionDaftarVerifikasi()
	{
		$dataProvider=new CActiveDataProvider('Kepindahan',array(
			'criteria'=>array(
				'condition'=>'status=0',
				'order'=>'id_kepindahan DESC'
				),
			'pagination'=>array(
				'pageSize'=>'12',
				)));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}		


	public function actionTerima($id)
	{
		$model=$this->loadModel($id);
		$model->status=1;
		if($model->save()){
			$this->redirect(array('view','id'=>$model->id_kepindahan));
		}
	}

	public function actionTolak($id)
	{
		$model=$this->loadModel($id);
		$model->status=2;
		if($model->save()){
			$this->redirect(array('view','id'=>$model->id_kepindahan));
		}
	}		

	public function actionPrint($id)
	{
		$this->layout = "print";
		$this->render('print',array(
			'model'=>$this->loadModel($id),
			));
	}	

	public function actionKabKota()
	{
		$data=Kota::model()->findAll('province_id=:province_id', 
			array(':province_id'=>(int) $_POST['province_id']));

		$data=CHtml::listData($data,'id','name');

		echo "<option value=''>-- Pilih Kabupaten / Kota --</option>";
		foreach($data as $value=>$name)
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
	}

	public function actionKecamatan()
	{
		$data=Kecamatans::model()->findAll('regency_id=:regency_id', 
			array(':regency_id'=>(int) $_POST['regency_id']));

		$data=CHtml::listData($data,'id','name');

		echo "<option value=''>-- Pilih Kecamatan --</option>";
		foreach($data as $value=>$name)
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
	}	

	public function actionLoadDesa()
	{
		$data=Desas::model()->findAll('district_id=:district_id', 
			array(':district_id'=>(int) $_POST['district_id']));

		$data=CHtml::listData($data,'id','name');

		echo "<option value=''>-- Pilih Desa --</option>";
		foreach($data as $value=>$name)
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
	}		

	public function actionReport()
	{
		$dataProvider=new CActiveDataProvider('Kepindahan');
		$this->render('report',array(
			'dataProvider'=>$dataProvider,
			));
	}				
}
