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
            <h3>手机认证</h3>
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
                        <h3><i class="icon-line-awesome-mobile-phone"></i>解绑手机</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        <form id="phoneauth-form" class="phoneauth-form validform" method="post"
                            action="{!! url('user/unbindphoneauth') !!}">
                            {!! csrf_field() !!}
                            <div class="row nowrap margin-top-20">
                                <div class="space-10"></div>
                                <div class="ui-help-title margin-left-25">原手机号码</div>
                                <div class="col-md-9">
                                    <input type="text" nullmsg="请输入手机号！" class="form-txt with-border" datatype="m"
                                        placeholder="手机号码" value="{!! $mobile !!}" readonly="readonly"
                                        name="mobile"><span class="Validform_checktip vilid-wrprg"></span>
                                </div>
                            </div>
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">短信验证码</div>
                                <div class="col-md-9">
                                    <div style="position: relative;width:240px;">
                                        <input type="text" nullmsg="请输入验证码" class="form-txt with-border"
                                            placeholder="短信验证码" datatype="*" name="code">
                                        <button id="sendMobileCode" class="sendCode" type="button"
                                            token="{{csrf_token()}}">获取验证码</button>
                                        <span
                                            class="Validform_checktip  {{ ($errors->first('code'))?'Validform_wrong':'' }}">{!!
                                            $errors->first('code') !!}</span>
                                    </div>

                                </div>
                            </div>
                            <a id="btn_sub" href="javascript:void(0)"
                                class="button ripple-effect margin-top-30 margin-left-95">确认解绑</a>
                            <a href="{!! url('user/account') !!}"
                                class="button gray ripple-effect margin-top-30 margin-left-20">返回</a>
                        </form>
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

{!! Theme::asset()->container('specific-js')->usepath()->add('gt', 'plugins/js/geetest/gt.js') !!}
{!! Theme::asset()->container('custom-js')->usepath()->add('sendMobilCode', 'js/auth/sendMobilCode.js') !!}
