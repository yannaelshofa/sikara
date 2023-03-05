<?php 
include "koneksi.php";

?>
<h3>Proses Ijin</h3>
<form action="" method="post">
    Pilih
    <select class="form-control" aria-label="Default select example" name="id_m_ijin">
        <?php
     $query=mysqli_query($koneksi,"select * from mijin");
     while($data=mysqli_fetch_array($query)){

     ?>
        <option value="<?= $data['id'] ?>"><?= $data['keterangan'] ?></option>
        <?php
     }
    ?>


    </select>
    <br>
    <br>
    <div class="container">
        <div class="row">

            Tanggal &nbsp &nbsp <input type="datetime-local" id="tanggal_ijin" name="tanggal_ijin">
        </div>
    </div>
    <br>
    <input class="form-control" type="text" placeholder="Keterangan" aria-label="default input example"
        name="keterangan">
    <br>

    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php
$tanggal_ijin=$_POST['tanggal_ijin'];
$id_petugas=$_SESSION['id_petugas'];
$id_atasan=$_SESSION['id_atasan'];
$keterangan=$_POST['keterangan'];
$id_m_ijin=$_POST['id_m_ijin'];

if(isset($_POST['simpan'])){
echo $tanggal_ijin;
  if($tanggal_ijin != "" AND $keterangan !=""){
//INSERT INTO `t_ijin` (`id`, `id_petugas`, `status`, `tanggal`, `id_atasan`, `tanggal_aprrove`) VALUES (NULL, '1', '1', current_timestamp(), '2', current_timestamp());
  $query=mysqli_query($koneksi,"insert into t_ijin(id_petugas,tanggal_ijin,id_atasan,keterangan,id_m_ijin)
   values('$id_petugas','$tanggal_ijin','$id_atasan','$keterangan','$id_m_ijin') ");
  }
else{
    echo "tidak tersimpan";
}
}

?>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php
$query=mysqli_query($koneksi,"select * from v_ijin where id_petugas='$id_petugas'");
$i=1;
while($data=mysqli_fetch_array($query)){
   $date= date_create($data['tanggal_ijin']);
//    echo date_format($date,"d-m-Y");
    ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= date_format($date,"d-m-Y")?></td>
        <td><?= date_format($date,"H-i-s")?></td>
        <td><?= $data['keterangan1'] ?></td>
        <td><button class="btn btn-danger">Hapus</button></td>
    </tr>
    <?php
}

?>
</table>