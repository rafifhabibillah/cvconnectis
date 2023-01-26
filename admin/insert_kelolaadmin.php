<?php
include ('koneksi.php');
// menyimpan data kedalam variabel
$id_user   = $_POST['id_user'];
$Username   = $_POST['user'];
$Password  = md5($_POST['pass']);
$Fullname  = $_POST['fullname'];
  $queri = "insert into login 
  (id_user,username,password,fullname) 
  values ('$id_user','$Username','$Password',
	'$Fullname')";
  $hasil = mysqli_query($koneksi, $queri); 
  if($hasil){ 
	} else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='?web=kelolaadmin.php'>Kembali Ke Form</a>";
  } 
?>

<script> location.replace("../logout.php"); </script>