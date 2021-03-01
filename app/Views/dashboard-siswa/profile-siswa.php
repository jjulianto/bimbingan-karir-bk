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
    <form action="/profile/edit/<?= $user['id']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
        <div class="row py-4 px-3" id="profile-form">
            <div class="col-lg-3 col-md-3 col-12 prof">
                <img src="/assets/images/<?= $user['gambar']; ?>" class="sampul">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="sampul" name="gambar" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('gambar'); ?>
                    </div>
                    <label class="custom-file-label" for="gambar"><?= $user['gambar']; ?></label>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 prof2">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputUserame">Username</label>
                        <input type="text" class="form-control" id="inputUserame" placeholder="Username" readonly value="<?= $user['username']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" readonly value="<?= $user['password']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputNis">NIS</label>
                        <input type="number" class="form-control" id="exampleInputNis" aria-describedby="NIShelp" readonly value="<?= $user['nis']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="NIShelp" readonly value="<?= $user['nama']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                            <option value="<?php if ($user['jenis_kelamin'] == "laki-laki") {
                                                echo "selected";
                                            } ?>">Laki-laki</option>
                            <option value="<?php if ($user['jenis_kelamin'] == "perempuan") {
                                                echo "selected";
                                            } ?>">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputDate">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleInputDate" aria-describedby="NIShelp" readonly value="<?= $user['tanggal_lahir']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Jurusan</label>
                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                            <option value="<?php if ($user['jurusan'] == "TEI") {
                                                echo "selected";
                                            } ?>">TEI</option>
                            <option value="<?php if ($user['jurusan'] == "TOI") {
                                                echo "selected";
                                            } ?>">TOI</option>
                            <option value="<?php if ($user['jurusan'] == "IOP") {
                                                echo "selected";
                                            } ?>">IOP</option>
                            <option value="<?php if ($user['jurusan'] == "RPL") {
                                                echo "selected";
                                            } ?>">RPL</option>
                            <option value="<?php if ($user['jurusan'] == "SIJA") {
                                                echo "selected";
                                            } ?>">SIJA</option>
                            <option value="<?php if ($user['jurusan'] == "TPTU") {
                                                echo "selected";
                                            } ?>">TPTU</option>
                            <option value="<?php if ($user['jurusan'] == "PFPT") {
                                                echo "selected";
                                            } ?>">PFPT</option>
                            <option value="<?php if ($user['jurusan'] == "TEDK") {
                                                echo "selected";
                                            } ?>">TEDK</option>
                            <option value="<?php if ($user['jurusan'] == "MEKA") {
                                                echo "selected";
                                            } ?>">MEKA</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect2" readonly>
                            <option value="<?php if ($user['kelas'] == "X") {
                                                echo "selected";
                                            } ?>">X</option>
                            <option value="<?php if ($user['kelas'] == "XI") {
                                                echo "selected";
                                            } ?>">XI</option>
                            <option value="<?php if ($user['kelas'] == "XII") {
                                                echo "selected";
                                            } ?>">XII</option>
                            <option value="<?php if ($user['kelas'] == "XIII") {
                                                echo "selected";
                                            } ?>">XIII</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Rombel</label>
                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                            <option value="<?php if ($user['rombel'] == "A") {
                                                echo "selected";
                                            } ?>">A</option>
                            <option value="<?php if ($user['rombel'] == "B") {
                                                echo "selected";
                                            } ?>">B</option>
                            <option value="<?php if ($user['rombel'] == "C") {
                                                echo "selected";
                                            } ?>">C</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputNomor">Nomor Telepon</label>
                    <input type="number" class="form-control <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : ''; ?>" id="exampleInpuNis" aria-describedby="NIShelp" name="no_telepon" placeholder="Masukkan Nomor Telepon" value="<?= $user['no_telp']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_telepon'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control <?= ($validation->hasError('alamat2')) ? 'is-invalid' : ''; ?>" id="exampleFormControlTextarea1" rows="3" name="alamat2"><?= $user['alamat']; ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('alamat2'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
        </form>
</div>
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
<?= $this->section('more-js'); ?>
<?= $this->endSection(); ?>