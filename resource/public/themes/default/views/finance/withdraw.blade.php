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
                {{-- <div class="notification error closeable">
                    <p>账户余额不足，您无法进行提现操作。</p>
                    <a class="close"></a>
                </div> --}}

                <div class="dashbord-tips">
                <div class="accordion js-accordion">
                    <!-- Accordion Item -->
                    <div class="accordion__item js-accordion-item">
                        <div class="accordion-header js-accordion-header">银行提现手续费扣取标准</div>

                        <!-- Accordtion Body -->
                        <div class="accordion-body js-accordion-body">

                            <!-- Accordion Content -->
                            <div class="accordion-body__contents padding-top-5">
                            <p>A. 200元以下（含200元） 单笔收费{!! $cashRule['per_low'] !!}元</p>
                        <p>B. 200元以上 单笔收费{!! $cashRule['per_charge'] !!}%, 最高收费{!! $cashRule['per_high'] !!}元</p>
                        <p>C. 单次最低提现金额{!! $cashRule['withdraw_min'] !!}元</p>
                        <p>D. 最高提现最大金额{!! $cashRule['withdraw_max'] !!}元</p>
                            </div>

                        </div>
                        <!-- Accordion Body / End -->
                    </div>
                </div>
                </div>


                <form method="post" action="{!! url('finance/cashout') !!}" class="cashout-form">
                    {!! csrf_field() !!}
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">提现账户</div>
                        <div class="col-md-9">
                            <div style="width:240px">
                                <select id="cashout_account" name="cashout_account" class="selectpicker with-border"
                                    title="转出到">
                                    @foreach($alipayAccount as $item)
                                    <option value="{!! $item->alipay_account !!}">支付宝&nbsp;{!!
                                        CommonClass::starReplace($item->alipay_account,3,4) !!}
                                    </option>
                                    @endforeach
                                    @foreach($bankAccount as $item)
                                    <option value="{!! $item->bank_account !!}">{!! $item->bank_name!!}&nbsp;&nbsp;{!!
                                        CommonClass::starReplace($item->bank_account, -5) !!}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">提现金额</div>
                        <div class="col-md-9">
                            <input type="text" class="form-txt with-border" name="cash" datatype="number" nullmsg="输入金额"
                                errormsg="请输入正确的金额" value="{!! old('cash') !!}" />
                            <span class="fl ui-help-text ">
                                <i class="icon-material-outline-info"></i>
                            本次最大可提现金额 {{ $activebalance }} 元
                            </span>
                        </div>
                    </div>
                    <div class="row nowrap margin-top-20">
                        <div class="ui-help-title margin-left-25">备注信息</div>
                        <div class="col-md-9">
                            <input type="text" class="form-txt with-border" name="memo">
                        </div>
                    </div>
                    <a id="btn_sub" href="javascript:void(0)"
                        class="button ripple-effect margin-top-20 margin-left-85">下一步</a>
                    <a href="{!! url('user/account') !!}"
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
{!! Theme::asset()->container('custom-js')->usepath()->add('payphoneword','js/finance/cashout.js') !!}