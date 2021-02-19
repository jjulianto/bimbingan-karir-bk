<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row justify-content-between">
        <div class="col-3">
            <h1 class="h4 text-gray-800 pt-2">Riwayat Konsultasi</h1>
        </div>
        <div class="col-3 mb-3">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control border-0 small" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
        <a href="#" data-toggle="modal" data-target="#chattingModal" class="custom-card">
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
        </a>
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

<div class="modal modal-konsultasi fade" id="chattingModal" tabindex="-1" aria-labelledby="chattingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="konsultasiContent">
            <div class="modal-header" id="konsultasiHeader">
                <div class="msg-header-img">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" class="profile" alt="Cool">
                </div>
                <div class="name-profile">
                    <p>Senku Ishigami</p>
                </div>
                <div class="header-icons">
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>  
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" data-dismiss="modal" data-toggle="modal" href="#" data-target="#endModal">
                                <i class="fas fa-check fa-sm fa-fw mr-2 text-gray-400"></i>
                                Tandai Selesai
                            </a>
                        </div>
                        <a href="#" data-toggle="modal" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body" id="konsultasiBody">
                <div class="msg-inbox">
                    <div class="chats">
                        <div class="msg-page">
                            <div class="received-chats">
                                <div class="received-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="Guru">
                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                        <p>Selamat siang, pak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                <div class="outgoing-msg-inbox">
                                    <p>Selamat siang</p>
                                </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
                                </div>
                            </div>
                            <div class="received-chats">
                                <div class="received-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="Guru">
                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                         <p>Mohon maaf mengganggu waktunya sebentar, pak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                    <div class="outgoing-msg-inbox">
                                        <p>Oh iya, tidak apa-apa</p>
                                    </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                    <div class="outgoing-msg-inbox">
                                        <p>Ada apa di waktu hari ini?</p>
                                    </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
                                </div>
                            </div>
                            <div class="received-chats">
                                <div class="received-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="Guru">
                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                        <p>Maaf pak, saya sedikit bermasalah dengan kehidupan saya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" id="konsultasiFooter">
                <div class="input-group" id="group">
                    <input type="text" class="form-control" id="input-message" placeholder="Tulis pesan disini...">
                    <div class="input-group-append">
                        <span class="input-group-text" id="group-text"><i class="fas fa-paper-plane"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-end fade" id="endModal" tabindex="-1" aria-labelledby="endModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="endContent">
            <div class="modal-header" id="endHeader">
                <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="40"/>
                <h5 class="modal-title font-weight-bold mt-2" id="exampleModalLabel">BK SMKN 1 CIMAHI</h5>
                <button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#chattingModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-3" id="endBody">
                <p>Apakah anda yakin ingin mengakhiri <br /> percakapan ini?</p>
                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#chattingModal"><i class="fas fa-times"></i> Cancel</button></a>
                <a href="/"><button type="button" class="btn btn-success"><i class="fas fa-check"></i> Yes</button></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('list-user'); ?>
    List Siswa
<?= $this->endSection(); ?>
<?= $this->section('dashboard'); ?>
    /dashboard-guru
<?= $this->endSection(); ?>
<?= $this->section('user'); ?>
    /list-siswa
<?= $this->endSection(); ?>
<?= $this->section('konsultasi'); ?>
    /riwayat-konsultasi-guru
<?= $this->endSection(); ?>
<?= $this->section('profile'); ?>
    /profile-guru
<?= $this->endSection(); ?>
<?= $this->section('chat-message'); ?>
    #chattingModal
<?= $this->endSection(); ?>
<?= $this->section('search-button'); ?>
<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in" aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</li>
<?= $this->endSection(); ?>