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


    <link rel="stylesheet"
        href=<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css')?>>
    <script src=<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')?>></script>
    <script src=<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js')?>></script>
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
    <div id="overlay" onclick="off()"></div>
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
                <?php foreach ($content->result_array() as $key): ?>
                <div class="container wow fadeInUp delay-05s">
                        <form method="post" action="<?php echo base_url('CUjian/page/'.$key['id']);?>">
                        <!-- Column -->
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <br>
                                <br>
                                <div class="box bg-jawab">
                                    <h4 class="bnr-para-rectangle">
                                        <strong><?php echo $key['nomor_ujian']?></strong></h4>
                                    <br>
                                    <?php if( $key['text_1'] != NULL){?>
                                    <h5 class="bnr-para"><?php echo $key['text_1'] ?></h5>
                                    <?php } ?>
                                    <?php if( $key['gambar'] != NULL){?>
                                    <div>
                                        <img class="gambar" src="<?php echo base_url($key['gambar'])?>" alt="">
                                    </div>
                                    <?php } ?>
                                    <?php if( $key['text_2'] != NULL){?>
                                    <h5 class="bnr-para"><?php echo $key['text_2'] ?></h5>
                                    <?php } ?>
                                    <?php if($key['audio']!=NULL){ ?>
                                    <audio controls>
                                        <source src='<?php echo base_url('assets/audio/'.$key['audio'])?>'
                                            type="audio/mpeg" duration="infinity">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <?php } ?> 
                                    <br>
                                    <h4 class="bnr-para"><?php echo $key['pertanyaan'] ?></h4>
                                    <?php if($key['id']>=21){ ?>
                                    <div class="form-group">
                                        <input required type="text" class="form-control form-control-user" name="jawaban"
                                            id="jawaban" placeholder="Jawaban">
                                    </div>
                                    <?php }else{ ?>
                                    <div class="card card-hover">
                                        <label class="radio"><input type="radio" id="jawaban" name="jawaban"
                                                value='<?php echo $key['a'] ?>'>
                                            <?php echo $key['a'] ?></label>
                                        <label class="radio"><input type="radio" id="jawaban" name="jawaban"
                                                value='<?php echo $key['b'] ?>'>
                                            <?php echo $key['b'] ?></label>
                                        <label class="radio"><input type="radio" id="jawaban" name="jawaban"
                                                value='<?php echo $key['c'] ?>'>
                                            <?php echo $key['c'] ?></label>
                                        <label class="radio"><input type="radio" id="jawaban" name="jawaban"
                                                value='<?php echo $key['d'] ?>'>
                                            <?php echo $key['d'] ?></label>
                                    </div>
                                    <?php } ?>
                                        <button type="submit" name="submit" value="submit"
                                            class="btn btn-primary btn-user btn-block">
                                            Kirim Jawaban
                                        </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Modal -->
</body>



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