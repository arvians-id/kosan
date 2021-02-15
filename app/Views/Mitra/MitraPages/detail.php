<?= $this->extend('mitra/mitraLayout/template') ?>

<?= $this->section('content') ?>
<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Yukngekos.com :: Halaman Detail <?= $kosan['nama_kosan'] ?></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $kosan['nama_kosan'] ?></h2>
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

                        <div class="col-md-6 col-sm-7 ">
                            <div class="product-image">
                                <img src="/assets/img-kosan/<?= $kosan['photo_1'] ?>" class="img-thumbnail" alt="..." />
                            </div>
                            <div class="product_gallery">
                                <a>
                                    <img src="/assets/img-kosan/<?= $kosan['photo_2'] ?>" alt="..." />
                                </a>
                                <a>
                                    <img src="/assets/img-kosan/<?= $kosan['photo_3'] ?>" height="80px" alt="..." />
                                </a>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                            <h3 class="prod_title"><?= $kosan['alamat_kosan'] ?></h3>

                            <h6 class="font-weight-bold">Deskripsi dan keterangan <?= $kosan['nama_kosan'] ?></h6>
                            <p><?= $kosan['deskripsi_kosan'] ?>. <br><?= $kosan['keterangan_kosan'] ?></p>

                            <div class="row">
                                <div class="col-6">
                                    <h6 class="font-weight-bold">Letak Kosan</h6>
                                    <ul class="list-inline prod_color display-layout">
                                        <li>
                                            <p><i class="fa fa-tree"></i> <?= $kosan['provinsi_kosan'] ?> | <?= $kosan['kota_kosan'] ?></p>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight-bold">Kecamatan/Kelurahan Kosan</h6>
                                    <ul class="list-inline prod_color display-layout">
                                        <li>
                                            <p><i class="fa fa-location-arrow"></i> <?= $kosan['kecamatan_kosan'] ?> | <?= $kosan['kelurahan_kosan'] ?></p>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight-bold">Alamat Detail Kosan</h6>
                                    <ul class="list-inline prod_color display-layout">
                                        <li>
                                            <p><i class="fa fa-map-marker"></i> <?= $kosan['alamat_kosan'] ?></p>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight-bold">Jenis Kosan</h6>
                                    <ul class="list-inline prod_color display-layout">
                                        <li>
                                            <p><i class="fa fa-female"></i> <?= $kosan['jenis_kosan'] ?></p>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight-bold">Luas Kosan</h6>
                                    <ul class="list-inline prod_color display-layout">
                                        <li>
                                            <p><i class="fa fa-arrows"></i> <?= $kosan['panjang_kosan'] ?> x <?= $kosan['lebar_kosan'] ?></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h6 class="font-weight-bold">Fasilitas Kosan</h6>
                                    <p><i class="fa fa-archive"></i> <?= $kosan['fasilitas_kosan'] ?></p>
                                    <h6 class="font-weight-bold">Fasilitas Mandi</h6>
                                    <p><i class="fa fa-beer"></i> <?= $kosan['fasilitas_mandi'] ?></p>
                                    <h6 class="font-weight-bold">Fasilitas Bersama</h6>
                                    <p><i class="fa fa-users"></i> <?= $kosan['fasilitas_bersama'] ?></p>
                                    <h6 class="font-weight-bold">Fasilitas Parkir</h6>
                                    <p><i class="fa fa-car"></i> <?= $kosan['fasilitas_parkir'] ?></p>
                                    <h6 class="font-weight-bold">Area Lingkungan</h6>
                                    <p><i class="fa fa-tree"></i> <?= $kosan['area_lingkungan'] ?></p>
                                </div>
                            </div>

                            <div class="">

                            </div>

                            <div class="">
                                <div class="product_price">
                                    <h1 class="price">Harga Perbulan Rp <?= number_format($kosan['harga_perbulan'], 2, '.', ',')  ?></h1>
                                    <span class="price-tax">Harga Pertahun Rp <?= number_format($kosan['harga_pertahun'], 2, '.', ',')  ?></span><br>
                                    <span class="price-tax">Harga Perminggu Rp <?= number_format($kosan['harga_perminggu'], 2, '.', ',')  ?></span><br>
                                    <span class="price-tax">Harga Perhari Rp <?= number_format($kosan['harga_perhari'], 2, '.', ',')  ?></span><br>
                                    <span class="btn btn-outline-success btn-sm">Total <?= $kosan['tersedia_kosan'] ?> Kamar</span>
                                    <span class="btn btn-success btn-sm">Tersedia <?= $kosan['tersedia_kosan'] ?> Kamar</span>
                                    <span>Minimal Pembayaran <?= $kosan['minimal_pembayaran'] ?></span>
                                    <br>
                                </div>
                            </div>

                            <div class="">
                                <span class="btn btn-success btn-lg"><i class="fa fa-star"></i> 220 Disimpan</span>
                                <span class="btn btn-outline-success btn-lg"><i class="fa fa-share-alt"></i> Bagikan</span>
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