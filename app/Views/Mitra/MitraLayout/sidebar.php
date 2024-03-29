<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Mitra Kosan</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/assets/img-user/<?= $mitra['image'] ?>" alt="..." class="img-circle profile_img" />
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?= $mitra['nama']; ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>mitra Kosan</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-home"></i> Home
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/mitra">Home</a></li>
                                    <li><a href="/" target="_blank">Landing Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-user"></i> Profil
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/mitra/profil">Profil</a></li>
                                    <li><a href="/mitra/edit-profil">Edit Profil</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Manage Kosan</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-edit"></i> Form Kosan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/mitra/create">Tambah Kosan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-table"></i> Manage Kosan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/mitra/kosan">Atur Kosan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-database"></i> Data Bookingan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Yang Membobking Anda</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-wechat"></i> Pesan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Kotak Masuk</a></li>
                                    <li><a href="#">Buat Pesan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-book"></i> Laporan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Detail Pemasukkan</a></li>
                                    <li><a href="#">Ajukan Pertanyaan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>