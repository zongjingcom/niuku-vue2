<!doctype html>
<html>

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>{!! Theme::get('title') !!} - 牛库</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/themes/default/assets/css/allicons.css">
    <link rel="stylesheet" href="/themes/default/assets/css/global.css">
    <link rel="stylesheet" href="/themes/default/assets/css/dashboard.css">
    <link rel="stylesheet" href="/themes/default/assets/css/color.css">

    {!! Theme::asset()->container('specific-css')->styles() !!}
    {!! Theme::asset()->container('custom-css')->styles() !!}
</head>

<body class="gray">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header Container ================================================== -->
        <header id="header-container" class="fullwidth dashboard-header not-sticky">
            {!! Theme::partial('header') !!}
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- Dashboard Container -->
        <section class="dashboard-container">
            {!! Theme::content() !!}
        </section>
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
    <script src="/themes/default/assets//js/plugins/magnific-popup.min.js"></script>
    <script src="/themes/default/assets/js/plugins/slick.min.js"></script>
    <script src="/themes/default/assets/js/main.js"></script>

    <script src="/themes/default/assets/js/plugins/ipicker/dist/iPicker.js"></script>
    <script src="/themes/default/assets/js/plugins/Validform_v5.3.2.js"></script>
    <script>
        var $pre = $("pre");
        var $picker = $(".picker");
        $.getJSON("/themes/default/assets/js/plugins/ipicker/json/area.json").done(function (res) {
            $("#accountArea").iPicker({
                data: res,
                level: 3,
                width: 130,
                onSelect: function (v, t, set) {
                    document.getElementById("province").value = "";
                    document.getElementById("city").value = "";
                    document.getElementById("area").value = "";

                    if (v.length == 3) {
                        document.getElementById("province").value = v[0];
                        document.getElementById("city").value = v[1];
                        document.getElementById("area").value = v[2];
                    }
                }
            });
        })


        $(function () {
            $(".common-form").Validform({
                tiptype: 3,
                ignoreHidden: true
            });
        })

    </script>
    {!! Theme::asset()->container('specific-js')->scripts() !!}
    {!! Theme::asset()->container('custom-js')->scripts() !!}
</body>
