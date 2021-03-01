<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" id="profil">
    <!-- Page Heading -->
    <h1 class="h4 mb-3 text-gray-800">Profile Anda</h1>
    <?php if (session()->getFlashdata('Pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('Pesan'); ?>
        </div>
    <?php endif; ?>
    <form action="/profile/save/<?= $user['id']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="sampulLama" value="<?= $user['gambar']; ?>">
        <div class="row py-4 px-3" id="profile-form">
            <div class="col-lg-3 col-md-3 col-12 prof">
                <img src="/assets/images/<?= $user['gambar']; ?>" class="sampul">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('sampul'); ?>
                    </div>
                    <label class="custom-file-label" for="sampul"><?= $user['gambar']; ?></label>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 prof2">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputUserame">Username</label>
                        <input type="text" class="form-control" id="inputUserame" placeholder="Username" readonly value="<?= $user['username'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" readonly value="<?= $user['password'] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputNip">NIP</label>
                        <input type="number" class="form-control" id="exampleInputNip" aria-describedby="NIShelp" readonly value="<?= $user['nip'] ?>">
                        <div class="invalid-feedback">
                            Mohon pilih status anda!
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="NIShelp" readonly value="<?= $user['nama'] ?>">
                        <div class="invalid-feedback">
                            Mohon pilih status anda!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                            <option <?php if ($user['jenis_kelamin'] == "laki-laki") {
                                        echo "selected";
                                    } ?>>Laki-Laki</option>
                            <option <?php if ($user['jenis_kelamin'] == "perempuan") {
                                        echo "selected";
                                    } ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputNomor">Nomor Telepon</label>
                        <input type="number" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>" id="exampleInpuNis" aria-describedby="NIShelp" name="no_telp" placeholder="Masukkan Nomor Telepon" value="<?= $user['no_telp'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('no_telp'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="exampleFormControlTextarea1" rows="3" name="alamat"><?= $user['alamat'] ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('alamat'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
        </form>
</div>
<?= $this->endSection(); ?>
<?= $this->section('user'); ?>
/profile-guru
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
<?= $this->endSection(); ?>