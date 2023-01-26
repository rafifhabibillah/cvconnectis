<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
	<?php
include ('koneksi.php');{
	?>
	<?php
		$carikode=mysqli_query($koneksi,"select max(id) from pkl");
		$datakode=mysqli_fetch_array($carikode);
		if ($datakode){
			$nilaikode=substr($datakode[0],1);
			$kode =(int) $nilaikode;
			$kode = $kode+1;
			$hasilkode = "K".str_pad($kode,3,"0",STR_PAD_LEFT);
		} else {
			$hasilkode="K001";
		}
	?>
<body class="bg-dark">
<form action="insert_register.php" method="post" name="input">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><b>Register Form </b></div>
      <div class="card-body">
        <center><img src="config/img/connectislogo.GIF" class="img-circle" alt="yuuu" width="350" height="200"></center>
        <form>
		<div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                
			<input type="hidden" name="id" class="form-control" value="<?php echo $hasilkode;?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nama Lengkap</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter your name" name="nama_lengkap">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="Email">
          </div>
		  <div class="form-group">
            <label for="exampleInputusername">Username</label>
            <input class="form-control" id="exampleInputUsername1" type="text"  placeholder="Enter Username" name="Username">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="Password">
              </div>
            </div>
          </div>
          <center><input type="submit"name="input"value="simpan">
          <input type="reset"name="reset"value="Reset"></center>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
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
<?php
}
?>
</html>
