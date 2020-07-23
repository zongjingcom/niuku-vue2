<div class="dashboard-sidebar">
    {!! Theme::partial('sidebar') !!}
</div>


<div class="dashboard-content-container" style="position:relative" data-simplebar>
    <div class="dashboard-content-inner">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>账户取现</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="/">主页</a></li>
                    <li><a href="{{'user/dashboard'}}">工作台</a></li>
                    <li>财务管理</li>
                </ul>
            </nav>
        </div>


        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-line-awesome-reorder"></i> 账户取现</h3>
            </div>
            <div class="content with-padding padding-bottom-60">
                <form method="post" action="{!! url('finance/cashoutInfo') !!}" class="cashoutinfo-form">
                    {!! csrf_field() !!}
                    <input type="hidden" name="cashInfo" value="{!! $cashoutInfo !!}">
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">账户信息：</div>
                        <div class="col-md-9">
                            <p>
                                {!! $account_name !!}
                            </p>
                            <p class="cor-gray87">
                                @if($bank_name != 'alipay')
                                @if($bank_name == '光大银行')
                                <img src="{!! Theme::asset()->url('images/bank/gdyh.jpg') !!}" />
                                @elseif($bank_name == '华夏银行')
                                <img src="{!! Theme::asset()->url('images/bank/hxyh.jpg') !!}" />
                                @elseif($bank_name == '建设银行')
                                <img src="{!! Theme::asset()->url('images/bank/jsyh.jpg') !!}" />
                                @elseif($bank_name == '交通银行')
                                <img src="{!! Theme::asset()->url('images/bank/jtyh.jpg') !!}" />
                                @elseif($bank_name == '民生银行')
                                <img src="{!! Theme::asset()->url('images/bank/msyh.jpg') !!}" />
                                @elseif($bank_name == '农村信用社')
                                <img src="{!! Theme::asset()->url('images/bank/ncxys.jpg') !!}" />
                                @elseif($bank_name == '农业银行')
                                <img src="{!! Theme::asset()->url('images/bank/nyyh.jpg') !!}" />
                                @elseif($bank_name == '平安银行')
                                <img src="{!! Theme::asset()->url('images/bank/payh.jpg') !!}" />
                                @elseif($bank_name == '浦发银行')
                                <img src="{!! Theme::asset()->url('images/bank/pfyh.jpg') !!}" />
                                @elseif($bank_name == '兴业银行')
                                <img src="{!! Theme::asset()->url('images/bank/xyyh.jpg') !!}" />
                                @elseif($bank_name == '邮政储蓄')
                                <img src="{!! Theme::asset()->url('images/bank/yzcx.jpg') !!}" />
                                @elseif($bank_name == '招商银行')
                                <img src="{!! Theme::asset()->url('images/bank/zsyh.jpg') !!}" />
                                @elseif($bank_name == '中国银行')
                                <img src="{!! Theme::asset()->url('images/bank/zgyh.jpg') !!}" />
                                @endif
                                @else
                                <img src="{!! Theme::asset()->url('images/alibank.jpg') !!}" />
                                @endif
                                {!! CommonClass::starReplace($cashout_account, 3, 10) !!}
                            </p>
                        </div>
                    </div>
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">提现金额：</div>
                        <div class="col-md-9">
                            <span class="cor-orange">{!! $cash !!}</span> 元
                        </div>
                    </div>
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">服务费：</div>
                        <div class="col-md-9">
                            {!! $fees !!} 元 <i class="fa fa-question-circle cor-gray97"></i>
                        </div>
                    </div>
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">到账金额：</div>
                        <div class="col-md-9">
                            {!! $cash-$fees !!} 元
                        </div>
                    </div>
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">支付密码：</div>
                        <div class="col-md-9">
                            <input class="form-txt with-border" type="password" name="alternate_password" datatype="*" nullmsg="请输入支付密码" />
                            <a target="_blank" href="{!! url('user/payPassword') !!}">忘记密码？</a>
                            @if($errors->first('alternate_password'))
                            <span class="Validform_checktip Validform_wrong">{!! $errors->first('alternate_password')
                                !!}</span>
                            @endif
                        </div>
                    </div>

                    <a id="btn_sub" href="javascript:void(0)"
                        class="button ripple-effect margin-top-20 margin-left-85">立即提现</a>
                    <a href="{!! url('finance/cashout') !!}"
                        class="button gray ripple-effect margin-top-20 margin-left-20">返回</a>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <section>
            {!! Theme::partial('footer') !!}
        </section>
        <!-- Footer / End -->

    </div>
</div>

{!! Theme::asset()->container('custom-css')->usepath()->add('finance-recharge','css/finance/finance-recharge.css') !!}
{!! Theme::asset()->container('custom-js')->usepath()->add('cashoutinfo','js/finance/cashoutinfo.js') !!}

