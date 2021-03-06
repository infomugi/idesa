<?php

class SktmController extends Controller
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
				'actions'=>array('search'),
				'users'=>array('*'),
				),			
			array('allow',
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','daftarverifikasi','terima','tolak','print','report','verifikasi'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('allow',
				'actions'=>array('view','kelola','daftar','view','daftarverifikasi','terima','tolak','report'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
				),		
			array('allow',
				'actions'=>array('view','kelola','daftar','view','print','report','pengambilan','verifikasi'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==3',
				),		
			array('allow',
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','print','report','pengambilan','verifikasi'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah()
	{
		$model=new Sktm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sktm']))
		{
			$model->attributes=$_POST['Sktm'];
			$model->tanggal_input = date('Y-m-d h:i:s');
			$model->petugas_id = YII::app()->user->id;
			$model->no_resi = Kepindahan::model()->generateRandomString();
			$model->status=0;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sktm));
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

		if(isset($_POST['Sktm']))
		{
			$model->attributes=$_POST['Sktm'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sktm));
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
		$dataProvider=new CActiveDataProvider('Sktm');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionKelola()
	{
		$model=new Sktm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sktm']))
			$model->attributes=$_GET['Sktm'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sktm the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sktm::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadResi($string)
	{
		$model=Sktm::model()->findByAttributes(array('no_resi'=>$string));
		if($model===null)
			throw new CHttpException(404,'Data yang anda cari tidak ada pada sistem kami.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sktm $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sktm-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDaftarVerifikasi()
	{
		$dataProvider=new CActiveDataProvider('Sktm',array(
			'criteria'=>array(
				'condition'=>'status=0',
				'order'=>'id_sktm ASC',
				'offset'=>0,
				'limit' => 1,
				),
			'pagination'=>false));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionTerima($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Sktm']))
		{
			$model->attributes=$_POST['Sktm'];
			$model->status=1;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sktm));
		}

		$this->render('verifikasi',array(
			'model'=>$model,
			));
	}

	public function actionTolak($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Sktm']))
		{
			$model->attributes=$_POST['Sktm'];
			$model->status=2;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sktm));
		}

		$this->render('verifikasi',array(
			'model'=>$model,
			));
	}		

	public function actionPrint($id)
	{
		$this->layout = "print";

		$update=$this->loadModel($id);
		$update->print_by = YII::app()->user->id;
		$update->print_klik += 1;
		$update->print_tanggal = date('Y-m-d h:i:s');
		$update->print_deskripsi = "Dokumen ini telah dicetak oleh " . YII::app()->user->name . " pada tanggal " .date('Y-m-d h:i:s');
		$update->update();

		$this->render('print',array(
			'model'=>$this->loadModel($id),
			));
	}	

	public function actionReport()
	{
		$dataProvider=new CActiveDataProvider('Sktm');
		$this->render('report',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionSearch($string=''){
		$this->layout = "signin";
		$data=$this->loadResi($string);
		$this->render('search', array('data'=>$data));		
	}

	public function actionPengambilan($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Sktm']))
		{
			$model->attributes=$_POST['Sktm'];
			$model->pengambilan_id = YII::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sktm));
		}

		$this->render('pengambilan',array(
			'model'=>$model,
			));
	}


	public function actionVerifikasi($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Sktm']))
		{
			$model->attributes=$_POST['Sktm'];
			$model->verifikasi_id = YII::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sktm));
		}

		$this->render('verifikasi_lapangan',array(
			'model'=>$model,
			));
	}	


}
