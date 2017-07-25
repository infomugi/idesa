<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Template YII oleh Mugi Rachmat - www.infomugi.com">
  <meta name="author" content="Mugi Rachmat">
  <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/image/favicon/favicon.png">
  <script>
    window.print();
  </script>
</head>

<style type="text/css">
  h1,h2{font-family: tahoma;margin-top: 0px;margin-bottom:font-weight:400;}
  .header{text-align: center;line-height: 10px;}
  .content{font-size: 14px;}
  .kotak{width: 100%;}
  h1,h2{line-height: 5px}
  h1{margin-bottom: 15px}
  h2{margin-bottom: -5px}
  .kiri{width: 55%;float: left;text-align: left;}
  .kanan{width: 45%;float: right;}
  .header-kiri{width: 15%;float: left;}
  .header-kanan{width: 85%;float: right;}  
  .konten-header-kanan{margin-top: 11px;}  
  .isi, .jadwal{width: 100%;float: right;}
  .judul{font-size: 28px;font-family: tahoma}
  .info{font-size: 15px;letter-spacing: 1px;}
  .subinfo{font-size: 12px;margin-bottom: 2px;letter-spacing: 2px;}
  body{font-size: 12px;font-family: tahoma;color:#000000;font-weight: 400}
  .line{background: #FFF;padding: 0px;margin-top: 2px}
  .line2{background: #FFF;padding: 1px;margin-top: 2px}
  .line3{background: #FFF;padding: 2px;margin-top: 2px}
  .
</style>

<body class="">
  <div id="invoice" style="width: 800px;text-align: center;padding: 10px;height:820px">
    <div class="header-kiri">
      <center>
        <img src="<?php echo Yii::app()->baseUrl; ?>/images/logo-white.png" style="width:140px;"/>
      </center>
    </div>
    <div class="header-kanan">

      <div class="konten-header-kanan">
        <H2>PEMERINTAH KABUPATEN BANDUNG</H2>
        <H3>KECAMATAN PAMEUNGPEUK</H3>
        <H1>DESA BOJONGKUNCI</H1>
        <div class="info">
          Jl. Tanjung Hilir No. Kp. Sukmanah Rt.03/03 Pameungpeuk Bandung Kode Pos 4376
        </div>
      </div>

    </div>
  </center>  

  <img src="<?php echo Yii::app()->baseUrl; ?>/images/line.png" style="margin-top:-15px;"/>
  <div class="content">
    <?php echo $content; ?>
  </div>

</div>
</body>
</html>


