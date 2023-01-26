<?php
include ('koneksi.php');
$id  	= $_POST['id'];
$pencapaian 	= $_POST['pencapaian'];
$sql="update pencapaiantkj set id='$id',pencapaian='$pencapaian' where id='$id'" ;
mysqli_query($koneksi,$sql);
?>
<script> location.replace("?web=tabelsilabus.php"); </script>