<div class="dashboard-sidebar-inner" data-simplebar>
    <div class="dashboard-nav-container">

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger">
            <span class="hamburger hamburger--collapse">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </span>
            <span class="trigger-title">工作台导航</span>
        </a>

        <!-- Navigation -->
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">

                <ul data-submenu-title="工作台">
                    <li>
                        <a href="{!! url('user/dashboard') !!}">
                            <i class="icon-material-outline-dashboard"></i>
                            我的牛库
                        </a>
                    </li>
                    <li @if(Route::current()->getName() == 'messagePage') class="active" @endif>
                        <a href="{!! url('user/message') !!}">
                            <i class="icon-material-outline-question-answer"></i> 消息中心<span id="sidemsgamount"
                            style="display:none" class="nav-tag">2</span>
                        </a>
                    </li>
                </ul>

                <ul data-submenu-title="工作管理">
                    <li @if(Route::current()->getName() == 'UserProjects') class="active" @endif><a href="{!! url('user/projects') !!}"><i class="icon-line-awesome-tasks"></i> 我的项目</a></li>
                </ul>

                <ul data-submenu-title="财务管理">
                    <li><a href="{!! url('finance/account') !!}"><i
                                class="icon-material-outline-account-balance-wallet"></i> 账户概览</a></li>
                    <li><a href="{!! url('finance/record') !!}"><i class="icon-line-awesome-reorder"></i>
                            收支明细</a></li>
                </ul>

                <ul data-submenu-title="帐号设置">
                    <li @if(Route::current()->getName() == 'infoPage') class="active" @endif><a href="{!! url('user/info') !!}"><i class="icon-material-outline-account-circle"></i> 个人资料</a>
                    </li>

                    <li @if(Route::current()->getName() == 'accountPage') class="active" @endif><a href="{!! url('user/account') !!}"><i class="icon-material-outline-lock"></i>
                            帐户安全</a></li>

                </ul>

            </div>
        </div>
        <!-- Navigation / End -->

    </div>
</div>