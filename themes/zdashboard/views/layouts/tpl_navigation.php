

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
                          array('label'=>'Rekapitulasi Surat SKTM','url'=>array('/sktm/daftar')),
                          array('label'=>'Rekapitulasi Surat Pengantar KK','url'=>array('/keluarga/daftar')),
                          array('label'=>'Rekapitulasi Surat Keterangan Pindah','url'=>array('/kepindahan/daftar')),
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


    array('label'=>'Laporan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(

        array('label'=>'Perusahaan Per Kecamatan','url'=>array('/kecamatan/perusahaan')),
        array('label'=>'Perusahaan Per Industri','url'=>array('/industri/perusahaan')),
        array('label'=>'Perusahaan Per Serikat','url'=>array('/serikat/perusahaan')),

        ),'visible'=>Yii::app()->user->getLevel()==2),    

    array('label'=>'PP Perusahaan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
       array('label'=>'Ada PP','url'=>array('perusahaan/reportnot', 'kriteria'=>"perusahaan_nomor_sk", 'search'=>"''")),
       array('label'=>'Tidak Ada PP','url'=>array('perusahaan/report', 'kriteria'=>"perusahaan_nomor_sk", 'search'=>"''")),

       ),'visible'=>Yii::app()->user->getLevel()==2),    

    array('label'=>'Serikat Pekerja <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
       array('label'=>'Ada Serikat','url'=>array('perusahaan/reportnot', 'kriteria'=>"serikat_nama", 'search'=>"''")),
       array('label'=>'Tidak Ada Serikat','url'=>array('perusahaan/report', 'kriteria'=>"serikat_nama", 'search'=>"''")),

       ),'visible'=>Yii::app()->user->getLevel()==2), 

    array('label'=>'Bipartit <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
       array('label'=>'Ada Bipartit','url'=>array('perusahaan/reportnot', 'kriteria'=>"bipartit_nomor", 'search'=>"''")),
       array('label'=>'Tidak Ada Bipartit','url'=>array('perusahaan/report', 'kriteria'=>"bipartit_nomor", 'search'=>"''")),

       ),'visible'=>Yii::app()->user->getLevel()==2),   

    array('label'=>'Kontak Perusahaan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
       array('label'=>'Ada Kontak','url'=>array('perusahaan/reportnot', 'kriteria'=>"pimpinan", 'search'=>"''")),
       array('label'=>'Tidak Ada Kontak','url'=>array('perusahaan/report', 'kriteria'=>"pimpinan", 'search'=>"''")),

       ),'visible'=>Yii::app()->user->getLevel()==2),                      

    array('label'=>'Kelola Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(

        array('label'=>'<span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(id) FROM perusahaan")->queryScalar().'</span> Perusahaan','url'=>array('/perusahaan/admin')),
        array('label'=>'<span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(id) FROM industri")->queryScalar().'</span> Industri','url'=>array('/industri/kelola')),
        array('label'=>'<span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(id) FROM serikat")->queryScalar().'</span> Serikat','url'=>array('/serikat/kelola')),
        array('label'=>'<span class="badge badge-warning">'.Yii::app()->db->createCommand("SELECT COUNT(id) FROM kecamatan")->queryScalar().'</span> Kecamatan','url'=>array('/kecamatan/kelola')),

        ),'visible'=>Yii::app()->user->getLevel()==2),  

    array('label'=>'Profile Petugas', 'url'=>array('/user/view','id'=>YII::app()->user->id)),
    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    ),
  )); 

}else{

 $this->widget('zii.widgets.CMenu',array(
  'htmlOptions'=>array('class'=>'nav'),
  'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
  'itemCssClass'=>'item-test',
  'encodeLabel'=>false,
  'items'=>array(

    array('label'=>'Isi Data', 'url'=>array('/umpi/tambah')),
    array('label'=>'Kelola Data', 'url'=>array('/umpi/my')),
    array('label'=>'Profile', 'url'=>array('/user/view','id'=>YII::app()->user->id)),
    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    ),
  )); 

}
?>
</nav>
</div>

</div>
</div>
</section>
</div>


</section>