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
                        <h3><i class="icon-material-outline-credit-card"></i>支付宝绑定</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        <div class="single-form col-xl-9 col-lg-10 col-md-11">
                            <div class="wizard-group hidden-xs">
                                <div data-target="#step-container" class="row-fluid" id="fuelux-wizard">
                                    <ul class="wizard-steps">
                                        <li class="active" data-target="#step1">
                                            <span class="step">1</span>
                                            <span class="title">填写信息</span>
                                        </li>
                                        <li data-target="#step2">
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
                            <form id="alipay-form"" class="alipay-form validform" method="post" action="{!! url('user/alipayauth') !!}">
                                {!! csrf_field() !!}
                                <div>
                                    <ul class="xstxtleft">
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">
                                                    支付宝姓名
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" nullmsg="请输入支付宝姓名！" name="alipayName"
                                                        class="form-txt with-border"  datatype="zh2-4" nullmsg="请输入支付宝姓名！" errormsg="请输入2到4位中文字符">
                                                    <span class="Validform_checktip vilid-wrprg">
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">
                                                    支付宝账户
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-txt with-border"  nullmsg="请输入支付宝账户！" datatype="ali" name="alipayAccount">
                                                    <span class="Validform_checktip vilid-wrprg">
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">请确认账户
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-txt with-border"  datatype="ali" nullmsg="请确认支付宝账户！" recheck="alipayAccount" name="confirmAlipayAccount">
                                                    <span class="Validform_checktip vilid-wrprg">
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a id="btn_sub" href="javascript:void(0)" class="button ripple-effect margin-left-95">申请认证</a>
                                <a href="{!! url('user/account') !!}" class="button gray ripple-effect margin-left-20">返回</a>
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

{!! Theme::asset()->container('custom-js')->usepath()->add('sendMobilCode', 'js/auth/aliPayAuth.js') !!}