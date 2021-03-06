<!--Ivana Djunisijevic-->
<!--impl:Ivana Djunisijevic-->
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]> 
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Restooking - It's restaurants and booking.</title>
        <meta name="description" content="">
        <meta name="author" content="Ivana Djunisijevic">
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <!--[if lte IE 8]>
                        <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
                <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/isotope.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>flexslider/flexslider.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css" />


        <!-- Font Awesome -->

        <link href="<?php echo base_url(); ?>font/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i>Restooking</i></b></a> 
                    </div>
                    <!--/.navbar-header-->
                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="mainNav">

                            <li><a href="<?php echo base_url() . 'index.php/OtpustanjeKonobaraCtrl/index/' . $this->session->userdata('userid'); ?>" class="scroll-link">Otpusti konobara</a></li>
                            <li><a href="<?php echo base_url() . 'index.php/OtpustanjeKonobaraCtrl/profil/' . $this->session->userdata('userid'); ?>" class="scroll-link">Moj profil</a></li>
                            <li><a href="<?php echo base_url().'index.php/LogoutCtrl'; ?>" class="scroll-link">Izloguj se </a></li>
                        </ul>
                    </div>

                    <!--/.navbar-collapse--> 
                </nav>
                <!--/.navbar--> 
            </div>
            <!--/.container--> 
        </header>
        <!--/.header-->
        <div id="#top"></div>
        <section id="home">
            <div class="banner-container"> 
                <!-- Slider -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active" > 
                            <img src="<?php echo base_url(); ?>images/slides/1.jpg" alt="Chania">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>images/slides/2.jpg" alt="Chania">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>images/slides/3.jpg" alt="Flower">
                        </div>
                    </div>
                </div>
                <!-- end slider -->
            </div>
        </section>
        
        
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-2">
                    <H2>     Da li ste sigurni da želite da otpustite izabranog konobara? </H2>
                </div>
            </div>
            <div class="row">
                <div class="jumbotron" style="background-color:rgba(237, 231, 227, 0.87)">
                    <div class="col-sm-4 col-sm-offset-2">
                        <a href="<?php echo base_url() . 'index.php/OtpustanjeKonobaraCtrl/delete/' . $id ?>" class="btn btn-warning btn-lg btn-block" >DA</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo base_url() . 'index.php/OtpustanjeKonobaraCtrl/index/' . $this->session->userdata('userid') ?>" class="btn btn-warning btn-lg btn-block">NE</a>
                    </div>
                </div>
            </div>
            <div class="row">
                &nbsp;
            </div>
        </div>    






    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center"> Copyright 2016 <a href="<?php echo base_url(); ?>http://etf.bg.ac.rs">ETF Belgrade</a> </div>
            </div>
            <!-- / .row --> 
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
    <script src="<?php echo base_url(); ?>js/jquery-1.8.2.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script> 

</body>
</html>

