<?php
include "koneksi.php";
$level=$_SESSION['level'];
$id_atasan=$_SESSION['id_petugas'];
$level=$_SESSION['level'];
// echo $id_atasan;
?>
<h3>Rekap Tanggal</h3>

<form action="" method="post">


    Tanggal &nbsp &nbsp <input type="date" name="tanggal_1"> &nbsp sd &nbsp<input type="date" name="tanggal_2">
    <br>
    <br>

    <button class="btn btn-primary" name="proses">Proses</button>
    <br>
    <br>


</form>
<?php
if(isset($_POST['proses'])){

    //echo $_POST['tanggal_ijin'];
    $tanggal_1 =$_POST['tanggal_1'];
    $tanggal_2 =$_POST['tanggal_2'];
    
    $date1=date_create($tanggal_1);
    $date2=date_create($tanggal_2);
    if($level=="1"){
        // SELECT id_petugas, nama_petugas,kantor,jabatan,COUNT(id_petugas) as jumlah FROM `v_ijin`  GROUP by id_petugas
        // $query =mysqli_query($koneksi,"SELECT * FROM `v_ijin` WHERE date(tanggal_ijin)='$tanggal'");
        $query =mysqli_query($koneksi,"SELECT id_petugas, nama_petugas,kantor,jabatan,COUNT(id_petugas) as jumlah FROM `v_ijin` WHERE date(tanggal_ijin) >= '$tanggal_1' AND date(tanggal_ijin) <= '$tanggal_2' GROUP by id_petugas");
    }
    else{
        
        $query =mysqli_query($koneksi,"SELECT id_petugas, nama_petugas,kantor,jabatan,COUNT(id_petugas) as jumlah FROM `v_ijin` WHERE date(tanggal_ijin) >= '$tanggal_1' AND date(tanggal_ijin) <= '$tanggal_2' AND id_atasan='$id_atasan' GROUP by id_petugas ");
    }
  

    echo "Tanggal :    ".date_format($date1,"d/m/Y")." sd  ".date_format($date2,"d/m/Y");
    ?>
<br>
<br>
<table class="table table-borderedr">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kantor</th>
        <th>Jumlah</th>
    </tr>
    <?php
    $i=1;
while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?= $i++?></td>
        <td><?= $data['nama_petugas'] ?></td>
        <td><?= $data['kantor'] ?></td>
        <td><?= $data['jumlah'] ?></td>
    </tr>
    <?php
}
?>
</table>

<?php
}
?>