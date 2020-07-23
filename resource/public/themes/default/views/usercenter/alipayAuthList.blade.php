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
            <h3>支付绑定</h3>
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
                        <h3><i class="icon-material-outline-credit-card"></i> 已绑定支付宝</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        <div class="transfer-account">
                            <div class="notification warning closeable">
                                <p>友情提示：以下账户信息以您提交的信息为准，非本站金融体系，请妥善填写，如出现信息误差，自行负责。如对支付认证有任何疑问，请<a target="_blank"
                                        href="#">联系客服</a>，了解风险。
                                </p>
                                <a class="close"></a>
                            </div>
                            <div class="row g-realcardlist" style="text-align: center;">
                                @if(!empty($arrAlipayAuth))
                                @foreach($arrAlipayAuth as $item)
                                <div class="col-md-4 col-sm-6">
                                    <div @if($item->status == 3)
                                        class="g-realcardshow"
                                        @else class="g-realcardjs"
                                        @endif>
                                        @if($item->status == 2 || $item->status == 4 || $item->status == 3)
                                        <div class="g-realcardwrap">
                                            <div @if($item->status == 2) class="g-realbankimg" @else
                                                class="g-realbankimg g-realdisable" @endif><img
                                                    src="{!! Theme::asset()->url('images/alibank.jpg') !!}" /></div>
                                            <div @if($item->status == 3) class="cor-gray51 g-realcardinfo g-hiden" @else
                                                class="cor-gray51 g-realcardinfo" @endif >{!!
                                                CommonClass::starReplace($item->alipay_account, -5, -10) !!}</div>
                                        </div>
                                        <a class="g-realcardhide popup-with-zoom-anim" data-toggle="modal" @if($item->status == 3) href='{!!
                                            url('user/alipayAuthSchedule/' . Crypt::encrypt($item->id)) !!}' @else
                                            href="#small-dialog" @endif>
                                            <span class="btn-big bg-gary bor-radius2 auth" @if($item->status == 3)
                                                href="{!! url('user/alipayAuthSchedule/' . Crypt::encrypt($item->id))
                                                !!}" @endif data-toggle="modal" data-auth-id="{!!
                                                Crypt::encrypt($item->id) !!}" data-card="{!!
                                                substr($item->alipay_account, -11, 11) !!}">
                                                @if($item->status == 2)停用@elseif($item->status ==
                                                4)启用@elseif($item->status == 3)认证失败@endif
                                            </span>
                                        </a>
                                        @else
                                        <div class="g-realcardwrap">
                                            <div class="g-realbankimg g-realdisable"><img
                                                    src="{!! Theme::asset()->url('images/alibank.jpg') !!}" /></div>
                                            <div class="cor-gray51 g-realcardinfo">@if($item->status ==
                                                0)正在审核中...@elseif($item->status == 1)正在验证中..@elseif($item->status ==
                                                3){!! CommonClass::starReplace($item->alipay_account, -5, -10) !!}@endif
                                            </div>
                                        </div>
                                        <a class="g-realcardhide" href='{!! url(' user/alipayAuthSchedule/ ' .
                                            Crypt::encrypt($item->id)) !!}' >
                                            <span class="btn-big bg-gary bor-radius2 auth"
                                                href="{!! url('user/alipayAuthSchedule/' . Crypt::encrypt($item->id)) !!}">
                                                @if($item->status == 0)待审核@elseif($item->status ==
                                                1)待验证@elseif($item->status == 3)认证失败@endif
                                            </span>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <div class="col-md-4 col-sm-6">
                                    <div class="g-realwrapplus">
                                        <div class="margin-top-44">
                                            <a href="{!! url('user/alipayauth') !!}"><i class="icon-feather-plus-square"
                                                    style="color:#979797;font-size:26px"></i></a>
                                        </div>
                                        <div><a href="{!! url('user/alipayauth') !!}">添加支付宝</a></div>
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

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab" class="action"></a></li>
        </ul>

        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <!-- Form -->
                <form method="post" action="{!! url('user/changealipayauth') !!}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="authId" id="authId">
                    <p class="text-size14 cor-gray71">
                        <span class="fa fa-exclamation-circle cor-orange text-size18"></span> 您是否要
                        <span class="action"></span>尾号为
                        <span id="card"></span>的支付宝账号</p>
                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit">确定
                        <i class="icon-material-outline-arrow-right-alt"></i></button>

                </form>


            </div>

        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->

{!! Theme::asset()->container('custom-js')->usepath()->add('bankAuthList','js/auth/alipayAuthList.js') !!}
