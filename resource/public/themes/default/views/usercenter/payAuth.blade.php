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
            <h3>提现绑定</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">主页</a></li>
                    <li>工作台</li>
                    <li>财务管理</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <!-- Dashboard Box -->
            <div class="col-xl-12">
                <div class="dashboard-box margin-top-0">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-credit-card"></i> 提现账户认证</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">

                        <div class="transfer-account">
                            <div class="notification warning closeable">
                                <p>友情提示：以下账户信息以您提交的信息为准，非本站金融体系，请妥善填写，如出现信息误差，自行负责。如对支付认证有任何疑问，请<a target="_blank"
                                        href="#">联系客服</a>，了解风险。
                                </p>
                                <a class="close"></a>
                            </div>
                            <form>
                                <ul class="approvelist">
                                    <li class="clearfix">
                                        <div class="fl">
                                            <div class="fl"><img src="/themes/default/assets/images/bankpay.jpg">
                                            </div>
                                            <div class="fl approveinfo"><span>银行卡绑定</span>
                                                <p class="hidden-xs">平台会向银行卡打入一定的金额，输入该金额进行绑定</p>
                                            </div>
                                        </div>
                                        @if($bankAuth == 0)
                                        <div class="fr approvebtn"><a href="/user/bankauth"
                                                class="button ripple-effect">立即绑定</a></div>
                                        @else
                                        <div class="fr g-realexamine"><a href="/user/bankauthlist">查看绑定</a></div>
                                        @endif
                                    </li>
                                    <li class="clearfix">
                                        <div class="fl">
                                            <div class="fl"><img src="/themes/default/assets/images/alipay.jpg">
                                            </div>
                                            <div class="fl approveinfo"><span>支付宝绑定</span>
                                                <p class="hidden-xs">支付宝认证会在一个工作日内完成</p>
                                            </div>
                                        </div>
                                        @if($alipayAuth == 0)
                                        <div class="fr approvebtn"><a href="/user/alipayauth"
                                                class="button ripple-effect">立即绑定</a></div>
                                        @else
                                        <div class="fr g-realexamine"><a href="/user/alipayauthlist">查看绑定</a></div>
                                        @endif
                        </div>
                        </li>
                        </ul>
                        </form>
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

{{-- {!! Theme::asset()->container('specific-js')->usepath()->add('缩写', '当前路径是assets下') !!}    specific-js 指第三方的 js--}}
{{-- {!! Theme::asset()->container('custom-js')->usepath()->add('payphoneword','js/auth/phone.js') !!} custom-js 自定义的 --}}
{{-- {!! Theme::asset()->container('specific-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
{{-- {!! Theme::asset()->container('custom-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
