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
  <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/zoom-hover.css')?>>

  <link rel="stylesheet" href="assets/gallery/styles.css">
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
                  <a class="navbar-brand" href="home"><img src="assets/img/bipa-transparan.png" width="200"
                      height="50"></a>
                </div>
              </div>
            </nav>
          </header>
        </div>
        <div class="container wow fadeInUp delay-05s">
          <div class="col-md-12 text-center section-padding">
            <h2 class="bnr-sub-title">INFORMASI KULINER MALANG</h2>
            <h3 class="bnr-para">Bahasa Indonesia Untuk Penutur Asing Level Bipa-2</h3>
          </div>
          <!-- Column -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-12">
              <div class="card card-hover">
                <div class="box bg-rectangle-brown text-center">
                  <div id="googleMap" style="width:100%; height:600px;"></div>

                  <script>
                    var marker;

                    function myMap() {
                      var mapProp = {
                        center: new google.maps.LatLng(-7.9163773, 112.5919303),
                        zoom: 12,
                      };
                      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                      var infoWindow = new google.maps.InfoWindow;
                      var bounds = new google.maps.LatLngBounds();
                      addMarker('-7.9153174', '112.5874507', '<p style="color:#000000;"><b>Sengkaling Culinary</b></p>');
                      addMarker('-7.9229791', '112.6079214', '<p style="color:#000000;"><b>Warung Mekarsari Wisata kuliner Desa Tegalgondo</b></p>');
                      addMarker('-7.9445183', '112.6034904', '<p style="color:#000000;"><b>Culinary Tourism Region Merjosari</b></p>');
                      addMarker('-7.952307', '112.6812208', '<p style="color:#000000;"><b>Sate Landak Bu Ria</b></p>');
                      addMarker('-7.9624118', '112.6367283', '<p style="color:#000000;"><b>Bakso President Malang</b></p>');
                      addMarker('-7.9683195', '112.6222444', '<p style="color:#000000;"><b>Bakso Bakar Pahlawan Trip</b></p>');
                      addMarker('-7.9749177', '112.6294863', '<p style="color:#000000;"><b>Warung Sate Gebug 1920</b></p>');
                      addMarker('-7.9825252', '112.6308006', '<p style="color:#000000;"><b>Alun-Alun Malang</b></p>');
                      addMarker('-7.9789871', '112.6351082', '<p style="color:#000000;"><b>Inggil Museum Resto</b></p>');
                      addMarker('-7.9807031', '112.6303339', '<p style="color:#000000;"><b>Toko Oen</b></p>');
                      addMarker('-7.9799327', '112.6574591', '<p style="color:#000000;"><b>Festival Dermaga Kuliner</b></p>');
                      addMarker('-7.9863103', '112.633456', '<p style="color:#000000;"><b>Warung Lama H. Ridwan</b></p>');
                      addMarker('-7.9849158', '112.6357064', '<p style="color:#000000;"><b>Rawon Brintik</b></p>');
                      addMarker('-7.9852478', '112.6315811', '<p style="color:#000000;"><b>Depot Mie Gadjah Mada Malang 1</b></p>');
                      addMarker('-7.9839357', '112.633971', '<p style="color:#000000;"><b>Rawon Nguling Restaurant</b></p>');
                      addMarker('-7.9823419', '112.6347113', '<p style="color:#000000;"><b>Ronde Titoni</b></p>');

                      function bindInfoWindow(marker, map, infoWindow, html) {
                        google.maps.event.addListener(marker, 'click', function () {
                          infoWindow.setContent(html);
                          infoWindow.open(map, marker);
                        });
                      }

                      function addMarker(lat, lng, info) {
                        var pt = new google.maps.LatLng(lat, lng);
                        bounds.extend(pt);
                        var marker = new google.maps.Marker({
                          map: map,
                          position: pt
                        });
                        map.fitBounds(bounds);
                        bindInfoWindow(marker, map, infoWindow, info);
                      }
                    }
                    google.maps.event.addDomListener(window, 'load', myMap);
                  </script>

                  <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHYTE9AMqsopXp4G7A8sgokbAQhQqD8b8&callback=myMap">
                  </script>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
        </div>
    </div>
    </section>
  </div>
</body>
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




</html>