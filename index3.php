<?php
include ('koneksi.php');
{
?>
<?php
session_start();
if (!($_SESSION['level']=="admin")) {
    header('Location:index3.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
      <title>Biodata PKL Connectis Surakarta</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="config/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="config/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="config/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="config/img/logo1.gif" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">CV.Conntectis Jati Informatika</h4>
                                        <h5>Admin Connectis</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>anda adalah bagian dari Admin connectis saat ini</strong></h5>
                                <h5><strong>Gunakan dengan sebaik mungkin untuk mengelola halaman web ini</strong></h5>
                                <hr />
                                <a href="login.php" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="index3.php">Dashboard</a></li>
                            <li><a href="admin/index.php?web=tabel.php">Data Siswa</a></li>
                            <li><a href="admin/index.php?web=kelolaadmin.php">Kelola Admin</a></li>
                            <li><a href="admin/index.php?web=tabelsilabus.php">Silabus Siswa</a></li>
                        <li><a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a></li>
                        </ul>
                   
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><small>Selamat Datang </small>&nbsp;<big><?php echo $_SESSION['fullname'];?></big></h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        This is a simple admin template that can be used for your small project or may be large projects. This is free for personal and commercial use.
                    </div>
                </div>

            </div>
            <div class="row">
<div class="panel-body">
                    <h1><b>Sejarah SoloNet</b></h1>
                    <img src="images/connectislogo.gif" height="200" width="300" align="left" border="5" style="border-color:yellow">
                    <h2><b>Cv. Connectis<small>  Jati Informatika</b></small></h2>
                    Cv.Connectis Jati Informatika merupakan salah satu bagian dari perusahaan Solonet yang bergerak dalam bidang : Software,Hardware dan Networking.

       <p>Saat ini SoloNet berkembang menjadi sebuah perusahaan IT yang memiliki konsep Total Solusi. Dimana selain layanan Internet, kami juga mengembangkan produk lain. Di antaranya adalah Software, Hardware (SoloNet CompuShop), Fiber Optic Installation, Networking, Web Hosting, Web Development, Web Maintenance, Pelatihan-pelatihan dan seluruh kebutuhan IT Maintenance. 

      <p>Oleh karena itu Solonet membuka semacam tempat PKL-an / semacam kursus untuk para pelajar dan mahasiswa yang ingin lebih memperdalam tentang dunia <b>informatika dan  networking</b> dengan mendirikan CV.Connectis Jati Informatika. yang bergerak dalam pelatihan siswa-siswi dan mahasiswa-mahasiswi dalam bidang <b>Teknik Komputer Jaringan</b> dan <b> Rekayasa Perangkat Lunak</b><br>
        <center><p> <b><h4>Untuk bidang Teknik Komputer Jaringan mempelajari tentang :</h4></b></center>
            <p>1.Networking
                <p>2.Pemasangan CCTV dan Internet Rumahan
                    <p>3.Perbaikan Hardware Komputer dan Laptop
                        <br>
<center><p> <b><h4>Untuk bidang Rekayasa Perangkat Lunak mempelajari tentang :</h4></b></center>
            <p>1.HTML Program
                <p>2.Database
                    <p>3.Logika Pemrograman
                        <p>4.Bootsrap & PHP
                            </div>
                    </div>
                </div>
            </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>&copy; <small>Copyright by : <b>PKL SMK NEGRI 2 KARANGANYAR 2018 </b></small></center>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="config/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="config/js/bootstrap.js"></script>
</body>
</html>
<?php
}
?>