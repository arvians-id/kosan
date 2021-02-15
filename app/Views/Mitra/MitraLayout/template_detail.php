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

    <!-- Custom Theme Style -->
    <link href="/template/gant/build/css/custom.min.css" rel="stylesheet">
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

    <!-- Custom Theme Scripts -->
    <script src="/template/gant/build/js/custom.min.js"></script>
</body>

</html>