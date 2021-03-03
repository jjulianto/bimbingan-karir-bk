<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h4 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="/list-guru" class="dashboard-card">
                <div class="card border-left-primary shadow h-100 py-2" id="dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Guru</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1 Guru</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <a href="/riwayat-konsultasi-siswa" class="dashboard-card">
                <div class="card border-left-success shadow h-100 py-2" id="dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Konsultasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">3 Pesan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <a href="/profile-siswa" class="dashboard-card">
                <div class="card border-left-warning shadow h-100 py-2" id="dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Profile</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= session('nama'); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments mr-2"></i>Jumlah Konsultasi per Minggu</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-friends mr-2"></i>Jumlah Siswa per Kelas</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-3 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Kelas 10
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Kelas 11
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Kelas 12
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-warning"></i> Kelas 13
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>
<?= $this->section('list-user'); ?>
List Guru
<?= $this->endSection(); ?>
<?= $this->section('dashboard'); ?>
/dashboard-siswa
<?= $this->endSection(); ?>
<?= $this->section('list-users'); ?>
/list-guru
<?= $this->endSection(); ?>
<?= $this->section('konsultasi'); ?>
/riwayat-konsultasi-siswa
<?= $this->endSection(); ?>
<?= $this->section('profile'); ?>
/profile-siswa
<?= $this->endSection(); ?>