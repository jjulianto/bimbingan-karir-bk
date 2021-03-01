<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h4 mb-3 text-gray-800">Daftar User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-primary">
            <i class="fas fa-user-friends mr-1"></i>
            <span>List Siswa</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $row) {
                        ?>
                            <tr>
                                <td><?= $row['nis']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['kelas']; ?> <?= $row['jurusan']; ?> <?= $row['rombel']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['no_telp']; ?></td>
                                <td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#twoModal"><i class="fas fa-comments mr-1"></i>Konsultasi</button></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <!-- <tr>
                            <td>171113637</td>
                            <td>Ilham Maulana Razaq</td>
                            <td>XIII TEI B</td>
                            <td>Baros</td>
                            <td>089238193171</td>
                            <td><button class="btn btn-primary" type="submit"><i class="fas fa-comments mr-1"></i>Konsultasi</button></td>
                        </tr>
                        <tr>
                            <td>191113818</td>
                            <td>Aver Pratama Putra</td>
                            <td>XI RPL A</td>
                            <td>Cimahi Tengah</td>
                            <td>089139313136</td>
                            <td><button class="btn btn-primary" type="submit"><i class="fas fa-comments mr-1"></i>Konsultasi</button></td>
                        </tr>
                        <tr>
                            <td>201113814</td>
                            <td>Abu Haris Al-Syihab</td>
                            <td>X RPL B</td>
                            <td>Bobojong</td>
                            <td>089685416591</td>
                            <td><button class="btn btn-primary" type="submit"><i class="fas fa-comments mr-1"></i>Konsultasi</button></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-end fade" id="twoModal" tabindex="-1" aria-labelledby="twoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="endContent">
            <div class="modal-header" id="endHeader">
                <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="40" />
                <h5 class="modal-title font-weight-bold mt-2" id="exampleModalLabel">BK SMKN 1 CIMAHI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-3" id="endBody">
                <p>Apakah anda yakin ingin berkonsultasi <br /> dengan orang yang bersangkutan?</p>
                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button></a>
                <a href="/"><button type="button" class="btn btn-success"><i class="fas fa-check"></i> Yes</button></a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>
<?= $this->section('list-user'); ?>
List Siswa
<?= $this->endSection(); ?>
<?= $this->section('dashboard'); ?>
/dashboard-guru
<?= $this->endSection(); ?>
<?= $this->section('list-users'); ?>
/list-siswa
<?= $this->endSection(); ?>
<?= $this->section('konsultasi'); ?>
/riwayat-konsultasi-guru
<?= $this->endSection(); ?>
<?= $this->section('profile'); ?>
/profile-guru
<?= $this->endSection(); ?>
<?= $this->section('more-js'); ?>
<script>
    $('#dataTable').dataTable({
        "language": {
            "paginate": {
                "previous": '&#8592',
                "next": '&#8594'
            }
        }
    });
</script>
<?= $this->endSection(); ?>