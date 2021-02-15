<?= $this->extend('auth/authLayout/template') ?>

<?= $this->section('content') ?>
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <div class="flashdata" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
                <div class="flashdata-delete" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
                <form method="post" action="/auth/login">
                    <h1>Login Form</h1>
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('message') ?>
                        </div>
                    <?php endif; ?>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                        <?= $validation->getError('username') ?>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                        <?= $validation->getError('password') ?>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="/auth/registration" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>