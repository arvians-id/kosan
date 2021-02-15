<?= $this->extend('Home/HomeLayout/template_home') ?>

<?= $this->section('content') ?>

<!-- feature section -->
<section class="feature-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Kosan Terbaru</h3>
            <p>Cari kosan yang sesuai dengan pilihan anda</p>
            <hr>
        </div>
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
                                        <?php
                                        ?>
                                        <p><i class="fa fa-home"></i> <?php $str = explode(',', $kosan['fasilitas_kosan']);
                                                                        echo $str[0] ?></p>
                                        <p><i class="fa fa-car"></i> <?php $str = explode(',', $kosan['fasilitas_parkir']);
                                                                        echo $str[0] ?></p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-users"></i> <?php $str = explode(',', $kosan['fasilitas_bersama']);
                                                                        echo $str[0] ?></p>
                                        <p><i class="fa fa-bath"></i> <?php $str = explode(',', $kosan['fasilitas_mandi']);
                                                                        echo $str[0] ?></p>
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
    </div>
</section>
<!-- feature section end -->



<!-- feature category section -->
<section class=" spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Manfaat Sewa Kosa Di Yukngekos</h3>
            <p>What kind of property are you looking for? We will help you</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 f-cata">
                <img src="/template/leramiz/img/feature-cate/6.png" alt="">
                <h5>Family Home</h5>
            </div>
            <div class="col-lg-3 col-md-6 f-cata">
                <img src="/template/leramiz/img/feature-cate/5.png" alt="">
                <h5>Apartment Laki-laki</h5>
            </div>
            <div class="col-lg-3 col-md-6 f-cata">
                <img src="/template/leramiz/img/feature-cate/7.png" alt="">
                <h5>Resort Villas</h5>
            </div>
            <div class="col-lg-3 col-md-6 f-cata">
                <img src="/template/leramiz/img/feature-cate/8.png" alt="">
                <h5>Office Building</h5>
            </div>
        </div>
    </div>
</section>
<!-- feature category section end-->

<!-- feature section -->
<section class="feature-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Harga Promo Kosan</h3>
            <p>Promo kosan selalu diadakan setiap sebulan 3x dan sangat terbatas</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/template/leramiz/img/feature/1.jpg">
                        <div class="sale-notic">Booking Langsung</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>1963 S Crescent Heights Blvd</h5>
                            <p><i class="fa fa-map-marker"></i> Los Angeles, CA 90034</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 800 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 10 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 2 Garages</p>
                                    <p><i class="fa fa-bath"></i> 6 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Tony Holland</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="room-price">Rp 1,200,000</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/template/leramiz/img/feature/2.jpg">
                        <div class="sale-notic">Booking Langsung</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>305 North Palm Drive</h5>
                            <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 2 Garages</p>
                                    <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Gina Wesley</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="room-price">Rp 4,500,000</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/template/leramiz/img/feature/3.jpg">
                        <div class="rent-notic">Laki-laki</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>305 North Palm Drive</h5>
                            <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 2 Garages</p>
                                    <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Gina Wesley</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="room-price">Rp 2,500/month</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/template/leramiz/img/feature/4.jpg">
                        <div class="sale-notic">Booking Langsung</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>28 Quaker Ridge Road, Manhasset</h5>
                            <p><i class="fa fa-map-marker"></i> 28 Quaker Ridge Road, Manhasset</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 1200 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 12 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 3 Garages</p>
                                    <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Sasha Gordon </p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="room-price">Rp 5,600,000</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/template/leramiz/img/feature/5.jpg">
                        <div class="rent-notic">Laki-laki</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>Sofi Berryessa 750 N King Road</h5>
                            <p><i class="fa fa-map-marker"></i> San Jose, CA 95133</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 500 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 4 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 1 Garages</p>
                                    <p><i class="fa fa-bath"></i> 2 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Gina Wesley</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="room-price">Rp 1,600/month</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/template/leramiz/img/feature/6.jpg">
                        <div class="sale-notic">Booking Langsung</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>1203 Orren Street, Northeast</h5>
                            <p><i class="fa fa-map-marker"></i> Washington, DC 20002</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 700 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 7 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 1 Garages</p>
                                    <p><i class="fa fa-bath"></i> 7 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Sasha Gordon </p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="room-price">Rp 1,600,000</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature section end -->

