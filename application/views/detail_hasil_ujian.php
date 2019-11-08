<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan dan Arsip Kota Malang</title>

    <!-- Custom fonts for this template-->
    <link href=<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?> rel="stylesheet" type="text/css">
    <link
        href=<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?php echo base_url('assets/css/sb-admin-2.min.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/sb-admin-2.css')?> rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="action_login">
                <div class="sidebar-brand-icon">
                    <!-- <img class="img-profile" src="assets/img/bipa-transparan.png" width="225" height="70"> -->
                </div>
                <!-- <div class="sidebar-brand-text mx-3">Perpustakaan Umum</div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Home -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('hasil_ujian')?>">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Hasil Ujian</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="modal" href="#" data-target="#myModal" aria-expanded="true"
                    aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php'?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <?php foreach ($content->result() as $key): ?>
                        <h1 class="h3 mb-0 text-gray-800">Hasil Ujian <?php echo $key->nama?></h1>
                        <?php endforeach ?>
                    </div>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <?php foreach ($content->result() as $key): ?>
                                    <h6 class="m-0 font-weight-bold text-primary">Asal <?php echo $key->asal?></h6>
                                    <?php endforeach ?>
                                </div>
                                <!-- Card Body -->

                                <div class="card-body">
                                    <!--main content start-->
                                    <section id="main-content">
                                        <section class="wrapper">
                                            <?php $numb=1 ?>
                                            <?php $label="Jawaban Nomor" ?>
                                            <?php foreach ($content->result() as $key): ?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j1?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j2?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j3?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j4?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j5?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j6?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j7?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j8?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j9?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j10?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j11?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j12?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j13?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j14?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j15?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j16?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j17?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j18?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j19?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j20?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j21?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j22?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j23?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j24?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-sm-2 control-label"><?php echo $label?>
                                                        <?php echo $numb?></label>
                                                    <?php $numb++ ?>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" class="form-control round-form"
                                                            name="isbn_number" value="<?php echo $key->j25?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                        </section>
                                    </section>
                                </div>
                            </div>
                            <!-- </form> -->
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
                <!-- Modal -->

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Logout</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin keluar?</p>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="alert alert-info" href=<?php echo base_url('logout')?>>Ya</a>
                                <button type="button" class="alert alert-info" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src=<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>></script>
        <script src=<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>

        <!-- Core plugin JavaScript-->
        <script src=<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>></script>

        <!-- Custom scripts for all pages-->
        <script src=<?php echo base_url('assets/js/sb-admin-2.min.js')?>></script>

        <!-- Page level plugins -->
        <script src=<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>></script>

        <!-- Page level custom scripts -->
        <script src=<?php echo base_url('assets/js/demo/chart-area-demo.js')?>></script>
        <script src=<?php echo base_url('assets/js/demo/chart-pie-demo.js')?>></script>
        <script src=<?php echo base_url('assets/js/is-number.js')?>></script>


</body>

</html>