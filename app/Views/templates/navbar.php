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


    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

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
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#oneModal">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
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
                    Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_1.svg" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
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
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#chattingModal">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with
                            the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                            told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, Douglas McGee</span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= $this->renderSection('user'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->

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

<!-- Logout Modal -->
<div class="modal modal-login fade" id="logoutModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
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
                <a href="/"><button type="button" class="btn btn-success"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-end fade" id="oneModal" tabindex="-1" aria-labelledby="oneModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="endContent">
            <div class="modal-header" id="endHeader">
                <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="40"/>
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