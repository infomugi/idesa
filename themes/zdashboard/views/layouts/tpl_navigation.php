

<section class="navbar-fixed-top">
  <section id="header" class="center-header">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">

            <div class="row">
              <div class="col-md-4 col-xs-4">
              </div>
              <div class="col-md-4 col-xs-4">
                <div class="navbar-header">
                  <span class="sr-only">Toggle navigation</span>
                  <a href="#" class="navbar-brand">
                    <h1><?php echo(Yii::app()->name); ?> </h1>
                  </a>

                </div>
              </div>                           

              <div class="col-md-4 col-xs-4">
                <div class="collapse navbar-collapse" id="user-bar">
                  <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(!Yii::app()->user->isGuest):
                      $this->widget('zii.widgets.CMenu', array(
                        'htmlOptions' => array('class' => 'nav navbar-nav navbar-right dropdown user-info'),
                        'encodeLabel'=>FALSE,
                        'items' => array(
                          array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                          array('label' => '<i class="fa fa-home"></i> Beranda', 'url' => array('/site/index'), 'visible' => !Yii::app()->user->isGuest),
                          array('label'=>'Profil', 'url'=>array('/user/view','id'=>YII::app()->user->id)),
                          array('label' => '<i class="fa fa-power-off"></i> Logout ('.Yii::app()->user->record->username.')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                          )
                        ));
                    endif;
                    ?>

                  </ul>
                </div>

              </div>

            </div>

          </div>
        </nav>
      </div>
    </div>
  </section>


  <div class="collapse navbar-collapse" id="menu-bar">
    <section id="nav" class="navigation">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-4 hidden-sm hidden-xs">

            <ol class="breadcrumb bc-nav">
              <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                  'links'=>$this->breadcrumbs,
                  'homeLink'=>CHtml::link('Beranda',array('site/index')),
                  'htmlOptions'=>array('class'=>'')
                  )); ?><!-- breadcrumbs -->
                <?php endif?> 
              </ol>
            </div>

            <div class="col-md-8">
              <nav>
                <?php

                if(!Yii::app()->user->isGuest):
                  if(YII::app()->user->getLevel()==1){

                   $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav navbar-nav nav-pills nav-center navbar-left'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                    'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(


                      array('label'=>'Verifikasi Surat <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Approve Surat SKTM','url'=>array('/sktm/daftarverifikasi')),
                          array('label'=>'Approve Surat Pengantar KK','url'=>array('/keluarga/daftarverifikasi')),
                          array('label'=>'Approve Surat Keterangan Pindah','url'=>array('/kepindahan/daftarverifikasi')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),     


                      array('label'=>'Kelola Data Masyarakat <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Daftar Surat SKTM','url'=>array('/sktm/daftar')),
                          array('label'=>'Daftar Surat Pengantar KK','url'=>array('/keluarga/daftar')),
                          array('label'=>'Daftar Surat Keterangan Pindah','url'=>array('/kepindahan/daftar')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),   


                      array('label'=>'Laporan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Rekapitulasi Surat SKTM','url'=>array('/sktm/report')),
                          array('label'=>'Rekapitulasi Surat Pengantar KK','url'=>array('/keluarga/report')),
                          array('label'=>'Rekapitulasi Surat Keterangan Pindah','url'=>array('/kepindahan/report')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),                                               


                      array('label'=>'Pengantar KK <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Tambah','url'=>array('/keluarga/tambah')),
                          array('label'=>'Kelola Kartu Keluarga','url'=>array('/keluarga/kelola')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),  

                      array('label'=>'Surat Pindah <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Tambah','url'=>array('/kepindahan/tambah')),
                          array('label'=>'Kelola Surat Pindah','url'=>array('/kepindahan/kelola')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),    

                      array('label'=>'SKTM <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Tambah','url'=>array('/sktm/tambah')),
                          array('label'=>'Kelola SKTM','url'=>array('/sktm/kelola')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),      

                      array('label'=>'Kelola Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                          array('label'=>'Pengguna','url'=>array('/user/kelola')),
                          array('label'=>'Bagian','url'=>array('/bagian/admin')),
                          array('label'=>'Agama','url'=>array('/agama/daftar')),
                          array('label'=>'Desa','url'=>array('/desa/daftar')),
                          array('label'=>'Kecamatan','url'=>array('/kecamatan/daftar')),
                          array('label'=>'Pekerjaan','url'=>array('/pekerjaan/daftar')),
                          array('label'=>'Pendidikan','url'=>array('/pendidikan/daftar')),
                          array('label'=>'Saudara','url'=>array('/sdrt/daftar')),
                          array('label'=>'Status Nikah','url'=>array('/statusnikah/daftar')),
                          ),'visible'=>Yii::app()->user->getLevel()==1),     

                          // array('label'=>'Agama <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM agama")->queryScalar().'</span>','url'=>array('/agama/daftar')),
                          // array('label'=>'Desa <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM desa")->queryScalar().'</span>','url'=>array('/desa/daftar')),
                          // array('label'=>'Kecamatan <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM kecamatan")->queryScalar().'</span>','url'=>array('/kecamatan/daftar')),
                          // array('label'=>'Pekerjaan <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM pekerjaan")->queryScalar().'</span>','url'=>array('/pekerjaan/daftar')),
                          // array('label'=>'Pendidikan <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM pendidikan")->queryScalar().'</span>','url'=>array('/pendidikan/daftar')),
                          // array('label'=>'Saudara <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM sdrt")->queryScalar().'</span>','url'=>array('/sdrt/daftar')),
                          // array('label'=>'Status Nikah <span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM statusnikah")->queryScalar().'</span>','url'=>array('/statusnikah/daftar')),
                          // ),'visible'=>Yii::app()->user->getLevel()==1),                     

                      // array('label'=>'Info <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                      //   'items'=>array(
                      //     array('label'=>'Log Aktifitas','url'=>array('/user/activity')),
                      //     array('label'=>'Pengguna Aktif','url'=>array('/user/top')),
                      //     ),'visible'=>Yii::app()->user->getLevel()==1),                         



                      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      ),
)); 

}elseif(YII::app()->user->getLevel()==2){

  $this->widget('zii.widgets.CMenu',array(
    'htmlOptions'=>array('class'=>'nav navbar-nav nav-pills nav-center navbar-left'),
    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
    'itemCssClass'=>'item-test',
    'encodeLabel'=>false,
    'items'=>array(

     array('label'=>'Beranda', 'url'=>array('site/index')),

     array('label'=>'Verifikasi Surat <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Approve Surat SKTM','url'=>array('/sktm/daftarverifikasi')),
        array('label'=>'Approve Surat Pengantar KK','url'=>array('/keluarga/daftarverifikasi')),
        array('label'=>'Approve Surat Keterangan Pindah','url'=>array('/kepindahan/daftarverifikasi')),
        ),'visible'=>Yii::app()->user->getLevel()==2),     

     array('label'=>'Laporan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Rekapitulasi Surat SKTM','url'=>array('/sktm/report')),
        array('label'=>'Rekapitulasi Surat Pengantar KK','url'=>array('/keluarga/report')),
        array('label'=>'Rekapitulasi Surat Keterangan Pindah','url'=>array('/kepindahan/report')),
        ),'visible'=>Yii::app()->user->getLevel()==2),     

     array('label'=>'Profile', 'url'=>array('/user/view','id'=>YII::app()->user->id)),                                            

     ),
    )); 

}elseif(YII::app()->user->getLevel()==3){

  $this->widget('zii.widgets.CMenu',array(
    'htmlOptions'=>array('class'=>'nav navbar-nav nav-pills nav-center navbar-left'),
    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
    'itemCssClass'=>'item-test',
    'encodeLabel'=>false,
    'items'=>array(

     array('label'=>'Beranda', 'url'=>array('site/index')),

     array('label'=>'Pengelolaan Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Surat SKTM','url'=>array('/sktm/kelola')),
        array('label'=>'Surat Pengantar KK','url'=>array('/keluarga/kelola')),
        array('label'=>'Surat Keterangan Pindah','url'=>array('/kepindahan/kelola')),
        ),'visible'=>Yii::app()->user->getLevel()==3),   

     array('label'=>'Pengantar KK <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Kelola','url'=>array('/keluarga/kelola')),
        ),'visible'=>Yii::app()->user->getLevel()==3),  

     array('label'=>'Surat Pindah <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Kelola','url'=>array('/kepindahan/kelola')),
        ),'visible'=>Yii::app()->user->getLevel()==3),    

     array('label'=>'SKTM <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Kelola','url'=>array('/sktm/kelola')),
        ),'visible'=>Yii::app()->user->getLevel()==3),  

     array('label'=>'Profile', 'url'=>array('/user/view','id'=>YII::app()->user->id)),                                            

     ),
    )); 

}else{

  $this->widget('zii.widgets.CMenu',array(
    'htmlOptions'=>array('class'=>'nav navbar-nav nav-pills nav-center navbar-left'),
    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
    'itemCssClass'=>'item-test',
    'encodeLabel'=>false,
    'items'=>array(

     array('label'=>'Beranda', 'url'=>array('site/index')),

     array('label'=>'Pelayanan Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Surat SKTM','url'=>array('/sktm/daftar')),
        array('label'=>'Surat Pengantar KK','url'=>array('/keluarga/daftar')),
        array('label'=>'Surat Keterangan Pindah','url'=>array('/kepindahan/daftar')),
        ),'visible'=>Yii::app()->user->getLevel()==4),      

     array('label'=>'Pengantar KK <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Tambah','url'=>array('/keluarga/tambah')),
        ),'visible'=>Yii::app()->user->getLevel()==4),  

     array('label'=>'Surat Pindah <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Tambah','url'=>array('/kepindahan/tambah')),
        ),'visible'=>Yii::app()->user->getLevel()==4),    

     array('label'=>'SKTM <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Tambah','url'=>array('/sktm/tambah')),
        ),'visible'=>Yii::app()->user->getLevel()==4),  

     array('label'=>'Profile', 'url'=>array('/user/view','id'=>YII::app()->user->id)),                                            

     ),
    )); 

}

endif;
?>
</nav>
</div>

</div>
</div>
</section>
</div>


</section>