<!doctype html>
<html>

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <title>{!! Theme::get('title') !!} - 牛库</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="{!! Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="/themes/default/assets/css/allicons.css">
    <link rel="stylesheet" href="/themes/default/assets/css/global.css">
    <link rel="stylesheet" href="/themes/default/assets/css/jobs.css">
    <link rel="stylesheet" href="/themes/default/assets/css/color.css">
    <link rel="stylesheet" href="/themes/default/assets/css/pages.css">
    <link rel="stylesheet" href="/themes/default/assets/js/plugins/datepicker/css/bootstrap-datepicker3.standalone.css">
    <style type="text/css">
        .myError {
          color: red;
        }
        input.validate_hidden { position:absolute; height:0; width:0; border:0; }
    </style>
</head>

<body @if(Route::current()->getName() == 'jobPostPage' || Route::current()->getName() =='jobDetailPage') class="gray" @endif >
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

        @if(Route::current()->getName() != 'jobPostPage')
        <footer id="footer">
            {!! Theme::partial('footer') !!}
        </footer>
        @endif
    </div>


    <!-- Scripts ================================================= -->
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
    {{-- <script src="/themes/default/assets/js/main.js"></script> --}}
    <script src="/themes/default/assets/js/filter.js"></script>
    <script src="/themes/default/assets/js/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/themes/default/assets/js/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    
    {!! Theme::asset()->container('specific-js')->scripts() !!}
    {!! Theme::asset()->container('custom-js')->scripts() !!}
    <script>
        $('.input-group.date').datepicker({
            format: "yyyy年mm月dd日",
            todayBtn: true,
            language: "zh-CN",
            pickerPosition: "bottom-left",
            todayHighlight: true
        });
    </script>
</body>