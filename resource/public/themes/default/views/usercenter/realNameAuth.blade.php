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
            <h3>实名认证</h3>
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
                        <h3><i class="icon-material-outline-account-circle"></i> 实名认证</h3>
                    </div>

                    <div class="content with-padding padding-bottom-60">
                        <div class="ui-help-text">您的信息不会透露给任何第三方，请放心填写。</div>
                        <form class="registerform" enctype="multipart/form-data" method="post"
                            action="{!! url('user/realnameauth') !!}">
                            {!! csrf_field() !!}
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">真实姓名:</div>
                                <div class="col-md-9">
                                    <input type="text" name="realname" class="with-border form-txt" datatype="zh2-4" errormsg="请输入2到4位中文字符" nullmsg="请填写真实姓名！"/>
                                </div>
                            </div>
                            <div class="row nowrap margin-top-20">
                                <div class="ui-help-title margin-left-25">身份证号:</div>
                                <div class="col-md-9">
                                    <input type="text" name="card_number" class="form-txt with-border" datatype="idcard"  errormsg="您填写的身份证号码不对！" nullmsg="请填写身份证号码！">
                                </div>
                            </div>
                            <div class="row nowrap margin-top-20" style="height: 130px;">
                                <div class="ui-help-title margin-left-25">证件正面:</div>
                                <div class="col-md-9">
                                    <div class="fl margin-right-20">
                                        <div class="position-relative">
                                            <label class="file-label file-multiple"><input name="card_front_side"
                                                    type="file" id="id-input-file-3" placeholder="" accept="image/*" ><span
                                                    id="card_front_side_tip" class="file-container"
                                                    data-title="上传正面图片"><span class="file-name"
                                                        data-title="No File ..."><i
                                                            class="ace-icon g-userimgupzm"></i></span></span>
                                                {{-- <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a> --}}
                                                <img id="card_front_side_img"
                                                    style="height:130px;width:190px;display:none"
                                                    src="{!! Theme::asset()->url('images/default_avatar.png') !!}"
                                                    alt="" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="fl ui-help-text-multi hidden-xs">
                                        <p>1.必须看清证件信息，且证件信息不能被遮挡；</p>

                                        <p>2.仅支持.jpg .bmp .png .gif 的图片格式，<b class="cor-gray51">图片大小不超过3M</b>；</p>

                                        <p>3. <a class="cor-blue2f mfp-image" data-mfp-src="{!! Theme::asset()->url('images/userimgzm.png') !!}"
                                                href="#small-dialog-1">[示例：查看身份证正面照]</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row nowrap margin-top-20" style="height: 130px;">
                                <div class="ui-help-title margin-left-25">证件反面:</div>
                                <div class="col-md-9">
                                    <div class="fl margin-right-20">
                                        <div class="position-relative">
                                            <label class="file-label file-multiple"><input name="card_back_dside"
                                                    type="file" id="id-input-file-4" accept="image/*" ><span id="card_back_dside_tip"
                                                    class="file-container" data-title="上传反面图片"><span class="file-name"
                                                        data-title="No File ..."><i
                                                            class=" ace-icon g-userimgupfm"></i></span></span>
                                                {{-- <a  class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a> --}}
                                                <img id="card_back_dside_img"
                                                    style="height:130px;width:190px;display:none"
                                                    src="{!! Theme::asset()->url('images/default_avatar.png') !!}"
                                                    alt="" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="fl ui-help-text-multi hidden-xs">
                                        <p>1.必须看清证件信息，且证件信息不能被遮挡；</p>

                                        <p>2.仅支持.jpg .bmp .png .gif 的图片格式，<b class="cor-gray51">图片大小不超过3M</b>；</p>

                                        <p>3. <a class="cor-blue2f image-popup-fit-width"
                                                href="{!! Theme::asset()->url('images/userimgfm.png') !!}">[示例：查看身份证反面照]</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row nowrap margin-top-20" style="height: 130px;">
                                <div class="ui-help-title margin-left-25">手持照片:</div>
                                <div class="col-md-9">
                                    <div class="fl margin-right-20">
                                        <div class="position-relative">
                                            <label class="file-label file-multiple"><input name="validation_img"
                                                    type="file" id="id-input-file-5" accept="image/*" ><span id="validation_img_tip"
                                                    class="file-container" data-title="上传手持照片"><span class="file-name"
                                                        data-title="No File ..."><i
                                                            class=" ace-icon g-userimgupdf"></i></span></span>
                                                {{-- <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a> --}}
                                                <img id="validation_img_img"
                                                    style="height:130px;width:190px;display:none"
                                                    src="{!! Theme::asset()->url('images/default_avatar.png') !!}"
                                                    alt="" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="fl ui-help-text-multi hidden-xs">
                                        <p>1.清上传本人手持身份证正面头部免冠照片和上半身照片；</p>
                                        <p>2.必须看清证件信息，且证件信息不能被遮挡，持证人五官清晰可见；</p>

                                        <p>3.仅支持.jpg .bmp .png .gif 的图片格式，<b class="cor-gray51">图片大小不超过3M</b>;</p>

                                        <p>4. <a class="cor-blue2f popup-with-zoom-anim"
                                                href="#small-dialog-3">[示例：查看手持身份证图片]</a></p>
                                    </div>
                                </div>
                            </div>
                            {{-- <a href="#" class="button ripple-effect margin-top-30 margin-left-95">提交认证</a>
                            <a href="#" class="button gray ripple-effect margin-top-30 margin-left-20">返回</a> --}}

                            <a id = "btn_sub" href="javascript:void(0)"  class="button ripple-effect margin-top-30 margin-left-95">提交认证</a>
                            <a href="{!! url('user/account') !!}"class="button gray ripple-effect margin-top-30 margin-left-20">返回</a>
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

{{-- {!! Theme::asset()->container('specific-js')->usepath()->add('缩写', '当前路径是assets下') !!}    specific-js 指第三方的 js--}}
{{-- {!! Theme::asset()->container('custom-js')->usepath()->add('payphoneword','js/auth/phone.js') !!} custom-js 自定义的 --}}
{{-- {!! Theme::asset()->container('specific-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
{{-- {!! Theme::asset()->container('custom-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav"></ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <img src="{!! Theme::asset()->url('images/userimgzm.png') !!}">
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav"></ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <img src="{!! Theme::asset()->url('images/userimgfm.png') !!}">
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->

<!-- Apply for a job popup
================================================== -->
<div id="small-dialog-3" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav"></ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content" id="tab">
                <img src="{!! Theme::asset()->url('images/userimgdf.png') !!}">
            </div>
        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->

{!! Theme::asset()->container('specific-css')->usePath()->add('validform-css', 'plugins/js/validform/css/style.css') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('validform-js',
'plugins/js/validform/js/Validform_v5.3.2_min.js') !!}
{!! Theme::asset()->container('custom-js')->usePath()->add('realname-js', 'js/auth/realNameAuth.js') !!}
