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
                            <form id="bankauth-form" class="bankauth-form validform" method="post"
                                action="{!! url('user/bankauth') !!}">
                                {!! csrf_field() !!}
                                <div>
                                    <ul class="xstxtleft">
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">银行名称
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="padding-left-0" style="width:240px">
                                                        <select class="selectpicker with-border" title="选择银行"
                                                            errormsg="选择银行！" nullmsg="选择银行！" datatype="*"
                                                            name="bankname">
                                                            @foreach($bankname as $v)
                                                            <option value="{!! $v !!}">{!! $v !!}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="Validform_checktip vilid-wrprg"></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">开户支行
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" nullmsg="请输入开户行名称！" name="depositName"
                                                        class="form-txt with-border" datatype="zh4-20"
                                                        errormsg="请输入4到20位中文字符">
                                                    <span class="Validform_checktip vilid-wrprg">
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">开户地区
                                                </div>
                                                <div class="col-md-10 col-xs-9">
                                                    <div id="accountArea" style="display:inline;max-width:100%"></div>
                                                    <input type="hidden" id="province" name="province" value="">
                                                    <input type="hidden" id="city" name="city" value="">
                                                    <input type="hidden" id="area" name="area" nullmsg="请选择省市区！" datatype="*" errormsg="请选择省市区" value="">
                                                    <span class="Validform_checktip vilid-wrprg"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">银行卡号</div>
                                                <div class="col-md-10">
                                                    <input type="text" nullmsg="请输入银行卡号！" class="form-txt with-border"
                                                        datatype="n16-19" name="bankAccount">
                                                    <span class="Validform_checktip vilid-wrprg"></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row nowrap">
                                                <div class="ui-help-title">确认卡号</div>
                                                <div class="col-md-10">
                                                    <input type="text" nullmsg="请确认银行卡号！" class="form-txt with-border"
                                                        datatype="n16-19" recheck="bankAccount"
                                                        name="confirmBankAccount">
                                                    <span class="Validform_checktip vilid-wrprg"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a id="btn_sub" href="javascript:void(0)"
                                    class="button ripple-effect margin-left-95">申请认证</a>
                                <a href="{!! url('user/account') !!}"
                                    class="button gray ripple-effect margin-left-20">返回</a>
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
{!! Theme::asset()->container('custom-js')->usepath()->add('sendMobilCode', 'js/auth/bankAuth.js') !!}
