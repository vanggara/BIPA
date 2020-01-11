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

    <link rel="stylesheet" href="assets/gallery/styles.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42988408-2"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #1b4873;
        }
    </style>
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
                                    <a class="navbar-brand" href="home"><img src="assets/img/bipa-transparan.png"
                                            width="200" height="50"></a>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="container wow fadeInUp delay-05s">
                    <div class="col-md-12 text-center section-padding">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 class="bnr-sub-title text-black">KOSA KATA</h2>
                        <h3 class="bnr-para text-black"><i>(VOCABULARY)</i></h3>
                    </div>
                    <!-- Column -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card card-hover">
                                <div class="box bg-rectangle-brown text-center">
                                    <h5 class="bnr-para-rectangle">
                                        <table>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Bahasa Indonesia</th>
                                                <th class="text-center">Bahasa Inggris</th>
                                                <th class="text-center">Keterangan</th>
                                            </tr>
                                            <?php foreach ($content->result_array() as $key): ?>
                                            <tr>
                                                <td><?php echo $key['id_kosa_kata'] ?></td>
                                                <td><?php echo $key['indonesia'] ?></td>
                                                <td><i><?php echo $key['inggris'] ?></i></td>
                                                <td><?php echo $key['keterangan'] ?></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </table>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
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