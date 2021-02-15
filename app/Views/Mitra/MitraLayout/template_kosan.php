<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="/template/gant/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/template/gant/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/template/gant/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/template/gant/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="/template/gant/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/template/gant/build/css/custom.min.css" rel="stylesheet">
    <!-- Ajax jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="nav-md">

    <!-- Menu Content -->
    <?= $this->include('mitra/mitraLayout/sidebar'); ?>
    <?= $this->include('mitra/mitraLayout/navbar'); ?>

    <!-- Main Content -->
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Projects <small>Listing design</small></h3>
                    <div class="flashdata" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Projects</h2>
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

                            <p>Simple table with project listing with progress and editing options</p>

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kosan</th>
                                        <th>Letak Kosan</th>
                                        <th>Alamat Kosan</th>
                                        <th>Harga</th>
                                        <th style="width: 20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($kosan as $kos) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $kos['nama_kosan'] ?></td>
                                            <td>
                                                <a><?= $kos['provinsi_kosan'] ?></a>
                                                <br />
                                                <small><?= $kos['kota_kosan'] ?></small>
                                            </td>
                                            <td>
                                                <a><?= $kos['kecamatan_kosan'] ?>/<?= $kos['kelurahan_kosan'] ?></a>
                                                <br />
                                                <small><?= $kos['alamat_kosan'] ?></small>
                                            </td>
                                            <td>Rp. <?= number_format($kos['harga_perbulan'], 2, '.', ',') ?>/bulan</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="/mitra/<?= $kos['slug'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                                    <a href="/mitra/edit/<?= $kos['slug']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <button type="button" class="btn btn-danger btn-xs btn-del" id="del-kos" onclick="deleteKos('<?= $kos['id'] ?>')"><i class="fa fa-trash-o"></i> Delete </button>
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
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>

    <!-- Sweet Alerts -->
    <script src="/assets/sweetalerts/dist/sweetalert2.all.min.js"></script>
    <script>
        function deleteKos(id) {
            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Setelah dihapus, data tidak bisa dipulihkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/mitra/delete',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            location.reload();
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    })
                }
            })

            return false;
        }
    </script>
    <!-- jQuery -->
    <script src="/template/gant/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/template/gant/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/template/gant/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/template/gant/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="/template/gant/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="/template/gant/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/template/gant/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/template/gant/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/template/gant/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/template/gant/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/template/gant/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/template/gant/build/js/custom.min.js"></script>

    <script>
        const flash = document.querySelector('.flashdata').dataset.flashdata;

        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data Berhasil ' + flash
            })
        }
    </script>
</body>

</html>