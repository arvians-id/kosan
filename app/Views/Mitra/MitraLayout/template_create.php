<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/template/gant/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/template/gant/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/template/gant/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/template/gant/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/template/gant/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/template/gant/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/template/gant/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="/template/gant/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/template/gant/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Ajax jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Selectpicker -->
    <link rel="stylesheet" href="/plugins/selectpicker/dist/css/bootstrap-select.min.css">

    <!-- Custom Theme Style -->
    <link href="/template/gant/build/css/custom.min.css" rel="stylesheet">
    <!-- My Css -->
    <link href="/plugins/myjscss/css/mycss.css" rel="stylesheet">
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body class="nav-md">

    <!-- Menu Content -->
    <?= $this->include('mitra/mitraLayout/sidebar'); ?>
    <?= $this->include('mitra/mitraLayout/navbar'); ?>

    <!-- Main Content -->
    <?= $this->renderSection('content'); ?>

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

    <!-- jQuery -->
    <script src="/template/gant/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/template/gant/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/template/gant/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/template/gant/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/template/gant/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/template/gant/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/template/gant/vendors/moment/min/moment.min.js"></script>
    <script src="/template/gant/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="/template/gant/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/template/gant/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="/template/gant/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="/template/gant/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="/template/gant/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="/template/gant/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="/template/gant/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="/template/gant/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="/template/gant/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="/template/gant/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/template/gant/build/js/custom.min.js"></script>
    <!-- Plugins -->
    <!-- Selectpicker -->
    <script src="/plugins/selectpicker/dist/js/bootstrap-select.min.js"></script>
    <!-- spinner -->
    <script src="/plugins/spinner-master/src/bootstrap-input-spinner.js"></script>
    <script>
        $('.selectpicker').selectpicker();
        $("input[type='number']").inputSpinner()
    </script>
</body>

</html>