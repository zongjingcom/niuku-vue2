<!doctype html>
<html>

<head>

    <!-- Basic Page Needs
================================================== -->
    <title>{!! Theme::get('title') !!}  - 牛库</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

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
            {!! Theme::partial('loginheader') !!}
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- Content Container -->
        <section>
            {!! Theme::content() !!}
        </section>
    </div>
    <!-- Scripts
================================================== -->
    <script src="/themes/default/assets/js/plugins/jquery-3.4.1.min.js"></script>
    <script src="/themes/default/assets/js/plugins/Validform_v5.3.2.js"></script>

    <script type="text/javascript">
    $(function() {
        $(".login-form").Validform({
            tiptype: 3,
            ignoreHidden: true
        });
    })
    </script>

    {!! Theme::asset()->container('specific-js')->scripts() !!}
    {!! Theme::asset()->container('custom-js')->scripts() !!}
</body>