<html>
<title>Data Biodata</title>
  <link href="style_print.css" type="text/css" rel="stylesheet" />
<head>

</head>
<body>

 

<?php
include('koneksi.php');
{
?>
<center>


<div class="row">
<div class="col-lg-12">
<div class="table-responsive">


<table class="table table-bordered table-hover table-striped"border="1"width="90%" style="border-collapse:collapse;" align="center">
<tr>
	<th>NAMA LENGKAP</th>
	<th>TEMPAT LAHIR</th>
    <th>TANGGAL LAHIR</th>
    <th>JENIS KELAMIN</th>
    <th>AGAMA</th>
    <th>ALAMAT</th>
    <th>EMAIL</th>
    <th>TELEPON</th>
    <th>WA</th>
    <th>FOTO</th>
    <th>ASAL SEKOLAH</th>
    <th>JURUSAN</th>
    <th>MULAI PKL</th>
    <th>SELESAI PKL</th>	



</tr>
<?php
//perintah untuk menampilkan data
$queri="SELECT * from pkl";//menampilkan semua data dari table device
$hasil = mysqli_query ($koneksi,$queri); //funggsi untuk sql
?>
<?php while ($data=MYSQLI_fetch_array ($hasil)){ ?>
	
	<tr id="rowHover">
<td><?php echo $data['nama_lengkap']; ?> </td>
            <td><?php echo $data['tempat_lahir'];?> </td>
            <td><?php echo $data['tanggal_lahir'];?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['agama'];?></td>
            <td><?php echo $data['alamat'];?></td>
			<td><?php echo $data['email']; ?> </td>
			<td><?php echo $data['telepon'];?> </td>
			<td><?php echo $data['wa'];?></td>
            <th><?php echo "<img src='images/".$data['foto']."' width='120' height='120'>";?></th>
			<td><?php echo $data['asal_sekolah'];?></td>
			<td><?php echo $data['jurusan'];?></td>
			<td><?php echo $data['mulai_pkl'];?></td>
            <td><?php echo $data['selesai_pkl'];?></td>	
	</tr>
<?php
}
?>


</div>
</div>
</div>
 <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</table>
 
</center>
<?php
}
?>

</body>
</html>
   