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
                                            <li class="active" data-target="#step3">
                                                <span class="step">3</span>
                                                <span class="title">验证金额</span>
                                            </li>
                                            <li class="active" data-target="#step4">
                                                <span class="step">4</span>
                                                <span class="title">认证成功</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="g-bankhint">
                                    <img src="{!! Theme::asset()->url('images/sign-icon3.png') !!}"><b>很遗憾，绑定失败！</b>
                                    <p class="text-size14"><a class="text-under"
                                            href="{!! url('user/bankauth') !!}">重新认证</a>
                                    </p>
                                </div>
                                <div class="authinfo">
                                  <p class="name"><span>银行卡信息</span></p>
                                  <div class="identity">
                                      <p>申请时间：<span>{!! $authInfo['created_at'] !!}</span></p>
                                      <p>银行开户名： <span>{!! CommonClass::starReplace($authInfo['deposit_name'], 3)
                                              !!}</span></p>
                                      <p>开户银行： <span>{!! $authInfo['bank_name'] !!}</span></p>
                                      <p>开户地区： <span>{!! $authInfo['districtname'] !!}</span></p>
                                      <p>银行卡号： <span>{!! CommonClass::starReplace($authInfo['bank_account'], 4, 10)
                                              !!}</span></p>
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