<!-- Gallery section -->
<section class="gallery-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Tempat-tempat Populer</h3>
            <p>Tempat yang paling sering ditemukan kos-kosan</p>
        </div>
        <div class="gallery">
            <div class="grid-sizer"></div>
            <a href="#" class="gallery-item grid-long set-bg" data-setbg="/template/leramiz/img/gallery/jkt.jpg">
                <div class="gi-info">
                    <h3>Jakarta</h3>
                    <p>118 Kosan</p>
                </div>
            </a>
            <a href="#" class="gallery-item grid-wide set-bg" data-setbg="/template/leramiz/img/gallery/bdg.jpg">
                <div class="gi-info">
                    <h3>Bandung</h3>
                    <p>112 Kosan</p>
                </div>
            </a>
            <a href="#" class="gallery-item set-bg" data-setbg="/template/leramiz/img/gallery/bali.jpg">
                <div class="gi-info">
                    <h3>Surabaya</h3>
                    <p>72 Kosan</p>
                </div>
            </a>
            <a href="#" class="gallery-item set-bg" data-setbg="/template/leramiz/img/gallery/sby.jpg">
                <div class="gi-info">
                    <h3>Bali</h3>
                    <p>50 Kosan</p>
                </div>
            </a>

        </div>
    </div>
</section>
<!-- Gallery section end -->



<!-- Review section -->
<section class="review-section set-bg" data-setbg="/template/leramiz/img/review-bg.jpg">
    <div class="container">
        <div class="review-slider owl-carousel">
            <div class="review-item text-white">
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
                <h5>Stacy Mc Neeley</h5>
                <span>CEP’s Director</span>
                <div class="clint-pic set-bg" data-setbg="/template/leramiz/img/review/1.jpg"></div>
            </div>
            <div class="review-item text-white">
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
                <h5>Stacy Mc Neeley</h5>
                <span>CEP’s Director</span>
                <div class="clint-pic set-bg" data-setbg="/template/leramiz/img/review/1.jpg"></div>
            </div>
            <div class="review-item text-white">
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
                <h5>Stacy Mc Neeley</h5>
                <span>CEP’s Director</span>
                <div class="clint-pic set-bg" data-setbg="/template/leramiz/img/review/1.jpg"></div>
            </div>
        </div>
    </div>
</section>
<!-- Review section end-->


<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Artikel terbaru Kami</h3>
            <p>Real estate news headlines around the world.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 blog-item">
                <img src="/template/leramiz/img/blog/1.jpg" alt="">
                <h5><a href="single-blog.html">Housing confidence hits record high as prices skyrocket</a></h5>
                <div class="blog-meta">
                    <span><i class="fa fa-user"></i>Amanda Seyfried</span>
                    <span><i class="fa fa-clock-o"></i>25 Jun 201</span>
                </div>
                <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
            </div>
            <div class="col-lg-4 col-md-6 blog-item">
                <img src="/template/leramiz/img/blog/2.jpg" alt="">
                <h5><a href="single-blog.html">Taylor Swift is selling her Rp 2.95 million Beverly Hills mansion</a></h5>
                <div class="blog-meta">
                    <span><i class="fa fa-user"></i>Amanda Seyfried</span>
                    <span><i class="fa fa-clock-o"></i>25 Jun 201</span>
                </div>
                <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
            </div>
            <div class="col-lg-4 col-md-6 blog-item">
                <img src="/template/leramiz/img/blog/3.jpg" alt="">
                <h5><a href="single-blog.html">NYC luxury housing market saturated with inventory, says celebrity realtor</a></h5>
                <div class="blog-meta">
                    <span><i class="fa fa-user"></i>Amanda Seyfried</span>
                    <span><i class="fa fa-clock-o"></i>25 Jun 201</span>
                </div>
                <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
            </div>
        </div>
    </div>
</section>
<!-- Blog section end -->
<?= $this->endSection(); ?>