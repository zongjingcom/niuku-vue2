<style type="text/css">
    .geetest_holder.geetest_wind {
        width: 100% !important;
    }

</style>
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient" style="margin-bottom:20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <h2>创建新帐号</h2>
            </div>
        </div>
    </div>
</div>

<!-- Page Content
================================================== -->
<div class="container">
    <div class="row">
        <div class="col-xl-4" style="margin: 0 auto;">

            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h4>欢迎注册牛库!</h4>
                    <span>已经有帐号? 请<a href="{{'login'}}">登录!</a></span>
                </div>

                <!-- Form -->
                <form class="registerform validform" method="post" action="{{'register'}}" id="register-account-form">
                    {!! csrf_field() !!}
                    <input type="hidden" name="from_uid" value="{!! $from_uid !!}">
                    <div class="margin-bottom-14">
                        <input type="text" class="input-text with-border" name="username" placeholder="用户名"
                            ajaxurl="{!! url('checkUserName') !!}" value="{{old('username')}}" nullmsg="请输入用户名"
                            datatype="*6-16" errormsg="用户名长度为6到16位字母和数字组合">
                        <span class="Validform_checktip"></span>
                    </div>
                    <div class="margin-bottom-14">
                        <input type="text" class="input-text with-border" name="mobile" placeholder="手机号码"
                            ajaxurl="{!! url('checkMobile')!!}" value="" nullmsg="请输入手机号" datatype="m"
                            errormsg="请输入正确手机号" />
                        <span class="Validform_checktip"></span>
                    </div>
                    <div class="margin-bottom-14" style="position: relative;">
                        <input type="text" id="form-field-3" class="input-text with-border" name="code"
                            placeholder="短信验证码" value="" nullmsg="请输入验证码" datatype="*" errormsg="验证码有误" />
                        <button id="sendMobileCode" class="sendCode normal" type="button"
                            token="{{csrf_token()}}">获取验证码</button>
                        <span class="Validform_checktip"></span>
                    </div>
                    <div class="margin-bottom-14">
                        <input type="password" class="input-text with-border" name="password" id="password-register"
                            placeholder="登录密码" value="" nullmsg="请输入登录密码" datatype="*" errormsg="请输入登录密码" />
                        <span class="Validform_checktip"></span>
                    </div>

                    <div class="margin-bottom-14">
                        <input type="password" class="input-text with-border" id="password-repeat" placeholder="确认密码"
                            recheck="password" nullmsg="请输入确认密码" datatype="*" errormsg="两次密码输入不一致" />
                        <span class="Validform_checktip"></span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="chekcbox-term" name="agree" checked="checked">
                        <label for="chekcbox-term"><span class="checkbox-icon"></span> 我同意遵守<a
                                href="#">《牛库用户服务协议》</a></label>
                        <span class="Validform_checktip"></span>
                    </div>
                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">确认注册
                        <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>



                <!-- Social Login -->
                <div class="social-login-separator"><span>或</span></div>
                <div class="social-login-buttons">
                    <button class="qq-login ripple-effect"><i class="icon-brand-qq"></i> 通过QQ登录</button>
                    <button class="wechat-login ripple-effect"><i class="icon-brand-weixin"></i> 通过微信登录</button>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
<!-- 拖拽验证 -->
{!! Theme::asset()->container('specific-js')->usepath()->add('gt', 'js/plugins/geetest/gt.js') !!}
{!! Theme::asset()->container('custom-js')->usePath()->add('custom-validform-js', 'js/auth/sendverifycode.js') !!}
