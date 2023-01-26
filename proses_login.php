<?php
include 'koneksi.php';
session_start();

$user = $_POST['username'];
$password = md5($_POST['password']);

$query ="select * from login where username ='$user'";
$tampil = mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($tampil);

$_SESSION['fullname'] = $data['fullname'];
if ($user == $data['username'] and $password == $data['password'])
{
	$_SESSION['level']= $data['level'];
	
if ($_SESSION['level'] == "admin") {header('location:index3.php');}
}
else {header('location:login.php');}
?>