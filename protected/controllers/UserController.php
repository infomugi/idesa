<?php

class UserController extends Controller
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
				'actions'=>array('tambah','update','view','delete','kelola','daftar','password','top','activity','image'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('allow',
				'actions'=>array('update','view','password','image'),
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
		$model=User::model()->findByPk($id);
		if($model->id_user!==YII::app()->user->id){
		//$userid,$description,$activityid,$type,$point,$status
			Activities::model()->my(YII::app()->user->id,"Melihat Profile : ".$model->username,21,10,0,0);			
		}
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
		$model=new User;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->password = md5($model->password);
			$model->last_login = date('Y-m-d');
			$model->created_date = date('Y-m-d');
			$model->update_date = date('Y-m-d');
			$model->image = "avatar.png";
			if($model->save())
			$this->redirect(array('view','id'=>$model->id_user));
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
		$model->setScenario('update');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->update_date = date('Y-m-d');

			if($model->save())
				//$userid,$description,$activityid,$type,$point,$status
				// Activities::model()->my(YII::app()->user->id,"Merubah Data Profile : ".$model->username,24,10,1,0);				
			$this->redirect(array('view','id'=>$model->id_user));
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}

	public function actionImage($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('image');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

			if(isset($_POST['User']))
			{
				$model->attributes=$_POST['User'];
				$tmp;
				if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
				{ 
					$tmp=CUploadedFile::getInstance($model,'image'); 
					$model->image=$model->username.'.'.$tmp->extensionName; 
				}

				if($model->save()){
					if(strlen(trim($model->image)) > 0) 
						$tmp->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$model->image);
					$this->redirect(array('view','id'=>$model->id_user));
				}
			}

			$this->render('image',array(
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
		$data=Activities::model()->findByAttributes(array('user_id'=>$id));
		if($data==NULL){
			$this->loadModel($id)->delete();
		}
		$data=Activities::model()->findByAttributes(array('user_id'=>$id));
		$data->delete();
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('kelola'));
	}

	/**
	 * Lists all models.
	 */
	public function actionDaftar()
	{
		//$userid,$description,$activityid,$type,$point,$status
		// Activities::model()->my(YII::app()->user->id,"Melihat Daftar Pengguna SISNAKER",21,10,0,0);				
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionKelola()
	{
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Melihat Menu Kelola Pengguna SISNAKER",21,10,0,0);			
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if(Yii::app()->user->getLevel()==1){

			if($model===null)
				throw new CHttpException(404,'Data yang anda cari kemungkinan telah dihapus.');
			return $model;

		}else{

			if(YII::app()->user->id==$model->id_user){

				if($model===null)
					throw new CHttpException(404,'Data yang anda cari kemungkinan telah dihapus.');
				return $model;

			}else{

				throw new CHttpException(403,'Anda tidak diijikan untuk melakukan aksi ini.');
			}

		}


	}

	public function loadActivity($id)
	{
		$model=Activities::model()->findByPk($id);

		if($model===null)
			throw new CHttpException(404,'Data yang anda cari kemungkinan telah dihapus.');
		return $model;
	}	

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionPassword($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->password = md5($model->password);
			if($model->save())
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Merubah Password : ".$model->username,24,10,1,0);	
			$this->redirect(array('view','id'=>$model->id_user));
		}

		$this->render('password',array(
			'model'=>$model,
			));
	}	

	public function actionTop()
	{
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Melihat Menu Pengguna Paling Aktif di SISNAKER",21,10,0,0);			
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('top',array(
			'model'=>$model,
			));
	}

	public function actionActivity()
	{
		$dataProvider=new CActiveDataProvider('Activities');
		$this->render('activity',array(
			'dataProvider'=>$dataProvider,
			));
	}	

}
