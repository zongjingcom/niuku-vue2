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
                <h3><i class="icon-material-outline-account-circle"></i> 账户提现</h3>
            </div>

            <div class="content with-padding">

                <div class="row">
                    <div class="single-form">
                        <div class="withdraw-state">
                            <div class="account-notice-box">
                                <div class="box-content">
                                    <div class="title"><i class="fa green fa-check"></i>您的提现申请已成功提交！</div>
                                    <div class="content">
                                        <div class="red"><span>提现款项将会在 7 个工作日内转至您的支付宝账户，请注意相关信息提醒。</span><br>
                                            <span>如需修改提现信息，或提现遇到问题，请<a
                                                    class="support-anchor-3J8iv undefined">联系客服</a>。</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="states-label">
                                <h2>提现状态</h2>
                                <div class="withdraw-progress-box ">
                                    <div class="progress-text"><span
                                    class="gray">@if($cashout_type == 1) 支付宝账号 @else 银联账号  @endif</span><span>{!! $cashout_account !!}  ({!! $account_name !!})</span><span
                                            class="gray">｜</span><span>{!! $cash !!} </span><span class="gray">元</span></div>
                                    <div class="progress-map">
                                        <div class="map-item done">
                                            <div class="iconLabel">
                                                <div class="icon-1gQjc"><i class="fa fa-check"></i></div>
                                            </div>
                                            <div class="label"><strong>提交申请</strong><small>{!! $create_time !!}</small>
                                            </div>
                                        </div>
                                        <div class="map-item done">
                                            <div class="iconLabel">
                                                <div class="icon-1gQjc"><i class="fa fa-refresh"></i></div>
                                            </div>
                                            <div class="label"><strong>处理中</strong><small>{!! $create_time !!}</small></div>
                                        </div>
                                        <div class="map-item current">
                                            <div class="iconLabel">
                                                <div class="icon-1gQjc"><i class="fa fa-rmb"></i></div>
                                            </div>
                                            <div class="label"><strong>已完成</strong><small></small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div><a href="/user/mpay/records">
                                    <button class="back-button"><i class="fa fa-arrow-circle-left"></i>返回</button>
                                </a></div>
                        </div>
                    </div>
                </div>
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
