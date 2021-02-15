<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Administrator</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/assets/img-user/<?= $admin['image'] ?>" alt="..." class="img-circle profile_img" />
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?= $admin['nama']; ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Administrator</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-home"></i> Home
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin">Home</a></li>
                                    <li><a href="/">Landing Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-user"></i> Profil
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/profil">Profil</a></li>
                                    <li><a href="/admin/edit-profil">Edit Profil</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Kelola Website</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-users"></i> Manage Users
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">Users</a></li>
                                    <li><a href="projects.html">Users Pelanggaran</a></li>
                                    <li><a href="project_detail.html">Users Banned</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-table"></i> Manage Kosan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/kosan">Daftar Kosan</a></li>
                                    <li><a href="#">Rekomendasi Kosan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-archive"></i> Manage Mitra
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Daftar Mitra</a></li>
                                    <li><a href="#">Mitra OnProsess</a></li>
                                    <li><a href="#">Mitra Ditolak</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-comments"></i> Manage Pertanyaan
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Kritik & Saran</a></li>
                                    <li><a href="#">Lainnya</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Blog</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-desktop"></i> Manage Blog
                                    <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">Lihat Blog</a></li>
                                    <li><a href="e_commerce.html">Daftar Blog</a></li>
                                    <li><a href="projects.html">Tambah Blog</a></li>
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