<?php
include ('koneksi.php');
$id  = $_POST['id'];
$nama_lengkap  = $_POST['nama_lengkap'];
$email = $_POST['email'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$jalan = $_POST['jalan'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kabupaten_kota = $_POST['kabupaten_kota'];
$alamat         = $jalan.'#'.$dusun.'#'.$rt.'#'.$rw.'#'.$kelurahan.'#'.$kecamatan.'#'.$kabupaten_kota;
$telepon = $_POST['telepon'];
$wa = $_POST['wa'];
$asal_sekolah = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];
$mulai_pkl = $_POST['mulai_pkl'];
$selesai_pkl = $_POST['selesai_pkl'];
$ubah       = $_POST['ubah_foto'];

if($ubah==1){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  
  // Set path folder tempat menyimpan fotonya
  $path = "../images/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  
    $queri = "select * from pkl WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $queri); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../images/".$data['foto'])) // Jika foto ada
      unlink("../images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $queri = "update pkl set id='".$id."',nama_lengkap='".$nama_lengkap."',tempat_lahir='".$tempat_lahir."',
	tanggal_lahir='".$tanggal_lahir."',jenis_kelamin='".$jenis_kelamin."',agama='".$agama."',
	alamat='".$alamat."',
	email='".$email."',telepon='".$telepon."',wa='".$wa."',foto='".$fotobaru."',asal_sekolah='".$asal_sekolah."',jurusan='".$jurusan."',mulai_pkl='".$mulai_pkl."',
	selesai_pkl='".$selesai_pkl."' WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $queri); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :// Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='?web=edit_biodata.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='?web=edit_biodata.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $queri = "update pkl set id='".$id."',nama_lengkap='".$nama_lengkap."',tempat_lahir='".$tempat_lahir."',
	tanggal_lahir='".$tanggal_lahir."',jenis_kelamin='".$jenis_kelamin."',agama='".$agama."',
	alamat='".$jalan."',
	email='".$email."',telepon='".$telepon."',wa='".$wa."',asal_sekolah='".$asal_sekolah."',jurusan='".$jurusan."',mulai_pkl='".$mulai_pkl."',
	selesai_pkl='".$selesai_pkl."' WHERE id='".$id."'";
  $sql = mysqli_query($koneksi, $queri); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: ?web=tabel2.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='?web=edit_biodata.php'>Kembali Ke Form</a>";
  }
}
?>
<script> location.replace("?web=tabel2.php"); </script>