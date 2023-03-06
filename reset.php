<?php
include "koneksi.php";
$id=$_GET['id'];
$password=md5("123");
$query=mysqli_query($koneksi,"update petugas set password='$password' where id='$id'");
header('location:http://localhost:8080/sikara/?page=petugas/index');

?>