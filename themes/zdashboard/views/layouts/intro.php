<!DOCTYPE html>
<html lang="en">
<?php
$url = Yii::app()->baseUrl."/index.php?r="; 
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
Yii::app()->clientScript->registerCoreScript('jquery');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="http://wpocean.com/tf/html/anjum/images/fevicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/bootstrap.min.css">
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/font-awesome.min.css">
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/animate.min.css">
    <!-- Mobile Menu CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/meanmenu.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/intro/css/responsive.css">

</head>

<body>
    <!-- prelaoder start -->
    <div id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- prelaoder end -->
    <header>
        <div class="header-area navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="logo">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/login.png" width="80px" class="img-responsive text-center">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <!-- main menu start-->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="#" data-toggle="collapse" data-target="#sktm">SKTM</a></li>
                                    <li><a href="#" data-toggle="collapse" data-target="#pindah">Surat Pindah</a></li>
                                    <li><a href="#" data-toggle="collapse" data-target="#kk">Surat Pengantar KK</a></li>
                                    <li><a href="<?php echo $url; ?>site/login">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main menu end-->
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php echo $content; ?>

    <!-- Bootstrap JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/bootstrap.min.js"></script>
    <!-- Mobile Menu JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/jquery.meanmenu.js"></script>
    <!-- Magnific popup -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/magnific-popup.min.js"></script>
    <!-- Magnific popup -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/jquery.scrollUp.js"></script>
    <!-- WOW JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/wow-1.3.0.min.js"></script>
    <!-- Easing JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/easing-min.js"></script>
    <!-- Waypoints JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/waypoints.js"></script>
    <!-- countdown JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/countdown.js"></script>
    <!-- ajaxchimp JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/ajaxchimp.js"></script>
    <!-- ajax-mail JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/ajax-mail.js"></script>
    <!-- Active JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/intro/js/active.js"></script>
</body>

</html>