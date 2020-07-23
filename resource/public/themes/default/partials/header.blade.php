	<!-- Header -->
	<div id="header">
	    <div class="container">

	        <!-- Left Side Content -->
	        <div class="left-side">

	            <!-- Logo -->
	            <div id="logo">
	                <a href="/"><img src="/themes/default/assets/images/niuku-logo.png" alt="牛库"></a>
	            </div>

	            <!-- Main Navigation -->
	            <nav id="navigation">
	                <ul id="responsive">
	                    <li>
	                        <a href="#">服务 </a>
	                        <ul class="dropdown-nav">
	                            <li><a href="#">网站APP开发</a></li>
	                            <li><a href="#">UI&amp;交互设计</a></li>
	                            <li><a href="#">文案撰稿&amp;翻译</a></li>
	                            <li><a href="#">动画和视频创意</a></li>
	                            <li><a href="#">数字营销和推广</a></li>
	                            <li><a href="#">在线客户服务</a></li>
	                            <li><a href="#">品牌&amp;包装设计</a></li>
	                            <li><a href="#">电商专区</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="/jobs">项目</a></li>
	                    <li><a href="/talent">大拿</a> </li>
	                    <li><a href="/help">用户指南</a></li>
	                </ul>
	            </nav>
	            <div class="clearfix"></div>
	            <!-- Main Navigation / End -->

	        </div>
	        <!-- Left Side Content / End -->


	        <!-- Right Side Content / End -->
	        <div class="right-side">

	            @if (Auth::check())
	            <!-- 用户已登录 -->
	            <!--  User Notifications -->
	            <div class="header-widget hide-on-mobile">

	                <!-- Notifications -->
	                <div class="header-notifications">

	                    <!-- Trigger -->
	                    <div class="header-notifications-trigger">
	                        <a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
	                    </div>

	                    <!-- Dropdown -->
	                    <div class="header-notifications-dropdown">

	                        <div class="header-notifications-headline">
	                            <h4>通知</h4>
	                            <button class="mark-as-read ripple-effect-dark" title="标记为已读" data-tippy-placement="left">
	                                <i class="icon-feather-check-square"></i>
	                            </button>
	                        </div>

	                        <div class="header-notifications-content">
	                            <div class="header-notifications-scroll" data-simplebar>
	                                <ul>
	                                    <!-- Notification -->
	                                    <li class="notifications-not-read">
	                                        <a href="dashboard-manage-candidates.html">
	                                            <span class="notification-icon"><i
	                                                    class="icon-material-outline-group"></i></span>
	                                            <span class="notification-text">
	                                                <strong>李冰</strong> 申请了<span class="color">全栈工程师</span>职位
	                                            </span>
	                                        </a>
	                                    </li>

	                                    <!-- Notification -->
	                                    <li>
	                                        <a href="dashboard-manage-bidders.html">
	                                            <span class="notification-icon"><i
	                                                    class=" icon-material-outline-gavel"></i></span>
	                                            <span class="notification-text">
	                                                <strong>王潇潇</strong> 报名了您创建的 <span class="color">金融类iOS App开发</span> 项目
	                                            </span>
	                                        </a>
	                                    </li>

	                                    <!-- Notification -->
	                                    <li>
	                                        <a href="dashboard-manage-jobs.html">
	                                            <span class="notification-icon"><i
	                                                    class="icon-material-outline-autorenew"></i></span>
	                                            <span class="notification-text">
	                                                您发布的 <span class="color">手机APP UI设计师</span> 职位即将过期.
	                                            </span>
	                                        </a>
	                                    </li>

	                                    <!-- Notification -->
	                                    <li>
	                                        <a href="dashboard-manage-candidates.html">
	                                            <span class="notification-icon"><i
	                                                    class="icon-material-outline-group"></i></span>
	                                            <span class="notification-text">
	                                                <strong>邱飞飞</strong> 报名了您创建的 <span class="color">酒水包装设计</span>项目
	                                            </span>
	                                        </a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>

	                    </div>

	                </div>

	                <!-- Messages -->
	                <div class="header-notifications">
	                    <div class="header-notifications-trigger">
	                        <a href="#"><i class="icon-feather-mail"></i><span id="msgamount"
	                                style="display:none"></span></a>
	                    </div>

	                    <!-- Dropdown -->
	                    <div class="header-notifications-dropdown">
	                        <input id="uuid" type="text" name="name" style="display: none" value="{{Auth::User()->id}}" />
	                        <input id="uname" type="text" name="name" style="display: none"
	                            value="{{Auth::User()->name}}" />
	                        <div class="header-notifications-headline">
	                            <h4>未读消息</h4>
	                            <button class="mark-as-read ripple-effect-dark" title="标记为已读" data-tippy-placement="left"
	                                onclick="markMsgRead()">
	                                <i class="icon-feather-check-square"></i>
	                            </button>
	                        </div>

	                        <div class="header-notifications-content">
	                            <div id="station-news" class="header-notifications-scroll" data-simplebar>
	                                {{-- JS加载未付消息列表 --}}
	                            </div>
	                        </div>

	                        <div id="not-read-news" class="header-notifications-headline"
	                            style="text-align: center;dispaly:none">
	                            <p>暂无未读消息</p>
	                        </div>
	                        <a href="/user/message"
	                            class="header-notifications-button ripple-effect button-sliding-icon">查看全部<i
	                                class="icon-material-outline-arrow-right-alt"></i></a>
	                    </div>
	                </div>
	            </div>
	            <!--  User Notifications / End -->

	            <!-- User Menu -->
	            <div class="header-widget">

	                <!-- Messages -->
	                <div class="header-notifications user-menu">
	                    <div class="header-notifications-trigger">
	                        <a href="#">
	                            <div class="user-avatar user-avatar-42 status-online"><img
	                                    src="/themes/default/assets/images/user-avatar-small-01.jpg" alt=""></div>
	                        </a>
	                    </div>

	                    <!-- Dropdown -->
	                    <div class="header-notifications-dropdown">

	                        <!-- User Status -->
	                        <div class="user-status">

	                            <!-- User Name / Avatar -->
	                            <div class="user-details">
	                                <div class="user-avatar user-avatar-42 status-online"><img
	                                        src="/themes/default/assets/images/user-avatar-small-01.jpg" alt=""></div>
	                                <div class="user-name">
	                                    马丁 <span>自由职客</span>
	                                </div>
	                            </div>

	                            <!-- User Status Switcher -->
	                            <div class="status-switch" id="snackbar-user-status">
	                                <label class="user-online current-status">在线</label>
	                                <label class="user-invisible">隐身</label>
	                                <!-- Status Indicator -->
	                                <span class="status-indicator" aria-hidden="true"></span>
	                            </div>
	                        </div>

	                        <ul class="user-menu-small-nav">
	                            <li><a href="{{'/user/dashboard'}}"><i class="icon-material-outline-dashboard"></i>
	                                    我的牛库</a></li>
	                            <li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i>
	                                    个人主页</a></li>
	                            <li><a href="{{'/logout'}}"><i class="icon-material-outline-power-settings-new"></i> 退出</a>
	                            </li>
	                        </ul>

	                    </div>
	                </div>

	            </div>
	            <!-- User Menu / End -->

	            @else
	            <!-- 用户未登录 -->
	            <div class="header-widget">
	                <a href="{!! url('login') !!}" class=" log-in-button"><i class="icon-feather-user"></i> <span>登录 /
	                        注册</span></a>
	            </div>
	            @endif
	            <!-- Mobile Navigation Button -->
	            <span class="mmenu-trigger">
	                <button class="hamburger hamburger--collapse" type="button">
	                    <span class="hamburger-box">
	                        <span class="hamburger-inner"></span>
	                    </span>
	                </button>
	            </span>

	        </div>
	        <!-- Right Side Content / End -->

	    </div>
	</div>
	<!-- Header / End -->
	{!! Theme::asset()->container('specific-js')->usepath()->add('tim', 'js/plugins/TIMSDK/tim-js.js') !!}
	{!! Theme::asset()->container('specific-js')->usepath()->add('cos', 'js/plugins/TIMSDK/cos-js-sdk-v5.js') !!}
	{!! Theme::asset()->container('specific-js')->usepath()->add('lib-generate-test-usersig','js/plugins/TIMSDK/lib-generate-test-usersig.min.js') !!}
	{!! Theme::asset()->container('specific-js')->usepath()->add('GenerateTestUserSig','js/plugins/TIMSDK/GenerateTestUserSig.js') !!}
	{!! Theme::asset()->container('custom-js')->usepath()->add('tim-init', 'js/message/tim-init.js') !!}