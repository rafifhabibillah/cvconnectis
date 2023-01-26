<!DOCTYPE html>
<html lang="en">
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Biodata PKL Connectis Surakarta</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<form action="proses_login.php" method="post" name="input">

<body class="bg-dark" onload="noBack();"onpageshow="if (event.persisted) noBack();" onunload="">
<?php
include 'koneksi.php';
  error_reporting(0);
  session_start();
if ($_SESSION['level'] == "admin") 
{ header('location:index3.php');
}
?>
<?php
include 'koneksi.php';
?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><b>Login</b></div>
      <div class="card-body">
        <center><img src="config/img/connectislogo.GIF" class="img-circle" alt="yuuu" width="350" height="200"></center>
        <form>
          <div class="form-group">
            <label>username</label>
            <input class="form-control" type="text" placeholder="username" name="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
		  <td><input type="submit" class="btn btn-primary btn-block" name="Login"value="Login">
        </form>
        </div>
    </div>
  </div>
  <div class="container-fluid">
        <div class="text-center">
          <big><font color="gray"><b>Copyright © smkn 2 karangnyar</b></font></big>
        </div>
      </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
