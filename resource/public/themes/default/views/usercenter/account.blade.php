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
            <h3>账户安全</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="/">主页</a></li>
                    <li><a href="dashboard.html">工作台</a></li>
                    <li>账户安全</li>
                </ul>
            </nav>
        </div>

        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-material-outline-lock"></i> 账户安全</h3>
            </div>

            <div class="content with-padding padding-bottom-0">
                <div class="setting-security" style="width: 100%; padding-bottom: 48px;">

                    <div class="row"
                        style="margin: 0px 48px; border-bottom: 1px solid rgb(238, 239, 240); padding: 30px 0px;">
                        <div class="au-title"
                            style="font-size: 14px; color: rgb(35, 35, 35); display: inline-block; width: 100px;">
                            手机认证</div>
                        <div class="au-content" style="display: inline-block; width: 430px;">
                            @if(empty($mobile))
                            <span class="au-state" style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;">
                                <i class="icon-material-outline-info" style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(252, 209, 51);"></i>
                                未认证
                            </span> 
                            @else
                            <span class="au-state"
                                style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;"><i
                                    class="icon-material-outline-check"
                                    style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(19, 206, 102);"></i>
                                    已认证
                            </span>
                            @endif
                            <span class="au-ins" style="font-size: 14px; color: rgb(150, 152, 153);">获取业务、资金变动通知，保障账户安全</span>
                        </div> 
                        <span style="font-size: 14px; color: rgb(35, 35, 35);"></span> 
                        <a href="/user/phoneauth" class="" style="font-size: 14px; float: right; background: transparent; border: none; cursor: pointer; ">
                            @if(empty($mobile))
                            立即绑定
                            @else
                            查看
                            @endif
                        </a>
                    </div>
                    <div class="row"
                        style="margin: 0px 48px; border-bottom: 1px solid rgb(238, 239, 240); padding: 30px 0px;">
                        <div class="au-title"
                            style="font-size: 14px; color: rgb(35, 35, 35); display: inline-block; width: 100px;">
                            邮箱认证</div>
                        <div class="au-content" style="display: inline-block; width: 430px;">
                            @if($email_status =! 2)
                            <span class="au-state" style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;">
                                <i class="icon-material-outline-info" style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(252, 209, 51);"></i>
                                未认证
                            </span> 
                            @else
                            <span class="au-state"
                                style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;"><i
                                    class="icon-material-outline-check"
                                    style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(19, 206, 102);"></i>
                                    已认证
                            </span>
                            @endif
                            <span class="au-ins"
                                style="font-size: 14px; color: rgb(150, 152, 153);">获取业务、资金变动通知</span>
                        </div> <span style="font-size: 14px; color: rgb(35, 35, 35);"></span> 
                        <a href="/user/emailauth" class="" style="font-size: 14px; float: right; background: transparent; border: none; cursor: pointer; ">
                            @if($email_status =! 2) 
                            立即绑定
                            @else 
                            查看 
                            @endif
                        </a>
                           
                        {{-- 5****3@qq.com</span>
                        <button type="button" class="go-au"
                            style="font-size: 14px; color: rgb(170, 172, 174); float: right; background: transparent; border: none;">已绑定</button> --}}
                    </div>
                    <div class="row"
                        style="margin: 0px 48px; border-bottom: 1px solid rgb(238, 239, 240); padding: 30px 0px;">
                        <div class="au-title"
                            style="font-size: 14px; color: rgb(35, 35, 35); display: inline-block; width: 100px;">
                            实名认证</div>
                        <div class="au-content" style="display: inline-block; width: 430px;">
                            <span class="au-state" style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;">
                                {{-- @dd($realname_status) --}}
                                @if($realname_status == 1)
                                <i class="icon-material-outline-check" style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(19, 206, 102);"></i>
                                @else
                                <i class="icon-material-outline-info" style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(252, 209, 51);"></i>
                                @endif
                                @if( $realname_status == -1) 未认证 
                                @elseif( $realname_status == 0) 认证中 
                                @elseif($realname_status == 1) 已认证 
                                @elseif( $realname_status == 2) 认证失败 
                                @endif
                            </span>
                            <span class="au-ins"
                                style="font-size: 14px; color: rgb(150, 152, 153);">保障账户安全，提高账户信用度</span>
                        </div> <span style="font-size: 14px; color: rgb(35, 35, 35);"></span> <a
                            href="/user/realnameauth" class=""
                            style="font-size: 14px; float: right; background: transparent; border: none; cursor: pointer; ">
                            @if( $realname_status != -1) 查看 @else 立即认证 @endif</a>
                        {{-- <button type="button" class="go-au"
                            style="font-size: 14px; color: rgb(170, 172, 174); float: right; background: transparent; border: none; display: none;">认证中</button>
                        <button type="button" class="go-au"
                            style="font-size: 14px; color: rgb(170, 172, 174); float: right; background: transparent; border: none; display: none;">已认证</button>
                        <a href="/user/realnameauth" class=""
                            style="font-size: 14px; float: right; background: transparent; border: none; cursor: pointer; display: none;">重新认证</a> --}}
                    </div>
                    <div class="row"
                        style="margin: 0px 48px; border-bottom: 1px solid rgb(238, 239, 240); padding: 30px 0px;">
                        <div class="au-title"
                            style="font-size: 14px; color: rgb(35, 35, 35); display: inline-block; width: 100px;">
                            提现绑定</div>
                        <div class="au-content" style="display: inline-block; width: 430px;"><span class="au-state"
                                style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;"><i
                                    class="icon-material-outline-check"
                                    style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(19, 206, 102);"></i>
                                已绑定
                            </span> <span class="au-ins"
                                style="font-size: 14px; color: rgb(150, 152, 153);">绑定支付宝或银行卡账户，支持提现</span>
                        </div> <a href="/user/payauth" class=""
                            style="font-size: 14px;  float: right; background: transparent; border: none; cursor: pointer;">修改</a>
                    </div>

                    <div class="row"
                        style="margin: 0px 48px; border-bottom: 1px solid rgb(238, 239, 240); padding: 30px 0px;">
                        <div class="au-title"
                            style="font-size: 14px; color: rgb(35, 35, 35); display: inline-block; width: 100px;">
                            登录密码</div>
                        <div class="au-content" style="display: inline-block; width: 430px;"><span class="au-state"
                                style="font-size: 14px; color: rgb(35, 35, 35); letter-spacing: 0.35px; margin-right: 25px;"><i
                                    class="icon-material-outline-check"
                                    style="width: 18px; height: 18px;font-weight:600; margin-right: 5px; color: rgb(19, 206, 102);"></i>
                                保护中
                            </span> <span class="au-ins"
                                style="font-size: 14px; color: rgb(150, 152, 153);">建议定期修改登录密码，保障账户安全</span>
                        </div> <a href="{{ url('user/loginpasswordauth') }}" class=""
                            style="font-size: 14px;  float: right; background: transparent; border: none; cursor: pointer;">修改</a>
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
{{-- {!! Theme::asset()->container('specific-js')->usepath()->add('缩写', '当前路径是assets下') !!}    specific-js 指第三方的 js--}}
{{-- {!! Theme::asset()->container('custom-js')->usepath()->add('payphoneword','js/auth/phone.js') !!} custom-js 自定义的 --}}
{{-- {!! Theme::asset()->container('specific-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
{{-- {!! Theme::asset()->container('custom-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
