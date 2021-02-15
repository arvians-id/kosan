<?= $this->extend('Home/HomeLayout/template_home') ?>

<?= $this->section('content') ?>
<!-- Breadcrumb -->
<div class="site-breadcrumb">
    <div class="container">
        <a href=""><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i><?= $home['nama_kosan'] ?></span>
    </div>
</div>

<!-- Page -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-list-page">
                <div class="single-list-slider owl-carousel" id="sl-slider">
                    <div class="sl-item set-bg" data-setbg="/assets/img-kosan/<?= $home['photo_1'] ?>">
                    </div>
                    <div class="sl-item set-bg" data-setbg="/assets/img-kosan/<?= $home['photo_2'] ?>">
                    </div>
                    <div class="sl-item set-bg" data-setbg="/assets/img-kosan/<?= $home['photo_3'] ?>">
                    </div>
                    <div class="sl-item set-bg" data-setbg="/template/leramiz/img/single-list-slider/4.jpg">
                    </div>
                </div>
                <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                    <div class="sl-thumb set-bg" data-setbg="/assets/img-kosan/<?= $home['photo_1'] ?>"></div>
                    <div class="sl-thumb set-bg" data-setbg="/assets/img-kosan/<?= $home['photo_2'] ?>"></div>
                    <div class="sl-thumb set-bg" data-setbg="/assets/img-kosan/<?= $home['photo_3'] ?>"></div>
                    <div class="sl-thumb set-bg" data-setbg="/template/leramiz/img/single-list-slider/4.jpg"></div>
                </div>
                <div class="single-list-content">
                    <div class="row">
                        <div class="col-xl-8 sl-title">
                            <h2><?= $home['alamat_kosan'] ?></h2>
                            <p><i class="fa fa-map-marker"></i><?= $home['provinsi_kosan'] ?>, <?= $home['kota_kosan'] ?>, <?= $home['kecamatan_kosan'] ?>, <?= $home['kelurahan_kosan'] ?></p>
                            <a href="#" class="btn btn-success btn-sm mr-1"><?= $home['jenis_kosan'] ?></a><a href="#" class="btn btn-outline-success btn-sm">Sisa <?= $home['tersedia_kosan'] ?> Kamar</a>
                        </div>
                        <div class="col-xl-4">
                            <a href="#" class="price-btn">Rp <?= number_format($home['harga_perbulan'], 0, '.', ',') ?>/bulan</a>
                        </div>
                    </div>
                    <h3 class="sl-sp-title">Luas Kamar Kosan</h3>
                    <div class="description">
                        <p><i class="fa fa-arrows-alt"></i><?= $home['panjang_kosan'] ?> x <?= $home['lebar_kosan'] ?></p>
                    </div>
                    <h3 class="sl-sp-title">Deskripsi Kosan</h3>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum ornareste. Donec index lorem. Vestibulum aliquet odio, eget tempor libero. Cras congue cursus tincidunt. Nullam venenatis dui id orci egestas tincidunt id elit. Nullam ut vuputate justo. Integer lacnia pharetra pretium. Casan ante ipsum primis in faucibus orci luctus et ultrice.</p>
                    </div>
                    <h3 class="sl-sp-title">Fasilitas Kos dan Kamar</h3>
                    <div class="row property-details-list">
                        <?php $str = explode(',', $home['fasilitas_kosan']); ?>
                        <?php foreach ($str as $string) : ?>
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-check-circle-o"></i> <?= $string ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div id="accordion" class="plan-accordion">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link" data-toggle="collapse" data-target="#fas-kos" aria-expanded="true" aria-controls="fas-kos">Lihat Fasilitas Lainnya <i class="fa fa-angle-down"></i></button>
                            </div>
                            <div id="fas-kos" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body p-3">
                                    <h3 class="sl-sp-title">Fasilitas Mandi</h3>
                                    <div class="row property-details-list">
                                        <?php $str = explode(',', $home['fasilitas_mandi']); ?>
                                        <?php foreach ($str as $string) : ?>
                                            <div class="col-md-4 col-sm-6">
                                                <p><i class="fa fa-check-circle-o"></i> <?= $string ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <h3 class="sl-sp-title">Fasilitas Bersama</h3>
                                    <div class="row property-details-list">
                                        <?php $str = explode(',', $home['fasilitas_bersama']); ?>
                                        <?php foreach ($str as $string) : ?>
                                            <div class="col-md-4 col-sm-6">
                                                <p><i class="fa fa-check-circle-o"></i> <?= $string ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <h3 class="sl-sp-title">Fasilitas Parkir</h3>
                                    <div class="row property-details-list">
                                        <?php $str = explode(',', $home['fasilitas_parkir']); ?>
                                        <?php foreach ($str as $string) : ?>
                                            <div class="col-md-4 col-sm-6">
                                                <p><i class="fa fa-check-circle-o"></i> <?= $string ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <h3 class="sl-sp-title">Fasilitas Area Lingkungan</h3>
                                    <div class="row property-details-list">
                                        <?php $str = explode(',', $home['area_lingkungan']); ?>
                                        <?php foreach ($str as $string) : ?>
                                            <div class="col-md-4 col-sm-6">
                                                <p><i class="fa fa-check-circle-o"></i> <?= $string ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="sl-sp-title bd-no">Video</h3>
                    <div class="perview-video">
                        <img src="/template/leramiz/img/video.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=v13nSVp6m5I" class="video-link"><img src="/template/leramiz/img/video-btn.png" alt=""></a>
                    </div>
                    <h3 class="sl-sp-title bd-no">Location</h3>
                    <div class="pos-map" id="map-canvas"></div>
                </div>
            </div>

            <!-- sidebar -->
            <div class="col-lg-4 col-md-7 sidebar">
                <div class="author-card">
                    <div class="author-img set-bg img-thumbnail" data-setbg="/assets/img-user/<?= $home['image'] ?>"></div>
                    <div class="author-info">
                        <h5><?= $home['nama'] ?></h5>
                    </div>
                    <div class="author-contact">
                        <p><i class="fa fa-phone"></i>+62 <?= $home['no_hp'] ?></p>
                        <p><i class="fa fa-envelope"></i><?= $home['email'] ?></p>
                    </div>
                </div>
                <div class="contact-form-card">
                    <h6>Harga <?= $home['nama_kosan'] ?></h6>
                    <p>Minimal Pembayaran <?= $home['minimal_pembayaran'] ?></p>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <p>Harga Perhari</p>
                            <hr>
                            <p>Harga Perminggu</p>
                            <hr>
                            <p>Harga Perbulan</p>
                            <hr>
                            <p>Harga Pertahun</p>
                        </div>
                        <div class="col-6">
                            <p>Rp. <?= number_format($home['harga_perhari'], 0, '.', ',') ?></p>
                            <hr>
                            <p>Rp. <?= number_format($home['harga_perminggu'], 0, '.', ',') ?></p>
                            <hr>
                            <p>Rp. <?= number_format($home['harga_perbulan'], 0, '.', ',') ?></p>
                            <hr>
                            <p>Rp. <?= number_format($home['harga_pertahun'], 0, '.', ',') ?></p>
                        </div>
                        <a href="" class="btn btn-success btn-block">Hubungi Kos</a>
                        <a href="" class="btn btn-outline-success ml-auto btn-block">Booking Langsung</a>
                    </div>
                </div>
                <div class="related-properties">
                    <h2>Kosan Terkait</h2>
                    <?php foreach ($homeLimit as $kosan) : ?>
                        <div class="rp-item">
                            <div class="rp-pic set-bg" data-setbg="/assets/img-kosan/<?= $kosan['photo_1'] ?>">
                                <div class="sale-notic">FOR SALE</div>
                            </div>
                            <div class="rp-info">
                                <h5><?= $kosan['alamat_kosan'] ?></h5>
                                <p><i class="fa fa-map-marker"></i><?= $kosan['provinsi_kosan'] ?>, <?= $kosan['kota_kosan'] ?></p>
                            </div>
                            <a href="#" class="rp-price">Rp. <?= number_format($kosan['harga_perbulan'], 0, '.', ',') ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page end -->
<?= $this->endSection() ?>