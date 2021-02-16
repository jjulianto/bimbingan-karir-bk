<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" id="profil">
    <!-- Page Heading -->
    <h1 class="h4 mb-3 text-gray-800">Profile Anda</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="row py-4 px-3" id="profile-form">
            <div class="col-lg-2 col-md-2 col-12 prof">
                <div id='profile-upload'>
                    <div class="hvr-profile-img">
                        <input type="file" name="logo" id='getval' class="upload" id="imag">

                        <div class="button-icon">
                            <div class="camera4"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-12 prof2">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputUserame">Username</label>
                        <input type="text" class="form-control" id="inputUserame" placeholder="Username" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" readonly disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputNis">NIS</label>
                        <input type="number" class="form-control" id="exampleInputNis" aria-describedby="NIShelp" placeholder="Masukkan NIS">
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="NIShelp" placeholder="Masukkan Nama">
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputDate">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleInputDate" aria-describedby="NIShelp">
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Jurusan</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="TEI">TEI</option>
                            <option value="TOI">TOI</option>
                            <option value="IOP">IOP</option>
                            <option value="RPL">RPL</option>
                            <option value="SIJA">SIJA</option>
                            <option value="TPTU">TPTU</option>
                            <option value="PFPT">PFPT</option>
                            <option value="TEDK">TEDK</option>
                            <option value="MEKA">MEKA</option>
                        </select>
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                            <option value="XIII">XIII</option>
                        </select>
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Rombel</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <div class="invalid-feedback d-block">
                            Mohon pilih status anda!
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputNomor">Nomor Telepon</label>
                    <input type="number" class="form-control" id="exampleInpuNis" aria-describedby="NIShelp" placeholder="Masukkan Nomor Telepon">
                    <div class="invalid-feedback d-block">
                        Mohon pilih status anda!
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="invalid-feedback d-block">
                        Mohon pilih status anda!
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('user'); ?>
    /profile-siswa
<?= $this->endSection(); ?>
<?= $this->section('list-user'); ?>
    List Guru
<?= $this->endSection(); ?>
<?= $this->section('more-js'); ?>
<script>
    document.getElementById('getval').addEventListener('change', readURL, true);

    function readURL() {
        var file = document.getElementById("getval").files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {

        }
}
</script>
<?= $this->endSection(); ?>