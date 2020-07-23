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
            <h3>修改密码</h3>
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
                        <h3><i class="icon-material-outline-account-circle"></i> 修改密码</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        <form method="post" id="loginpassword-form" class="loginpassword-form validform"
                            action="{!! url('user/loginpasswordauth') !!}">
                            {{ csrf_field() }}
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">原登录密码</div>
                                <div class="col-md-9"><input type="password" name="oldpassword" nullmsg="请输入原登录密码！"
                                        class="form-txt with-border" datatype="*6-16" errormsg="密码应为6-16位长度"
                                        autocomplete="off" disableautocomplete><span
                                        class="Validform_checktip {{ Session::get('style') }}">{{ Session::get('error') }}</span>
                                </div>
                            </div>
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">新登录密码</div>
                                <div class="col-md-9"><input type="password" name="password"
                                        class="form-txt with-border" nullmsg="请输入新密码！" datatype="*6-16"
                                        errormsg="密码应为6-16位长度" autocomplete="off" disableautocomplete><span
                                        class="Validform_checktip vilid-wrprg"></span></div>
                            </div>
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">确认新密码</div>
                                <div class="col-md-9">
                                    <input type="password" name="confirmPassword" class="form-txt with-border"
                                        recheck="password" nullmsg="请输入确认密码" datatype="*" errormsg="新密码两次输入不一致" /><span
                                        class="Validform_checktip vilid-wrprg"></span>
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

{!! Theme::asset()->container('custom-js')->usepath()->add('sendMobilCode', 'js/auth/loginPasswordAuth.js') !!}
