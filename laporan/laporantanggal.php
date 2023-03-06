<?php
include "koneksi.php";
$level=$_SESSION['level'];
$id_atasan=$_SESSION['id_petugas'];
$level=$_SESSION['level'];
// echo $id_atasan;
?>
<h3>Laporan Tanggal</h3>

<form action="" method="post">


    Tanggal &nbsp &nbsp <input type="date" name="tanggal_ijin" name="tanggal_ijin">
    <br>
    <br>

    <button class="btn btn-primary" name="proses">Proses</button>


</form>
<?php
if(isset($_POST['proses'])){

    //echo $_POST['tanggal_ijin'];
    $tanggal =$_POST['tanggal_ijin'];
    $date=date_create($tanggal);
    if($level=="1"){
       
        $query =mysqli_query($koneksi,"SELECT * FROM `v_ijin` WHERE date(tanggal_ijin)='$tanggal'");
    }
    else{
        
        $query =mysqli_query($koneksi,"SELECT * FROM `v_ijin` WHERE date(tanggal_ijin)='$tanggal' AND id_atasan='$id_atasan'");
    }
  

    echo "Tanggal :    ".date_format($date,"d/m/Y");
    ?>
<table class="table table-borderedr">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kantor</th>
        <th>Alasan</th>
    </tr>
    <?php
    $i=1;
while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?= $i++?></td>
        <td><?= $data['nama_petugas'] ?></td>
        <td><?= $data['kantor'] ?></td>
        <td><?= $data['keterangan1'] ?></td>
    </tr>
    <?php
}
?>
</table>

<?php
}
?>