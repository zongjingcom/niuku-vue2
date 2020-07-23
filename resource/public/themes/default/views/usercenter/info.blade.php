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
            <h3>个人资料</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">主页</a></li>
                    <li>工作台</li>
                    <li>完善资料</li>
                </ul>
            </nav>
        </div>
        <!-- Row -->
        <div class="row">

            <!-- Dashboard Box -->
            <div class="col-xl-12">
                <div class="dashboard-box margin-top-0">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-account-circle"></i> 帐号信息</h3>
                    </div>

                    <div class="content with-padding padding-bottom-0">

                        <div class="row">

                            <div class="col-auto">
                                <div class="avatar-wrapper" data-tippy-placement="bottom" title="修改头像">
                                    <img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
                                    <div class="upload-button"></div>
                                    <input class="file-upload" type="file" accept="image/*" />

                                </div>
                                <div style="margin-right:10px;text-align: center;"><a href="#small-dialog-1"
                                        class="popup-with-zoom-anim button gray ripple-effect margin-top-5 margin-bottom-10"><i
                                            class="icon-feather-edit"></i> 更新头像</a></div>
                            </div>

                            <div class="col">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- Account Type -->
                                        <div class="submit-field">
                                            <h5>帐户类型</h5>
                                            <div class="account-type">
                                                <div>
                                                    <input type="radio" name="account-type-radio" id="freelancer-radio"
                                                        class="account-type-radio" checked />
                                                    <label for="freelancer-radio" class="ripple-effect-dark"><i
                                                            class="icon-material-outline-account-circle"></i>
                                                        自客</label>
                                                </div>

                                                <div>
                                                    <input type="radio" name="account-type-radio" id="employer-radio"
                                                        class="account-type-radio" />
                                                    <label for="employer-radio" class="ripple-effect-dark"><i
                                                            class="icon-material-outline-business-center"></i>
                                                        雇主</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>用户名</h5>
                                            <input type="text" class="with-border" value="zongjingcom" disabled>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>真实姓名</h5>
                                            <input type="text" class="with-border" value="马丁">
                                            <span
                                                class="Validform_checktip validform-base Validform_wrong">尚未实名认证</span>
                                            <span class="validation"><a class="popup-with-zoom-anim ripple-effect"
                                                    href="#small-dialog">实名认证</a></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>所在地区</h5>

                                            <div style="display: flex;flex-wrap: wrap;">
                                                <div class="form-multi-sel">
                                                    <select name="province" id="province"
                                                        onchange="getZone(this.value, 'city');"
                                                        class="selectpicker with-border">
                                                        <option value="">省份</option>
                                                    </select>
                                                </div>
                                                <div class="form-multi-sel">
                                                    <select name="city" id="city"
                                                        onchange="getZone(this.value, 'area');"
                                                        class="selectpicker with-border">
                                                        <option value="">城市</option>
                                                        <option value="">城是的发发发</option>
                                                    </select>
                                                </div>
                                                <div class="form-multi-sel margin-right-0">
                                                    <select errormsg="请选择地区！" nullmsg="请选择地区！" datatype="*" name="area"
                                                        id="area" class="selectpicker with-border">
                                                        <option value="">地区</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="Validform_checktip vilid-wrprg"><i
                                                    class="fa fa-exclamation-circle cor-orange text-size18"></i>
                                                如果找不到所在城市，可以选择所在区或者上级城市</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>工作邮箱</h5>
                                            <input type="email" class="with-border" value="tom@example.com" disabled>
                                            <span class="Validform_checktip validform-base Validform_right">邮箱已认证</span>
                                            <span class="validation"><a href="#">修改邮箱</a></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>手机号码</h5>
                                            <input type="number" class="with-border" value="13911111111" disabled>
                                            <span
                                                class="Validform_checktip validform-base Validform_right">已绑定手机号码</span>
                                            <span class="validation"><a href="#">修改手机</a></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>微信号</h5>
                                            <input type="text" class="with-border" value="13911111111">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>QQ号码</h5>
                                            <input type="number" class="with-border" value="13911111111">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>个人简介</h5>
                                            <textarea cols="30" rows="5" class="with-border"> </textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="col-xl-12">
                <a href="#" class="button ripple-effect big margin-top-30">保存</a>
            </div>

        </div>
        <!-- Row / End -->

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