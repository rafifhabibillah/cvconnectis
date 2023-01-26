<?php
include ('koneksi.php');
$id  = $_POST['id'];
$nama_lengkap  = $_POST['nama_lengkap'];
$email = $_POST['Email'];
$username = $_POST['Username'];
$password = md5($_POST['Password']);
$sql="insert into pkl(id,nama_lengkap,email,username,password) values('$id','$nama_lengkap','$email','$username','$password')";
mysqli_query($koneksi,$sql);
?>
<script>location.replace("view/index2.php?web=edit_biodata.php&id=<?php echo $id; ?>");</script>