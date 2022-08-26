<?php
include "../config/connection.php";
// Start the session

?>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Dashboard</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- selamat datang -->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    <strong>Selamat datang !</strong> Semoga harimu menyenangkan.
                </div>
            </div>
        </div>
        <!-- end selamat datang -->
        <?php
						
                        $sql = "SELECT * FROM tb_laporan
                        join tb_user
                        on tb_laporan.id_detail_user = tb_user.id_user";
                        $result = mysqli_query($koneksi, $sql);
                        $numrows= mysqli_num_rows($result);

                        
                        ?> 
        
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat text-dark">
                    <div class="card-body rounded-circle">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="font-size-24 ti-notepad"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-dark">Total Pengaduan</h5>
                            <h4 class="fw-medium font-size-24"><?=$numrows;?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat text-dark">
                    <div class="card-body rounded-circle">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="font-size-24 ti-no"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-dark">Data Terkonfirmasi</h5>
                            <h4 class="fw-medium font-size-24"><?=$numrows;?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat text-dark">
                    <div class="card-body rounded-circle">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="font-size-24 ti-no"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-dark">Data Teratasi</h5>
                            <h4 class="fw-medium font-size-24"><?=$numrows;?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>