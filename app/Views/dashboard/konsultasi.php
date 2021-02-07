<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800">Riwayat Konsultasi</h1>
    <div class="row mb-4">
        <div class="col-md-12 card-konten">
            <div class="item">
                <div class="featured-image mb-3">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_1.svg" alt="This is a cool picture" />
                </div>
                <div class="description">
                    <h5 class="font-weight-bold">Tamaki Erina</h5>
                    <p class="text-muted">Tanggal : 16 July 2020</p>
                    <span class="badge status badge-success">Selesai</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12 card-konten">
            <div class="item">
                <div class="featured-image mb-3">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="This is a cool picture" />
                </div>
                <div class="description">
                    <h5 class="font-weight-bold">Senku Ishigami</h5>
                    <p class="text-muted">Tanggal : 08 July 2020</p>
                    <span class="badge status badge-danger"> Belum Selesai</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12 card-konten">
            <div class="item">
                <div class="featured-image mb-3">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="This is a cool picture" />
                </div>
                <div class="description">
                    <h5 class="font-weight-bold">Senku Ishigami</h5>
                    <p class="text-muted">Tanggal : 08 July 2020</p>
                    <span class="badge status badge-danger"> Belum Selesai</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>