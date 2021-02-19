<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="45"/>
        </div>
        <div class="sidebar-brand-text mx-3">BK SMKN 1 Cimahi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mp-0 mt-2">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if($check=='dashboard'){echo 'active';}?>">
        <a class="nav-link" href="<?= $this->renderSection('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - User -->
    <li class="nav-item <?php if($check=='siswa'){echo 'active';}?>">
        <a class="nav-link" href="<?= $this->renderSection('user'); ?>">
            <i class="fas fa-fw fa-user-friends"></i>
            <span><?= $this->renderSection('list-user'); ?></span></a>
    </li>

    <!-- Nav Item - Konsultasi -->
    <li class="nav-item <?php if($check=='konsultasi'){echo 'active';}?>">
        <a class="nav-link" href="<?= $this->renderSection('konsultasi'); ?>">
            <i class="fas fa-fw fa-comments"></i>
            <span>Konsultasi</span></a>
    </li>

    <!-- Nav Item - Profile -->
    <li class="nav-item <?php if($check=='profile'){echo 'active';}?>">
        <a class="nav-link" href="<?= $this->renderSection('profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Lainnya
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>
<!-- End of Sidebar -->
<!-- Logout Modal -->
<div class="modal modal-login fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="loginContent">
            <div class="modal-header" id="loginHeader">
                <img src="<?= base_url(); ?>/assets/images/logo-bk.png" alt="BK Logo" width="40"/>
                <h5 class="modal-title font-weight-bold mt-2" id="exampleModalLabel">BK SMKN 1 CIMAHI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-3" id="loginBody">
                <p>Apakah anda yakin untuk keluar <br /> dari website ini?</p>
                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button></a>
                <a href="/"><button type="button" class="btn btn-success"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
            </div>
        </div>
    </div>
</div>