<?= $this->extend('auth/authLayout/template') ?>

<?= $this->section('content') ?>
<div>
    <div class="login_wrapper">
        <div>
            <section class="login_content">
                <form method="post" action="/auth/register">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= old('username') ?>" />
                    </div>
                    <?= $validation->getError('username') ?>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?= old('email') ?>" />
                        <?= $validation->getError('email') ?>
                    </div>
                    <div>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= old('nama') ?>" />
                        <?= $validation->getError('nama') ?>
                    </div>
                    <div>
                        <input type="password" name="npassword" class="form-control" placeholder="Ulangi Password" />
                    </div>
                    <div>
                        <input type="password" name="rpassword" class="form-control" placeholder="Ulangi Password" />
                        <?= $validation->getError('rpassword') ?>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Submit</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="/auth" class="to_register"> Log in </a>
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