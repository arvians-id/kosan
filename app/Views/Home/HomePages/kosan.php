<?= $this->extend('Home/HomeLayout/template_home') ?>

<?= $this->section('content') ?>
<!-- Breadcrumb -->
<div class="site-breadcrumb">
    <div class="container">
        <a href=""><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i>Featured Listings</span>
    </div>
</div>
<!-- page -->
<section class="page-section categories-page">
    <div class="container">
        <div class="row">
            <?php foreach ($home as $kosan) : ?>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="/assets/img-kosan/<?= $kosan['photo_1'] ?>">
                            <?= ($kosan['booking_kosan'] == 'Booking Langsung') ? '<div class="sale-notic">Booking Langsung</div>' : '' ?>
                            <div class="rent-notic"><?= $kosan['jenis_kosan'] ?></div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5><a href="/home/<?= $kosan['slug'] ?>" class="text-dark"><?= $kosan['alamat_kosan'] ?></a> </h5>
                                <p><i class="fa fa-map-marker"></i> <?= $kosan['provinsi_kosan'] ?>, <?= $kosan['kota_kosan'] ?></p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> Asu</p>
                                        <p><i class="fa fa-bed"></i> 10 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 6 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> <?= $kosan['nama'] ?></p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="/home/<?= $kosan['slug'] ?>" class="room-price">Rp <?= number_format($kosan['harga_perbulan'], 0, '.', ',') ?>/Bulan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="site-pagination">
            <span>1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>
<!-- page end -->
<?= $this->endSection(); ?>