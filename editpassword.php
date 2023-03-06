<?php
include "koneksi.php";
$id=$_POST['id'];
$password=md5($_POST['password']);
// echo $id."-".$password;
$query=mysqli_query($koneksi,"update petugas set password='$password' where id='$id'");
header('location:logout.php');


?>