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
                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>招募偏好 </span>
                        <i class="completed-icon stepicon fa fa-check-circle completed"></i>
                    </li>
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>预算金额 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>预览发布 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div id="job-post-form" class="post-content">
                <form id="step5_submit" method="post" class="form-wrap" action="{!! url('jobs/step5') !!}">
                    {!! csrf_field() !!}
                    <div class="step">
                        <div class="headline">
                            <h3>招募要求</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第5步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <div class="m-md-bottom">在成功的投标中指定您要寻找的资格。 <div class="p-md-top d-block">
                                                如果自由职业者和代理机构不符合您的喜好，他们仍然可以申请，但他们会被明确通知他们处于不利地位。</div>
                                        </div>
                                        <label class="subtitile"> 人才类型 </label>
                                        <div class="row margin-bottom-30">
                                            <input style="display:none" id="talent_type" name="talent_type"
                                                value="{{isset($jobInfo['talent_type'])  ?  $jobInfo['talent_type']  : '1'}}"
                                                required>
                                            <div class="col-sm-4">
                                                <div class="button-box button-box-radio p-lg-top-bottom  {{ $jobInfo['talent_type'] == '1' || !isset($jobInfo['talent_type']) ? 'active' : '' }} "
                                                    data-type="1">
                                                    <span
                                                        class="glyphicon glyphicon-md icon-line-awesome-tasks m-sm-top"></span>
                                                    <h4>独立自由职业者</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="button-box button-box-radio p-lg-top-bottom {{ $jobInfo['talent_type'] =='2' ? 'active' : '' }}"
                                                    data-type="2">
                                                    <span
                                                        class="glyphicon glyphicon-md air-icon-calendar-over3months m-sm-top"></span>
                                                    <h4>团队或公司</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="freelancers_number" class="row margin-bottom-30">
                                            <div class="col-sm-6 col-md-5">
                                                <label class="subtitile" for="freelancersToHire">招募人才数量</label>
                                                <input class=" with-border margin-bottom-0 " id="talent_number"
                                                    name="talent_number" type="number" min="1" max="20"
                                                    value="{{isset($jobInfo['talent_number'])  ?  $jobInfo['talent_number']  : ''}}"
                                                    required>
                                            </div>
                                        </div>

                                        <label class="subtitile"> 人才所在地 </label>
                                        <div class="row margin-bottom-30">
                                            <div style="padding:0 15px;">
                                                <div id="workArea" style="display:inline;max-width:100%"></div>
                                                <input style="display: none" type="text" id="province" name="province"
                                                    value="{{isset($jobInfo['province'])  ?  $jobInfo['province']  : '' }}">
                                                <input style="display: none" type="text" id="city" name="city"
                                                    value="{{isset($jobInfo['city'])  ?  $jobInfo['city']  : '' }}">
                                                <input style="display: none" type="text" id="area" name="area"
                                                    value="{{isset($jobInfo['area'])  ?  $jobInfo['area']  : '' }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-20">
                                            <div class="col-sm-6 col-md-4">
                                                <label class="subtitile" for="freelancersToHire">远程工作记录</label>
                                                <div class="radio">
                                                    <input id="radio-1" name="work_record" type="radio"
                                                        style="z-index:-1" value="1" @if($jobInfo['work_record']=='1' )
                                                        checked @endif required>
                                                    <label for="radio-1"><span class="radio-label"></span> 所有人才</label>
                                                </div>
                                                <br>
                                                <div class="radio">
                                                    <input id="radio-2" name="work_record" type="radio"
                                                        style="z-index:-1" value="2" @if($jobInfo['work_record']=='2' )
                                                        checked @endif required>
                                                    <label for="radio-2"><span
                                                            class="radio-label"></span>有工作成功交付记录</label>
                                                </div>

                                                <div class="radio">
                                                    <input id="radio-3" name="work_record" type="radio"
                                                        style="z-index:1" value="3" @if($jobInfo['work_record']=='3' )
                                                        checked @endif required>
                                                    <label for="radio-3"><span
                                                            class="radio-label"></span>工作交付率90%</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-md-bottom">
                                            <label class="subtitile"> 人才级别</label>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-10">
                                                    <div id="talentlist" class="selectlist">
                                                        <label class="selectlist-option"
                                                            style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                            <div class="radio">
                                                                <input id="radio-l1" name="experience_level"
                                                                    type="radio" value="1" @if(
                                                                    $jobInfo['experience_level']=='1' ) checked @endif
                                                                    required>
                                                                <label for="radio-l1"><span
                                                                        class="radio-label"></span>入门级</label>
                                                            </div>
                                                        </label>
                                                        <label class="selectlist-option"
                                                            style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                            <div class="radio">
                                                                <input id="radio-l3" name="experience_level"
                                                                    type="radio" value="2"
                                                                    @if($jobInfo['experience_level']=='2' ) checked
                                                                    @endif required>
                                                                <label for="radio-l3"><span
                                                                        class="radio-label"></span>资深级</label>
                                                            </div>
                                                        </label>
                                                        <label class="selectlist-option"
                                                            style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                            <div class="radio">
                                                                <input id="radio-l6" name="experience_level"
                                                                    type="radio" value="3"
                                                                    @if($jobInfo['experience_level']=='3' ) checked
                                                                    @endif required>
                                                                <label for="radio-l6"><span
                                                                        class="radio-label"></span>专家级</label>
                                                            </div>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($edit == '1')
                    <input type="hidden" name="edit" value="1">
                    @endif
                    @if ($errors->any())
                    <div style="color:red">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="d-none d-md-block" style="padding:0 30px;">
                        <div class="d-none d-md-block" style="padding:0 30px;">
                            <a id="btn_backward" href="/jobs/publish?action=previous"
                                class="button gray big ripple-effect backward" @if($edit=='1' ) style="display: none"
                                @endif>上一步</a>
                            <a id="btn_sub" href="javascript:void(0)"
                                class="button big ripple-effect margin-left-20 forward" style="float:right">
                                {{ $edit == '1' ? '保存' : '下一步' }}</a>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>

{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('iPicker-js','js/plugins/ipicker/dist/iPicker.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('step5-js','js/jobs/step5.js') !!}
