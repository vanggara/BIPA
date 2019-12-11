<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="67Q8j-a2FORBL-07asOUutX71Gkr-LFssq3BZ2xh8Zw" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIPA - Bahasa Indonesia Untuk Penutur Asing</title>
    <link rel="shortcut icon" href=<?php echo base_url('assets/img/icon2.ico')?> />
    <meta name="description" content="Made in Rundeveloper.com">
    <meta name="keywords" content="website desa, jasa pembuatan website jombang, jasa pembuatan website, jasa website, bikin website, buat website, malang, bikin aplikasi malang, jasa website malang, 
    jasa aplikasi malang, jasa pembuatan website malang, kota malang, aplikasi jombang, jombang, software jombang, website jombang, bikin website jombang,
    info jombang, bikin aplikasi jombang">

    <link rel="stylesheet" type="text/css"
        href=<?php echo base_url('https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/jquery.bxslider.css')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/font-awesome.min.css')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/bootstrap.min.css')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/animate.css')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/style.css')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/cekdomain.css')?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/zoom-hover.css')?>>

    <link rel="stylesheet" href=<?php echo base_url('assets/gallery/styles.css')?>>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=<?php echo base_url('https://www.googletagmanager.com/gtag/js?id=UA-42988408-2')?>></script>
</head>

<body>
    <div class="loader"></div>
    <div id="myDiv">
        <!--HEADER-->
        <div class="header">
            <section class="wm">
                <div class="bg-color">
                    <header id="main-header">
                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="container">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href=<?php echo base_url('home')?>><img
                                            src=<?php echo base_url('assets/img/bipa-transparan.png')?> width="200"
                                            height="50"></a>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="container wow fadeInUp delay-05s">
                    <div class="col-md-12 text-center section-padding">
                        <?php if($score < 70){ ?>
                        <h3 class="bnr-para-rectangle">Sayang sekali, Anda belum berhasil menyelesaikan pelajaran ini !</h3>
                        <?php }else{ ?>
                        <h3 class="bnr-para-rectangle">Wow, Anda berhasil menyelesaikan pelajaran ini !</h3>
                        <?php } ?>
                        <h3 class="bnr-para-rectangle" color="red">Score anda : <?php echo $score ?></h3>
                    </div>
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="box text-center">
                                <?php if($score < 70){ ?>
                                <h1 class="smile-white"><i class="fa fa-frown-o"></i>
                                </h1>
                                <?php }else{ ?>
                                <h1 class="smile-white"><i class="fa fa-smile-o"></i></h1>
                                <?php } ?>
                                <button type="button" class="btn btn-success"
                                    onclick="location.href='<?php echo base_url('home')?>'">Back to Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>

</body>

<!---->
<!---->
</div>
<script src=<?php echo base_url('assets/js/jquery.min.js')?>></script>
<script src=<?php echo base_url('assets/js/jquery.easing.min.js')?>></script>
<script src=<?php echo base_url('assets/js/bootstrap.min.js')?>></script>
<script src=<?php echo base_url('assets/js/wow.js')?>></script>
<script src=<?php echo base_url('assets/js/jquery.bxslider.min.js')?>></script>
<script src=<?php echo base_url('assets/js/custom.js')?>></script>
<script src=<?php echo base_url('assets/contactform/contactform.js')?>></script>
<script src=<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')?>></script>


</html>