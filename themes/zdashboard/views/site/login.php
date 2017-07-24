<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
  );
  ?>

  <div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-success">
      <div class="panel-heading"> 
       <h3 class="text-center m-t-10"> <strong><?php echo Yii::app()->name; ?></strong> </h3>
     </div> 
     <center>
     <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/login.png" width="120px" style="padding-top:30px" class="img-responsive text-center">
     </center>
     <div class="form-horizontal m-t-40">

      <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
         'validateOnSubmit'=>true,
         ),
         )); ?>

         <div class="text-blue text-center"><b><?php echo $form->error($model,'username'); ?></b></center> </div>
         <div class="text-blue text-center"> <b><?php echo $form->error($model,'password'); ?></b></center> </div>

         <HR>

           <div class="form-group ">
            <div class="col-xs-12">
             <?php echo $form->textField($model,'username', array('class' => 'form-control text-blue', 'placeholder'=>'Email')); ?>
           </div>
         </div>
         <div class="form-group ">

          <div class="col-xs-12">
           <?php echo $form->passwordField($model,'password', array('class' => 'form-control text-blue','placeholder'=>'Password')); ?>
         </div>
       </div>

       <div class="form-group text-right">
        <div class="col-xs-12">
            <?php echo CHtml::submitButton('Masuk', array('class' => 'btn btn-block btn-success w-md')); ?>
          </div>
        </div>

        <?php $this->endWidget(); ?>

      </div>

    </div>
  </div>    

