<?php

class RespondenController extends Controller
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
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('allow',
				'actions'=>array('tambah','update','view','delete','daftar','view'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
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
		$model=Responden::model()->findByPk($id);
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Melihat Data Responden, atas Nama : ".$model->nama,21,10,0,0);			
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah($id)
	{
		// $umpi=$this->loadUmpi($id);
		$model=new Responden;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Responden']))
		{
			$model->attributes=$_POST['Responden'];
			$model->kd_umpi = $id;
			// $model->nik = $umpi->no_kk;

			//Diinput Oleh
			$model->kd_operator = YII::app()->user->id;
			$model->waktuupdate = date('Y-m-d h:i:s');				
		
			if($model->save())
				Yii::app()->user->setFlash('Success', '<i>'.$model->nama.'</i> berhasil ditambahkan.');
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Menambah Data Responden, atas Nama : ".$model->nama." No KTP : ".$model->nik,22,5,2,0);			
				$this->redirect(array('umpi/view','id'=>$id));
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

		if(isset($_POST['Responden']))
		{
			$model->attributes=$_POST['Responden'];
			// Migrasi Oleh
			$model->migrasi = YII::app()->user->id;
			$model->waktumigrasi = date('Y-m-d h:i:s');	

			if($model->save())
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Merubah Data Responden, atas Nama : ".$model->nama." No KTP : ".$model->nik,24,6,1,0);				
				$this->redirect(array('umpi/view','id'=>$model->kd_umpi));
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
		$model=Umpi::model()->findByPk($id);
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Menghapus Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,25,11,0,0);			
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
		$dataProvider=new CActiveDataProvider('Responden');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionKelola()
	{
		$model=new Responden('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Responden']))
			$model->attributes=$_GET['Responden'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Responden the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Responden::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Data yang anda cari kemungkinan telah dihapus.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Responden $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='responden-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function loadUmpi($id)
	{
		$umpi=Umpi::model()->findByPk($id);
		if($umpi===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $umpi;
	}	
}
