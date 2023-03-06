<?php
include "koneksi.php";
$query= mysqli_query($koneksi,"select * from petugas");
$i=1;
while($data=mysqli_fetch_array($query)){
    $id=$data['id'];
    $password =md5($data['username']);
$query2= mysqli_query($koneksi,"update petugas set password='$password' where id='$id'");
$i++;
}
echo $i. "  "."Data Terupdate";

?>