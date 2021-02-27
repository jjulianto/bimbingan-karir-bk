<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Sidebar Toggler (Sidebar) -->
    <button id="sidebarToggle" class="btn btn-link d-none d-sm-block rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <?= $this->renderSection('search-button'); ?>
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Permintaan dan Penolakan Konsultasi
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#oneModal">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-user text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 19, 2020</div>
                        Ada seorang siswa yang ingin melakukan konsultasi dengan anda
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-user text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">July 29, 2020</div>
                        Ada seorang siswa yang ingin melakukan konsultasi dengan anda
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-user text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Maret 20, 2020</div>
                        Ada seorang siswa yang ingin melakukan konsultasi dengan anda
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#threeModal">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-user text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Maret 20, 2020</div>
                        Ada satu permintaan konsultasi anda yang telah ditolak.
                    </div>
                </a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Pesan Masuk
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_1.svg" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                            problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="<?php if ($user == 'guru') {
                                                                                                                    echo '#chattingModal';
                                                                                                                } elseif ($user == 'siswa') {
                                                                                                                    echo '#chattingModal2';
                                                                                                                } ?>">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you like them sent to you?</div>
                        <div class="small text-gray-500">Senku Ishigami · 1d</div>
                    </div>
                </a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, <?= session('nama'); ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php if ($user == 'guru') {
                                                    echo '/profile-guru';
                                                } elseif ($user == 'siswa') {
                                                    echo '/profile-siswa';
                                                } ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/login/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->

<!-- Chatting Guru Modal -->
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
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuLink">
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

<!-- Chatting Siswa Modal -->
<div class="modal modal-konsultasi fade" id="chattingModal2" tabindex="-1" aria-labelledby="chattingModal2" aria-hidden="true">
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
                                        <p>Selamat siang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                <div class="outgoing-msg-inbox">
                                    <p>Selamat siang, pak</p>
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
                                        <p>Ada apa di waktu hari ini?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                <div class="outgoing-msg-inbox">
                                    <p>Maaf pak, ada sedikit permasalahan di kehidupan saya...</p>
                                </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
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

<!-- Logout Modal -->
<!-- <div class="modal modal-login fade" id="logoutModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="40"/>
                <h5 class="modal-title font-weight-bold mt-2" id="exampleModalLabel">BK SMKN 1 CIMAHI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center py-3">
                <p>Apakah anda yakin untuk keluar <br /> dari website ini?</p>
                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button></a>
                <a href="/login/logout"><button type="button" class="btn btn-success"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal -->
<div class="modal modal-end fade" id="oneModal" tabindex="-1" aria-labelledby="oneModal" aria-hidden="true">
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
                <p>Apakah anda ingin menerima <br /> permintaan konsultasi ini?</p>
                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> No</button></a>
                <a href="/"><button type="button" class="btn btn-success"><i class="fas fa-check"></i> Yes</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-end fade" id="endModal" tabindex="-1" aria-labelledby="endModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="endContent">
            <div class="modal-header" id="endHeader">
                <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="40" />
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
<!-- Modal -->
<div class="modal modal-end fade" id="threeModal" tabindex="-1" aria-labelledby="threeModal" aria-hidden="true">
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
                <p>Mohon maaf orang yang bersangkutan sedang tidak ingin diajak berkonsultasi. Mohon tunggu beberapa saat waktu <br /> untuk mengajaknya berkonsultasi.</p>
            </div>
        </div>
    </div>
</div>