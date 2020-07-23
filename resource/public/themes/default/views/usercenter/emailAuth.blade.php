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
            <h3>修改邮箱</h3>
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
                        <h3><i class="icon-material-outline-account-circle"></i> 绑定邮箱</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        @if($step == 1)
                        <form id="emailauth-form" class="emailauth-form validform" method="post"
                            action="{!! url('user/verifyEmail') !!}">
                            {!! csrf_field() !!}
                            <div class="row nowrap margin-top-20">
                                <div class="space-10"></div>
                                <div class="ui-help-title margin-left-25">邮箱地址&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <div class="col-md-9">
                                    <input type="text" nullmsg="请输入邮箱地址！" class="form-txt with-border" datatype="e"
                                        name="email"><span class="Validform_checktip vilid-wrprg"></span>
                                </div>
                            </div>
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">邮件验证码</div>
                                <div class="col-md-9">
                                    <div style="position: relative;width:240px;">
                                        <input type="text" nullmsg="请输入邮件验证码！" class="form-txt with-border" datatype="*"
                                            name="validationCode">
                                        <button id="sendEmailCode" class="sendCode" type="button"
                                            token="{{csrf_token()}}">获取验证码</button>
                                    </div>
                                    <span class="Validform_checktip vilid-wrprg"></span>
                                </div>
                            </div>

                            <a id="btn_sub" href="javascript:void(0)"
                                class="button ripple-effect margin-top-30 margin-left-95">确认</a>
                            <a href="{!! url('user/account') !!}"
                                class="button gray ripple-effect margin-top-30 margin-left-20">返回</a>
                        </form>
                        @elseif($step == 2)
                        <div class="text-center g-bankhint">
                            <img src="{!! Theme::asset()->url('images/sign-icon1.png') !!}"><b
                                class="inlineblock">恭喜，您已完成了邮箱绑定！</b>
                        </div>
                        <div class="space-20"></div>
                        <div class="cor-gray51 text-size14">邮箱绑定信息</div>
                        <div class="space-10"></div>
                        <div class="text-size14 cor-gray51 pdl54">邮箱地址：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="inlineblock cor-gray97">{{$email}}</span>
                        </div>
                        @endif
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
{!! Theme::asset()->container('specific-js')->usepath()->add('gt','plugins/js/geetest/gt.js') !!}
@if($step == 1){!! Theme::asset()->container('custom-js')->usepath()->add('sendEmailAuth', 'js/auth/sendEmailAuth.js')
!!}@endif
