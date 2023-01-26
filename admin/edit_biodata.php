<?php
include ('koneksi.php');
{
?>


                  <!--   Kitchen Sink -->
                    <html>
<head>

<?php
include ('koneksi.php');
$id=$_GET['id'];
$hasil=mysqli_query($koneksi,"select * from pkl where id='$id'");
$data=mysqli_fetch_array($hasil);
$alamat=$data['alamat'];
$pisah=explode("#",$alamat);
    ?>
<title>Pengolahan Form</title>

<script type="text/javascript">
function tampilkanPreview(foto,idpreview)
{
  var gb = foto.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>

<script>
        function hanyaHuruf(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if ((charCode < 65 || charCode > 90)&&(charCode < 97  || charCode > 122)&&  charCode > 32)
 
            return false;
          return true;
        }
    </script>

    <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>
    
</head>
<body>
<form action="?web=proses_edit_biodata.php" method="post" name="input" enctype="multipart/form-data">
<br><legend><font face="david" size="+3" color="black"><b>Form Biodata Siswa PKL </b></font></legend>




<FORM ACTION="?web=insert_biodata.php" METHOD="POST" name="Input"">
<table border="0"cellpadding="5">

<div class="form-group">
   <label>ID : </label>
    <input type="text" name="id" class="form-control"value="<?php echo $data['id'];?>" readonly class="form-control">
</div>
<div class="form-group">
   <label>Nama Lengkap: </label>
    <input type="text" name="nama_lengkap"onkeypress="return hanyaHuruf(event)" class="form-control"value="<?php echo $data['nama_lengkap'];?>"required>
</div>


    <div class="form-group">
   <label>Tempat Lahir: </label>
    <input type="text" name="tempat_lahir"onkeypress="return hanyaHuruf(event)" class="form-control" value="<?php echo $data['tempat_lahir'];?>"required>
</div>

    <div class="form-group">
    <label>Tanggal Lahir: </label>
    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir'];?>"required>
</div>
<div class="form-group"required>
    <label>Jenis Kelamin: </label>
    <input type ="radio"name="jenis_kelamin"value="laki-laki">laki - laki
    <input type ="radio"name="jenis_kelamin"value="perempuan">Perempuan 
</div>
<div class="form-group">
  <label>Agama :</label>
  <select name="agama" class="form-control"required>
     <option >-----</option>
    <option value="islam">Islam</option>
     <option value="kristen">Kristen</option>
       <option value="katolik">Katolik</option>
         <option value="budha">Budha</option>
</select>
</div>




<div class="col-lg-3">
   <label>Jalan: </label>
    <input type="text" name="jalan" class="form-control" value="<?php echo $pisah[0];?>">
</div>

<div class="col-lg-3">
   <label>Dusun: </label>
    <input type="text" name="dusun" class="form-control" value="<?php echo $pisah[1];?>">
</div>
    
    <div class="col-lg-3">
   <label>RT: </label>
    <input type="text" name="rt" class="form-control" value="<?php echo $pisah[2];?>">
</div>

<div class="col-lg-3">
   <label>RW: </label>
    <input type="text" name="rw" class="form-control" value="<?php echo $pisah[3];?>">
</div>

<div class="col-lg-4">
   <label>Kelurahan: </label>
    <input type="text" name="kelurahan" class="form-control" value="<?php echo $pisah[4];?>">
</div>

<div class="col-lg-4">
   <label>kecamatan: </label>
    <input type="text" name="kecamatan" class="form-control" value="<?php echo $pisah[5];?>">
</div>

<div class="col-lg-4">
   <label>Kabupaten/Kota: </label>
    <input type="text" name="kabupaten_kota" class="form-control" value="<?php echo $pisah[6];?>">
</div>
<div class="form-group">
   <label >Email: </label>
   <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>" >
</div>
<div class="form-group">
   <label >Telepon: </label>
    <input type="text" name="telepon"onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $data['telepon'];?>">
</div>


<div class="form-group">
   <label>WA: </label>
    <input type="text" name="wa"class="form-control" value="<?php echo $data['wa'];?>">
</div>
<div class="form-group">
<label>Foto :</label>
<input type="checkbox" size ="25" value="1"  name="ubah_foto"> cheklis jika ingin ubah foto<br>
    <input type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')"/>
<br><b>Preview Gambar</b><br>
<img id="preview" width="350px"/>
  </div>
<div class="form-group">
   <label>Asal Sekolah: </label>
    <input type="text" name="asal_sekolah"class="form-control" value="<?php echo $data['asal_sekolah'];?>">
</div>
<div class="form-group">
  <label>Jurusan :</label>
  <select name="jurusan" class="form-control">
     <option >-----</option>
    <option value="RPL">RPL</option>
     <option value="TKJ">TKJ</option>
     
</select>
</div>


<div class="form-group">
   <label>Mulai PKL : </label>
    <input type="date" name="mulai_pkl"class="form-control" value="<?php echo $data['mulai_pkl'];?>">
</div> 
<div class="form-group">
   <label>Selesai PKL : </label>
    <input type="date" name="selesai_pkl"class="form-control" value="<?php echo $data['selesai_pkl'];?>">
</div> 
<tr><td><button type="submit" value="simpan" name="input" class="btn btn-default btn-lg">SIMPAN</button> </td>
<td><a href="tabel.php"class="btn btn-warning btn-md">LIHAT DATA</a></td></tr>

</FORM>
</table>
</FORM>
</form>
</body>
</html>
                     <!-- End  Kitchen Sink -->
                    <!--  end  Context Classes  -->
                
<?php
}
?>