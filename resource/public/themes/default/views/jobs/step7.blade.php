<div class="container job-post">
    <div class="row">

        <!-- Content -->
        <div class="col-xl-3 col-lg-3 content-right-offset">
            <div class="side">
                <ul class="stepmenu">
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>雇佣方式 </span>
                        <i class="completed-icon stepicon fas fa-check-circle"></i>
                    </li>
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>工作类别 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>

                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>标题名称 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>详情描述 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>招募偏好 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>预算金额 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>预览发布 </span>
                        <i class="completed-icon stepicon fa fa-check-circle completed"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div id="job-post-form" class="post-content">
                <form id="step7_submit" method="post" name="job-post-form" class="form-wrap"
                    action="{!! url('jobs/step7') !!}">
                    {!! csrf_field() !!}
                    <div class="step">
                        <div class="headline">
                            <h3>预览发布</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第7步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <label class="subtitile"> 雇佣方式 </label>
                                        @if(isset($jobInfo['type']))
                                        <div>工作类型 ：
                                            @if($jobInfo['type'] == '1') 短期项目
                                            @elseif($jobInfo['type'] == '2') 长期工作
                                            @endif
                                        </div>
                                        @endif
                                        <a  href="/jobs/publish?edit=1">修改</a>

                                        <label class="subtitile"> 工作类别 </label>
                                        @if(isset($jobInfo['category']))
                                        <div>项目类别: {{$jobInfo['category']['name']}}</div>
                                        @endif
                                        <a href="/jobs/publish?edit=2">修改</a>

                                        <label class="subtitile"> 标题名称 </label>
                                        @if(isset($jobInfo['category']))
                                        <div>工作标题 ：{{$jobInfo['title']}}</div>
                                        @endif
                                        @if(isset($jobInfo['category1']))
                                        <div>专业类型 ：{{$jobInfo['category1']['name']}}</div>
                                        @endif
                                        @if(isset($jobInfo['skill_tag']))
                                        <div>专业技能 ：{{$jobInfo['skill_tag']}}</div>
                                        @endif
                                        <a href="/jobs/publish?edit=3">修改</a>

                                        <label class="subtitile"> 详情描述 </label>
                                        @if(isset($jobInfo['description']))
                                        <div>工作内容 ：{{$jobInfo['description']}}</div>
                                        @endif
                                        <a href="/jobs/publish?edit=4">修改</a>

                                        <label class="subtitile"> 招募偏好 </label>
                                        @if(isset($jobInfo['talent_type']))
                                        <div>人才类型 ：
                                            @if($jobInfo['talent_type'] == '1') 独立自由职业者
                                            @elseif($jobInfo['talent_type'] == '2') 团队或公司
                                            @endif
                                        </div>
                                        @endif

                                        @if(isset($jobInfo['talent_number']))
                                        <div>人才数量 ：{{$jobInfo['talent_number']}} 人</div>
                                        @endif

                                        @if(isset($jobInfo['area']))
                                        <div>人才坐标 ：{{$jobInfo['area']}} </div>
                                        @endif

                                        @if(isset($jobInfo['work_record']))
                                        <div>工作记录 ：
                                            @if($jobInfo['work_record'] == '1') 所有人才
                                            @elseif($jobInfo['work_record'] == '2') 有工作成功交付记录
                                            @elseif($jobInfo['work_record'] == '3') 工作交付率90%
                                            @endif
                                        </div>
                                        @endif

                                        @if(isset($jobInfo['experience_level']))
                                        <div>人才级别 ：
                                            @if($jobInfo['experience_level'] == '1') 入门级
                                            @elseif($jobInfo['experience_level'] == '2') 资深级
                                            @elseif($jobInfo['experience_level'] == '3') 专家级
                                            @endif
                                        </div>
                                        @endif
                                        <a href="/jobs/publish?edit=5">修改</a>

                                        <label class="subtitile"> 预算金额 </label>
                                        @if(isset($jobInfo['pay_type']))
                                        <div>计薪方式 ：
                                            @if($jobInfo['pay_type'] == '1') 按时薪
                                            @elseif($jobInfo['pay_type'] == '2') 固定价格
                                            @elseif($jobInfo['pay_type'] == '3') 按日薪
                                            @elseif($jobInfo['pay_type'] == '4') 按月薪
                                            @endif
                                        </div>
                                        @endif
                                        @if(isset($jobInfo['unit_price']))
                                        <div>计薪价格 ：{{$jobInfo['unit_price']}} 元
                                            @if($jobInfo['pay_type'] == '1') /小时
                                            @elseif($jobInfo['pay_type'] == '3') /日
                                            @elseif($jobInfo['pay_type'] == '4') /月
                                            @endif
                                        </div>
                                        @endif
                                        @if(isset($jobInfo['duration']))
                                        <div>工作周期 ：{{$jobInfo['duration']}} 天</div>
                                        @endif
                                        @if(isset($jobInfo['duration']))
                                        <div>每日工作时长 ：{{$jobInfo['per_day_work_time']}} 小时</div>
                                        @endif
                                        <a href="/jobs/publish?edit=6">修改</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span id="errorSpan"></span>
                    <div class="d-none d-md-block" style="padding:0 30px;">
                        <div class="d-none d-md-block" style="padding:0 30px;">
                            <a id="btn_backward" href="/jobs/publish?action=previous"
                                class="button gray big ripple-effect backward">上一步</a>
                            <a onclick="document.getElementById('step7_submit').submit();"
                                class="button big ripple-effect margin-left-20 forward" style="float:right">提交</a>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>

{!!
Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('iPicker-js','js/plugins/ipicker/dist/iPicker.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('validform-js','js/plugins/Validform_v5.3.2.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('wizard-js','js/plugins/jquery.wizard.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-form-js','js/plugins/form/jquery.form-3.50.js') !!}
{!!Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('post-js','js/jobs/post.js') !!}
