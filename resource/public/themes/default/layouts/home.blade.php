<!doctype html>
<html>

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <title>牛库 Niuku - 顶尖远程工作众包平台</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="{!! Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="/themes/default/assets/css/allicons.css">
    <link rel="stylesheet" href="/themes/default/assets/css/global.css">
    <link rel="stylesheet" href="/themes/default/assets/css/color.css">
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header Container ================================================== -->
        <header id="header-container" class="fullwidth">
            {!! Theme::partial('header') !!}
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- Content Container -->
        <section>
            {!! Theme::content() !!}
        </section>

        <!-- Footer -->
        <footer id="footer">
            {!! Theme::partial('footer') !!}
        </footer>
    </div>

    <!-- Scripts
================================================== -->
    <script src="/themes/default/assets/js/plugins/jquery-3.4.1.min.js"></script>
    <script src="/themes/default/assets/js/plugins/jquery-migrate-3.1.0.min.js"></script>
    <script src="/themes/default/assets/js/plugins/mmenu.min.js"></script>
    <script src="/themes/default/assets/js/plugins/tippy.all.min.js"></script>
    <script src="/themes/default/assets/js/plugins/simplebar.min.js"></script>
    <script src="/themes/default/assets/js/plugins/bootstrap-slider.min.js"></script>
    <script src="/themes/default/assets/js/plugins/bootstrap-select.min.js"></script>
    <script src="/themes/default/assets/js/plugins/snackbar.js"></script>
    <script src="/themes/default/assets/js/plugins/clipboard.min.js"></script>
    <script src="/themes/default/assets/js/plugins/counterup.min.js"></script>
    <script src="/themes/default/assets/js/plugins/magnific-popup.min.js"></script>
    <script src="/themes/default/assets/js/plugins/slick.min.js"></script>
    <script src="/themes/default/assets/js/main.js"></script>
    {!! Theme::asset()->container('specific-js')->scripts() !!}
    {!! Theme::asset()->container('custom-js')->scripts() !!}
</body>
