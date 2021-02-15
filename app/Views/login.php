<?= $this->extend('templates/template-login'); ?>

<?= $this->section('content'); ?>
<!-- Content -->
<div class="overlay-white">
    <div class="container">
        <div class="wrapper-form">
            <div class="circle-wrapper">
                <div class="circle-image">
                    <img src="<?= base_url(); ?>/assets/images/Logo_BK-removebg-preview.png" width="100">
                </div>

            </div>
            <div class="form">
                <form action="#" method="post">
                    <div class="text-center">
                        <label class="text-login text-uppercase">Login Form</label>
                    </div>
                    <div class="input-icon mt-1">
                        <i class="fa fa-user icon"></i>
                        <input type="text" class="form-control input-login" name="username" autocomplete="off" required placeholder="Username">
                    </div>
                    <div class="input-icon invalid-feedback col-12" id="status">
                        Mohon pilih status anda!
                    </div>

                    <div class="input-icon mt-1">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" class="form-control input-login" name="password" autocomplete="off" required placeholder="Password" id="password-field">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="input-icon invalid-feedback col-12" id="status">
                        Mohon pilih status anda!
                    </div>
                    <button class="btn btn-lg btn-primary btn-block mt-3 mb-2" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>