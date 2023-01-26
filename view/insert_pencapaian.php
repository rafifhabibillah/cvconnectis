<?php
include ('koneksi.php');
$id  	= $_POST['id'];
$pencapaian 	= $_POST['cek'];
$sql="update pencapaiantkj set id='$id',pencapaian='$pencapaian' where id='$id'" ;
mysqli_query($koneksi,$sql);
?>
<script> location.replace("?web=tabelsilabus.php"); </script>