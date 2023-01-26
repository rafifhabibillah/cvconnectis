<?php
include ('koneksi.php');
{
?>
                  <!--   Kitchen Sink -->
                    <?php
include ('koneksi.php');{
    ?>
<?php
        $carikode=mysqli_query($koneksi,"select max(id_silabus) from silabustkj");
        $datakode=mysqli_fetch_array($carikode);
        if ($datakode){
            $nilaikode=substr($datakode[0],1);
            $kode =(int) $nilaikode;
            $kode = $kode+1;
            $hasilkode = "S".str_pad($kode,3,"0",STR_PAD_LEFT);
        } else {
            $hasilkode="S001";
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
    if((charCode <48 || c harCode> 57)&&charCode)
        return false;
    return true;
}
</script>   

<html>
<head>
<title>Silabus Pkl TKJ</title>
</head>
<body>
<div class="row">
    <div class="col-lg-12">
<form action="?web=insert_silabus.php" method="post" name="input" enctype="multipart/form-data">
<div class ="form-group">
<label>Id :</label>
<input type="text" name="id_silabus" class="form-control" value="<?php echo $hasilkode;?>" readonly class="form-control">
</div>
<div class ="form-group">
<label>Silabus :</label>
<input type="text" name="silabus" class="form-control">
</div>
<button type="submit" name="input" value="simpan" class="btn btn-default btn-lg">Simpan</button>
<button type="reset" name="reset" value="batal" class="btn btn-default btn-lg">Batal</button>
<a href ="?web=tabel_biodata.php" class="btn btn-success btn-lg">lihat data</a>
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