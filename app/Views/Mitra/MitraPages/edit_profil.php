<?= $this->extend('mitra/mitraLayout/template') ?>

<?= $this->section('content') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Forms</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ubah Profil</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                Kosan berhasil <strong><?= session()->getFlashdata('pesan') ?>.</strong> <a href="/mitra/kosan" class="text-white">Lihat</a>
                            </div>
                        <?php endif; ?>
                        <form class="" action="/mitra/save_edit_profil/<?= $mitra['id'] ?>" method="post" enctype="multipart/form-data" novalidate>
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="<?= $mitra['id'] ?>">
                            <input type="hidden" name="hid_image" value="<?= $mitra['image'] ?>">
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control has-feedback-left <?= ($validation->hasError('username') ? 'is-invalid' : '') ?>" value="<?= (old('username')) ? old('username') : $mitra['username'] ?>" name="username" autofocus readonly />
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('username') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control has-feedback-left <?= ($validation->hasError('email') ? 'is-invalid' : '') ?>" value="<?= (old('email')) ? old('email') : $mitra['email'] ?>" name="email" readonly />
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control has-feedback-left <?= ($validation->hasError('nama') ? 'is-invalid' : '') ?>" value="<?= (old('nama')) ? old('nama') : $mitra['nama'] ?>" name="nama" />
                                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Photo</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" name="image" id="image" class="form-control has-feedback-left <?= ($validation->hasError('image') ? 'is-invalid' : '') ?>" value="<?= old('image') ?>" />
                                    <span class="fa fa-file-image-o form-control-feedback left" aria-hidden="true"></span>
                                    <img src="/assets/img-user/<?= $mitra['image'] ?>" class="img-thumbnail mt-2" width="200">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('image') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3 mt-3">
                                        <button type='submit' class="btn btn-primary">Simpan</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection(); ?>