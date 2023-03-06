<?php
include"koneksi.php";
// Jumlah Siswa
// $query=mysqli_query($koneksi,"select * from siswa");
// $jSiswa=mysqli_num_rows($query);

// Jumlah User
$query=mysqli_query($koneksi,"select * from petugas");
$jPetugas=mysqli_num_rows($query);
// Jumlah Bayar
// $query=mysqli_query($koneksi,"select * from bayar");
// $jBayar=mysqli_num_rows($query);
// Jumlah Pembayaran
// $query=mysqli_query($koneksi,"select distinct(nis) from pembayaran");
// $jPembayaran=mysqli_num_rows($query);
// $persetase= ($jPembayaran/$jSiswa*100).'%';
// echo $persetase;

?>
<h2>E-moji Elektronik Mohon Ijin</h2>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->


    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jPetugas ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            IJIN HARI INI</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Sikara 1"?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tasks Card Example -->
    <div class="col-xl-4     col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">IJIN BULAN LALU
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= "Sikara 1"?></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: <?= $persetase ?>" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-xl-12 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Ijin</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the
                <code>/js/demo/chart-area-demo.js</code> file.
            </div>
        </div>

        <!-- Bar Chart -->


    </div>

    <!-- Donut Chart -->

</div>