<?php
include 'koneksi.php';

$user = $_POST['username'];
$password =md5($_POST['password']);

$query ="select * from pkl where username ='$user'";
$tampil = mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($tampil);

if ($user == $data['username'] and $password == $data['password'])
{
	?>
	<script>location.replace("view/index2.php?web=edit_biodata2.php&username=<?php echo $user; ?>");</script>
	<?php
}
else {
header('location:index.php');
}
?>