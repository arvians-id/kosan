<?= $this->extend('admin/adminLayout/template') ?>

<?= $this->section('content') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kosan | <small>Kosan-kosan yang terdaftar</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <a href="/admin/create" class="btn btn-secondary">Tambah Kosan</a>
                        <div class="flashdata" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama Kosan</th>
                                                <th>Tempat Kosan</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Harga Kosan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($kosan as $kos) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $kos['username'] ?></td>
                                                    <td><?= $kos['nama_kosan'] ?></td>
                                                    <td><?= $kos['alamat_kosan']; ?></td>
                                                    <td><?= $kos['tersedia_kosan']; ?></td>
                                                    <td>Rp. <?= number_format($kos['harga_perbulan'], 2, ',', '.'); ?></td>
                                                    <td>
                                                        <div class="wrapper text-center">
                                                            <div class="btn-group">
                                                                <a href="/admin/<?= $kos['slug'] ?>" class="btn btn-info text-white" style="cursor: pointer;">Detail</a>
                                                                <form action="/admin/delete/<?= $kos['id'] ?>" method="post">
                                                                    <?= csrf_field(); ?>
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection(); ?>