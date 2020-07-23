<!-- Dashboard Sidebar
	================================================== -->
<div class="dashboard-sidebar">
    {!! Theme::partial('sidebar') !!}
</div>
<!-- Dashboard Sidebar / End -->
<!-- Dashboard Content
	================================================== -->
<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>实名认证</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">主页</a></li>
                    <li>工作台</li>
                    <li>帐号管理</li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <!-- Dashboard Box -->
            <div class="col-xl-12">
                <div class="dashboard-box margin-top-0">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-account-circle"></i> 实名认证</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        <div class="text-center g-bankhint">
                            <img src="{!! Theme::asset()->url('images/withdrawhint.png') !!}"><b class="inlineblock">很高兴认识您，我们会尽快完成认证！</b>
                            <p class="text-size14"><a class="text-under" href="{!! url('user/account') !!}">返回账户安全</a>
                            </p>
                        </div>
                        <div class="space-20"></div>

                        <div class="cor-gray51 text-size14">您的身份信息</div>
                        <div class="space-10"></div>
                        <div class="text-size14 cor-gray51 pdl54">真实姓名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="inlineblock cor-gray97">{{$realname}}
                                <span class="u-failureicon">未认证</span></span>
                        </div>
                        <div class="space-10"></div>
                        <div class="text-size14 cor-gray51 pdl54">证件号码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="inlineblock cor-gray97">{{$card_number}}</span>
                        </div>
                        <div class="space-10"></div>
                        <div class="text-size14 cor-gray51 pdl54">证件图片：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="inlineblock cor-gray97">已做隐私处理，不显示具体内容。</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer -->
        <section>
            {!! Theme::partial('dashboard_footer') !!} 
        </section>
        <!-- Footer / End -->

    </div>
</div>
<!-- Dashboard Content / End -->

{{-- {!! Theme::asset()->container('specific-js')->usepath()->add('缩写', '当前路径是assets下') !!}    specific-js 指第三方的 js--}}
{{-- {!! Theme::asset()->container('custom-js')->usepath()->add('payphoneword','js/auth/phone.js') !!} custom-js 自定义的 --}}
{{-- {!! Theme::asset()->container('specific-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
{{-- {!! Theme::asset()->container('custom-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav"></ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <img src="{!! Theme::asset()->url('images/userimgzm.png') !!}">
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav"></ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <img src="{!! Theme::asset()->url('images/userimgfm.png') !!}">
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog-3" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav"></ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <img src="{!! Theme::asset()->url('images/userimgdf.png') !!}">
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->
