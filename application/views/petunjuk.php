<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="67Q8j-a2FORBL-07asOUutX71Gkr-LFssq3BZ2xh8Zw" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIPA - Bahasa Indonesia Untuk Penutur Asing</title>
    <link rel="shortcut icon" href=<?php echo base_url('assets/img/icon2.ico')?> />
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42988408-2"></script>
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
                                    <a class="navbar-brand" href="home"><img src=<?php echo base_url('assets/img/bipa-transparan.png')?>
                                            width="200" height="50"></a>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="container wow fadeInUp delay-05s">
                    <div class="col-md-12 text-center section-padding">
                        <h2 class="bnr-sub-title">PETUNJUK PENGGUNAAN WEBSITE</h2>
                    </div>
                    <!-- Column -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card card-hover">
                                <div class="box bg-rectangle-brown text-center">
                                    <?php foreach ($content->result_array() as $key): ?>
                                    <h4 class="bnr-para-rectangle">
                                        <strong><?php echo $key['judul_indo'] ?></strong></h4>
                                    <h5 class="bnr-para-rectangle">
                                        <?php echo $key['isi_indo'] ?></h5>
                                    <br>
                                    <h4 class="bnr-para-rectangle">
                                    <i><strong><?php echo $key['judul_ing'] ?></strong></i></h4>
                                    <h5 class="bnr-para-rectangle">
                                    <i><?php echo $key['isi_ing'] ?></i></h5>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div><a href="<?php echo base_url('menu/prev_petunjuk/'.$key['id']);?>" class="btn-primary">&laquo; Previous</a>
                    <a href="<?php echo base_url('menu/next_petunjuk/'.$key['id']);?>" class="btn-primary">Next &raquo;</a>
                </div>
        </div>
        </section>
    </div>
    <!---->
    <!---->
    <footer id="footer">
        <div class="container">
            <div class="row text-center">
                <p> <?php echo date("Y"); ?> &copy; Rundeveloper. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!---->
    </div>
    <script src=<?php echo base_url('assets/js/jquery.min.js')?>></script>
    <script src=<?php echo base_url('assets/js/jquery.easing.min.js')?>></script>
    <script src=<?php echo base_url('assets/js/bootstrap.min.js')?>></script>
    <script src=<?php echo base_url('assets/js/wow.js')?>></script>
    <script src=<?php echo base_url('assets/js/jquery.bxslider.min.js')?>></script>
    <script src=<?php echo base_url('assets/js/custom.js')?>></script>
    <script src=<?php echo base_url('assets/contactform/contactform.js')?>></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



</body>

</html>