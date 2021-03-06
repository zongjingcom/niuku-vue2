		<!-- Titlebar
================================================== -->
		<div id="titlebar" class="gradient" style="margin-bottom:20px">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12" style="text-align: center">
		                <h2>用户登录</h2>
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
		                <div class="welcome-text">
		                    <h4><b>欢迎访问牛库</b></h4>
		                    <span>还没有注册？ 请<a href="{{'register'}}">创建帐号!</a></span>
		                </div>

		                <form method="post" id="register-account-form" class="login-form validform" action="{!! url('login') !!}">
		                    {{ csrf_field() }}
		                    <div class="margin-bottom-14" title="请输入登录账号">
		                        <input type="text" class="input-text with-border" name="username" placeholder="用户名/邮箱/手机号码"
																value="{!! old('username') !!}" nullmsg="请输入登录账号" datatype="*" errormsg="登录账号错误">
							</div>

		                    <div class="margin-bottom-14" title="请输入登录密码">
		                        <input type="password" class="input-text with-border" name="password" placeholder="登录密码"
		                            nullmsg="请输入登录密码" datatype="*6-16" errormsg="密码应为6-16位长度" autocomplete="off"
																disableautocomplete>
																<span class="Validform_checktip Validform_wrong">{!! $errors->first('password') !!}</span>
		                    </div>

		                    <div>
		                        <div class="checkbox" style="margin-left: 3px;">
		                            <input type="checkbox" id="chekcbox-remember" checked="" name="remember"
		                                value="remember me">
		                            <label for="chekcbox-remember"><span class="checkbox-icon"></span> 记住我</label>
		                        </div>
		                        <a href="/password">
		                            <div style="display: inline-block;float: right;margin-right: 3px;">找回密码</div>
		                        </a>
		                    </div>
		                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">登录<i class="icon-material-outline-arrow-right-alt"></i></button>
		                </form>
		                <div class="social-login-separator"><span>或</span></div>
		                <div class="social-login-buttons">
		                    <button class="qq-login ripple-effect"><i class="icon-brand-qq"></i> 通过QQ登录</button>
		                    <button class="wechat-login ripple-effect"><i class="icon-brand-weixin"></i> 通过微信登录</button>
		                </div>
		            </div>

		        </div>
		    </div>
		</div>
