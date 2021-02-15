<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title><?= $title; ?></title>

    <!-- Icons -->
    <link rel="shortcut icon" href="/assets/icons/favicon4.png">
    <!-- Bootstrap -->
    <link href="/template/gant/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="/template/gant/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="/template/gant/vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="/template/gant/vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link href="/template/gant/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />
    <!-- JQVMap -->
    <link href="/template/gant/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="/template/gant/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="/template/gant/build/css/custom.min.css" rel="stylesheet" />

    <!-- Datatables -->
    <link href="/template/gant/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/template/gant/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Ajax jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="nav-md">

    <!-- Menu Content -->
    <?= $this->include('admin/adminLayout/sidebar'); ?>
    <?= $this->include('admin/adminLayout/navbar'); ?>

    <!-- Main Content -->
    <?= $this->renderSection('content'); ?>

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by
            <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>

    <!-- Sweet Alerts -->
    <script src="/assets/sweetalerts/dist/sweetalert2.all.min.js"></script>

    <!-- jQuery -->
    <script src="/template/gant/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/template/gant/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/template/gant/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/template/gant/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/template/gant/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/template/gant/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/template/gant/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/template/gant/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/template/gant/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/template/gant/vendors/Flot/jquery.flot.js"></script>
    <script src="/template/gant/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/template/gant/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/template/gant/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/template/gant/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/template/gant/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/template/gant/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/template/gant/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/template/gant/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/template/gant/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/template/gant/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/template/gant/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/template/gant/vendors/moment/min/moment.min.js"></script>
    <script src="/template/gant/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- *Profil -->
    <!-- Custom Theme Scripts -->
    <script src="/template/gant/build/js/custom.min.js"></script>
    <!-- Input Tags -->
    <script src="/template/gant/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
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
    <!-- morris.js -->
    <script src="/template/gant/vendors/raphael/raphael.min.js"></script>
    <script src="/template/gant/vendors/morris.js/morris.min.js"></script>
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