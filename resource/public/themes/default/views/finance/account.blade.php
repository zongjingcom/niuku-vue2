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
            <h3>账户概览</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="/">主页</a></li>
                    <li><a href="{{'user/dashboard'}}">工作台</a></li>
                    <li>财务管理</li>
                </ul>
            </nav>
        </div>
        <div class="finance-top-container">
            <div class="finance-fact" data-fun-fact-color="#36bd78">

                <div class="finance-fact-num">
                    <span>账户余额</span>
                    <h4>{!! $balance !!}<span style="margin-left: 4px;">元</span></h4>
                    <small>可提现余额：{{ $activebalance }} 元</small>
                </div>

                <a href="{{ url('finance/cash') }}" class="button green ripple-effect"><i class="icon-material-outline-check"></i>
                    充值</a>
                <a @if($certified) href="{{ url('finance/cashout') }}" class="button gray ripple-effect" @else
                    class="button gray ripple-effect popup-with-zoom-anim" href="#small-dialog" @endif><i
                        class="icon-feather-mail"></i>
                    提现</a>

                <div style="display: block; position:absolute; right:100px;font-size: 14px;"><a
                        href="{{ url('user/payauth') }}">取现认证</a></div>
            </div>

        </div>
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-line-awesome-reorder"></i> 账户明细</h3>
            </div>

            <div class="content with-padding padding-bottom-0">
                <div class="row">
                    <div class="records-trans">
                        <table class="sheets-records">
                            <thead>
                                <tr>
                                    <th class="align-left">时间</th>
                                    <th class="align-left">详情</th>
                                    <th class="align-right">金额</th>
                                    <th class="align-right">状态</th>
                                    <th class="align-right">余额</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($list))
                                @foreach($list as $item)
                                <tr>
                                    <td>{!! date('Y-m-d',strtotime($item->created_at)) !!}<br>
                                        <sub>{!! date('H:i:s',strtotime($item->created_at)) !!}</sub></td>

                                    <td>{!! $item->desc !!}<br>
                                        <sub>
                                            @if($item->action == 1 && $item->pay_type ==2 )支付宝充值
                                            @elseif($item->action == 1 && $item->pay_type ==3 )微信充值
                                            @elseif($item->action == 1 && $item->pay_type ==4 )银联充值
                                            @elseif($item->action == 2 && $item->pay_type ==3 )微信提现
                                            @elseif($item->action == 2 && $item->pay_type ==4 )银联提现
                                            @elseif($item->action == 2 && $item->pay_type ==2 ) 支付宝提现
                                            @elseif($item->action == 3)项目预付款
                                            @elseif($item->action == 4)项目阶段付款
                                            @elseif($item->action == 5)项目定金退款
                                            @elseif($item->action == 6)项目阶段退款
                                            @endif
                                        </sub></td>
                                    <td class="align-right">{!! $item->cash !!}</td>
                                    <td class="align-right">@if($item->status == 0)已取消@elseif($item->status ==
                                        1)处理中@elseif($item->status == 2)已完成 @elseif($item->status == 3) 已失败 @endif</td>
                                    <td class="align-right">{!! $item->balance !!}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        @if(empty($list))
                        <div class="read-more">没有找到相关交易记录 ！</div>
                        @else
                        <a class="read-more" href="{{ url('finance/record') }}">查看更多记录</a>
                        @endif
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

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav">
            <li><a href="#tab">提示</a></li>
        </ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <!-- Form -->
                <form method="get" action="{!! url('user/payauth') !!}">
                    <p class="text-size14 cor-gray71">
                        <span class="fa fa-exclamation-circle cor-orange text-size18"></span>
                        您尚未进行提现认证，是否去认证？
                    </p>
                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit">确定
                        <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->
