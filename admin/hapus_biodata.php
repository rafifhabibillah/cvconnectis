<?php
include ('koneksi.php');
$id=$_GET['id'];
$sql= "delete from pkl  where id='$id'";
mysqli_query($koneksi,$sql);
// header('location:?web=tabel_biodata.php');
?>
<script>location.replace("?web=tabel.php");</script>