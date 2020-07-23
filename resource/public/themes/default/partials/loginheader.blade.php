			<!-- Header -->
			<div id="header">
			    <div class="container">

			        <!-- Left Side Content -->
			        <div class="left-side">

			            <!-- Logo -->
			            <div id="logo">
			                <a href="/"><img src="/themes/default/assets/images/niuku-logo.png" alt="牛库"></a>
			            </div>
			            <div class="headblock"><span class="slogan">互联网顶尖创新众包服务平台</span></div>
			            <div class="clearfix"></div>
			            <!-- Main Navigation -->
			        </div>
			        <!-- Left Side Content / End -->


			        <!-- Right Side Content / End -->
			        <div class="right-side">
			            {{-- <div class="header-widget">
			                @if(Route::currentRouteName() == 'loginCreatePage')
			                <div style="display:inline-block;font-size:14px;">还没注册账号？</div>
			                <a style="position: relative;top: 50%;display:inline-block;transform:translateY(-50%);font-size:14px;"
			                    href="{{'register'}}" class="button dark ripple-effect">注册</a>
			                @else
			                <div style="display:inline-block;font-size:14px;">已有帐号？</div>
			                <a style="position: relative;top: 50%;display:inline-block;transform:translateY(-50%);font-size:14px;"
			                    href="{{'login'}}" class="button dark ripple-effect">请登录</a>
			                @endif
									</div> --}}
									
									@if(Route::currentRouteName() == 'loginCreatePage')
									<div class="headblock"><span>还未注册账号？</span><a href="{{'register'}}" class="">注册</a></div>
									@else
									<div class="headblock"><span>已有帐号？</span><a href="{{'login'}}" class="">请登录~</a></div>
									@endif
			        </div>
			        <!-- Right Side Content / End -->

			    </div>
			</div>
			<!-- Header / End -->
