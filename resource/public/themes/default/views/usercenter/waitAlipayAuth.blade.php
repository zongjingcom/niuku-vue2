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
                        <h3><i class="icon-material-outline-account-circle"></i> 等待审核</h3>
                    </div>

                    <div class="content with-padding padding-bottom-0">

                        <div class="row">
                            <div class="single-form margin-bottom-50 col-xl-9 col-lg-10 col-md-11">
                                <div class="wizard-group hidden-xs">
                                    <div data-target="#step-container" class="row-fluid" id="fuelux-wizard">
                                        <ul class="wizard-steps">
                                            <li class="active" data-target="#step1">
                                                <span class="step">1</span>
                                                <span class="title">填写信息</span>
                                            </li>
                                            <li class="active" data-target="#step2">
                                                <span class="step">2</span>
                                                <span class="title">等待审核</span>
                                            </li>
                                            <li data-target="#step3">
                                                <span class="step">3</span>
                                                <span class="title">验证金额</span>
                                            </li>
                                            <li data-target="#step4">
                                                <span class="step">4</span>
                                                <span class="title">认证成功</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="g-bankhint">
                                    <img
                                        src="{!! Theme::asset()->url('images/withdrawhint.png') !!}"><b>正在审核中，我们会尽快为您的账户安排打款！</b>
                                </div>
                                <div class="authinfo">
                                    <p class="name"><span>支付宝信息</span></p>
                                    <div class="identity">
                                        <p>申请时间：<span>{!! $alipayAuthInfo['created_at'] !!}</span></p>
                                        <p>支付宝姓名： <span>{!! CommonClass::starReplace($alipayAuthInfo['alipay_name'], 3)
                                                !!}</span></p>
                                        <p>支付宝账户： <span>{!! CommonClass::starReplace($alipayAuthInfo['alipay_account'],
                                                4, 4) !!}</span></p>
                                    </div>
                                </div>
                            </div>
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
