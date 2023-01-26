<?php
include ('koneksi.php');
{
?>
                  <!--   Kitchen Sink -->
                    <?php
include ('koneksi.php');{
    ?>
<?php
        $carikode=mysqli_query($koneksi,"select max(id_user) from login");
        $datakode=mysqli_fetch_array($carikode);
        if ($datakode){
            $nilaikode=substr($datakode[0],0);
            $kode =(int) $nilaikode;
            $kode = $kode+1;
            $hasilkode = "".str_pad($kode,0,"0",STR_PAD_LEFT);
        } else {
            $hasilkode="1";
        }
    ?>
<script>
function huruf(evt){
    var charCode= (evt.which) ? evt.which : event.keyCode
    if((charCode <65 || charCode> 90)&&(charCode<97|| charCode> 122)&&charCode>32)
        return false;
    return true;
}
</script>

<script>
function angka(evt){
    var charCode= (evt.which) ? evt.which : event.keyCode
    if((charCode <48 || charCode> 57)&&charCode)
        return false;
    return true;
}
</script>   

<html>
<head>
<title>Biodata Pkl</title>
</head>
<body>
<div class="row">
    <div class="col-lg-12">
<form action="?web=insert_kelolaadmin.php" method="post" name="input" enctype="multipart/form-data">
<div class ="form-group">
<input type="hidden" name="id_user" class="form-control" value="<?php echo $hasilkode;?>" readonly class="form-control">
</div>
<div class ="form-group">
<label>Username :</label>
<input type="text" name="user" class="form-control" onkeypress="return hanyaHuruf(event)"required>
</div>
<div class="form-group">
   <label>Password : </label>
    <input type="password" name="pass"  class="form-control"required>
</div>
<div class="form-group">
    <label>Fullname :</label>
<input type="text" name="fullname" class="form-control" onkeypress="return hanyaHuruf(event)"required>
</div>
<div class="form-group">
  <input type="hidden" name="level" class="form-control" value="admin" readonly class="form-control">
</div>
<button type="submit" name="input" value="simpan" class="btn btn-default btn-lg">Simpan</button>
<button type="reset" name="reset" value="batal" class="btn btn-default btn-lg">reset</button>
</form>
</div>
</div>
</body>
</html>
<?php
}

?>
                     <!-- End  Kitchen Sink -->
                    <!--  end  Context Classes  -->
                
<?php
}
?>