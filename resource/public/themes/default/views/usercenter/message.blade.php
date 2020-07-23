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
            <h3>我的消息</h3>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">主页</a></li>
                    <li><a href="#">工作台</a></li>
                    <li>消息</li>
                </ul>
            </nav>
        </div>
        <div id="none-message" style="text-align:center;display:none">暂无消息</div>
        <div id="message-pannel" style="display:none" class="messages-container margin-top-0">
            <div class="messages-container-inner" id="recent-friends-list-bar">

                <!-- Messages -->
                <div class="messages-inbox">
                    <div class="messages-headline">
                        <div class="input-with-icon">
                            {{-- <input id="autocomplete-input" type="text" placeholder="搜索">
                            <i class="icon-material-outline-search"></i> --}}
                            <h4>最近好友列表</h4>
                            {{-- <div>{{Auth::User()->id}}</div> --}}
                    </div>
                </div>
                {{-- js加载好友列表 --}}
            </div>
            <!-- Messages / End -->

            <!-- Message Content -->
            <div class="message-content">
                <div class="messages-headline">
                    <h4 id="conversation-name"></h4>
                    {{-- <a href="javascript:void(0)" onclick= "deleteConversation()" class="message-action"><i class="icon-feather-trash-2"></i> 删除消息记录</a> --}}
                </div>
                <!-- Message Content Inner -->
                <div class="message-content-inner">
                    {{-- js加载聊天内容 --}}
                </div>
                <!-- Message Content Inner / End -->

                <!-- Reply Area -->
                <div class="message-reply">
                    <textarea id="msg-content" cols="1" rows="1" placeholder="请输入信息内容" data-autoresize></textarea>

                    <a id="sendImgOrFileBtn" href="javascript:void(0);" onclick="sendImgOrFileClick()">
                        <svg t="1587718768705" class="icon" viewBox="0 0 1024 1024" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" p-id="1146" width="40" height="40">
                            <path
                                d="M328.99 488.44l-1.01 1.01-183.41 183.68c-22.46 22.53-33.86 52.52-33.86 83.12 0 30.2 11.4 60.19 33.93 82.71l1.22 1.83c22.53 21.44 52.25 32.64 81.77 32.64 30.06 0 59.98-11.67 83.32-34.47l206.96-207.5 1.08-0.2 222.77-223.31a51.562 51.562 0 0 0 15.25-36.61c0-13.75-5.49-26.93-15.25-36.61a51.587 51.587 0 0 0-36.51-14.39c-13.72-0.29-26.97 5-36.71 14.66L348.27 656.03c-14.53 13.79-37.31 13.79-51.84 0a36.214 36.214 0 0 1-10.84-25.85c0-9.73 3.91-19.04 10.84-25.85l320.61-320.82A123.97 123.97 0 0 1 705.25 247c32.09 0 63.71 12.21 87.94 36.51 24.36 24.29 36.23 56.18 36.23 88.01 0 31.48-11.87 63.85-36.23 88.21l-222.97 222.7-0.54 0.75-0.54 0.48L362.17 890.4a188.955 188.955 0 0 1-134.55 55.37c-48.18 0-95.68-17.64-132.46-53.26l-2.03-2.03a187.989 187.989 0 0 1-55.37-134.29c0-48.65 18.11-98.05 55.37-134.82l207.16-207.43 1.36-0.61 260.76-260.77a246.205 246.205 0 0 1 175.41-72.94c63.1 0 126.82 24.43 174.93 73.01 48.65 47.57 72.47 111.28 72.47 174.59 0 63.65-23.82 127.02-72.47 175.47L553.66 861.77c-6.79 6.81-16 10.63-25.62 10.63-9.61 0-18.83-3.82-25.62-10.63a35.988 35.988 0 0 1-10.86-25.75c0-9.7 3.92-18.98 10.86-25.75l359.09-359.08c67.68-68.69 67.68-178.99 0-247.67-68.64-67.92-179.17-67.92-247.81 0L328.99 488.5"
                                fill="#323333" p-id="1147"></path>
                        </svg>
                    </a>
                    <input id="sendImgOrFile" type="file" style="display:none" />

                    <button class="button ripple-effect" onclick="sendMsg()">发出</button>
                </div>
            </div>
            <!-- Message Content -->
        </div>
    </div>
    <!-- Messages Container / End -->
    <!-- Footer -->
    <section>
        {!! Theme::partial('dashboard_footer') !!}
    </section>
    <!-- Footer / End -->

</div>
</div>
