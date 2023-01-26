<?php
include ('koneksi.php');
// menyimpan data kedalam variabel
$id_silabus   = $_POST['id_silabus'];
$silabus   = $_POST['silabus'];
$queri = "insert into silabustkj (id_silabus,silabus) values ('$id_silabus','$silabus')";
  $hasil = mysqli_query($koneksi, $queri); 
?>

<script> location.replace("?web=tabelsilabus.php"); </script>