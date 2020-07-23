<div class="container job-post">
    <div class="row">

        <!-- Content -->
        <div class="col-xl-3 col-lg-3 content-right-offset">
            <div class="side">
                <ul class="stepmenu">
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>雇佣方式 </span>
                        <i class="completed-icon stepicon fas fa-check-circle "></i>
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
                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>预算金额 </span>
                        <i class="completed-icon stepicon fa fa-check-circle completed"></i>
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
                <form id="step6_submit" method="post" class="form-wrap"
                    action="{!! url('jobs/step6') !!}">
                    {!! csrf_field() !!}
                    <div class="step">
                        <div class="headline">
                            <h3>工作预算</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第6步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <div class="card-content">
                                            <section class="content-section p-lg-top">
                                                <div class="m-md-bottom">
                                                    <label>
                                                        <span>您想如何向您的自由职业者或代理商付款？</span>
                                                        <a href=""><span
                                                                class="glyphicon air-icon-question-circle"></span> </a>
                                                    </label>
                                                    <field-job-type>
                                                        <field-boxes>
                                                            <div id="pay_category" class="row">
                                                                <input id="pay_type" name="pay_type" style="display: none" value="{{ isset($jobInfo['pay_type'])  ?  $jobInfo['pay_type']  : '2' }}"  required>
                                                                <div class="col-sm-4 field-box-col m-md-bottom">
                                                                    <field-box item="item">
                                                                        <div class="button-box p-lg-top-bottom  align-description {{ !isset($jobInfo['pay_type']) || $jobInfo['pay_type'] == '2'  ? 'active':'' }}"
                                                                            title="按小时付款" tabindex="0"
                                                                            data-category="2">
                                                                            <span
                                                                                class="glyphicon glyphicon-md air-icon-clock-timelog"></span>
                                                                            <div>
                                                                                <p class="field-box-label m-0">按时计薪</p>
                                                                                <small>在正在进行的项目中很受欢迎</small>
                                                                            </div>
                                                                            <span
                                                                                class="badge badge-relationship">流行</span>
                                                                        </div>
                                                                    </field-box>
                                                                </div>

                                                                <div class="col-sm-4 field-box-col m-md-bottom">
                                                                    <field-box item="item">
                                                                        <div class="button-box p-lg-top-bottom  align-description {{ isset($jobInfo['pay_type']) && $jobInfo['pay_type'] == '1' ? 'active':''}}"
                                                                            title="支付固定价格" tabindex="0"
                                                                            data-category="1">
                                                                            <span
                                                                                class="glyphicon glyphicon-md air-icon-fixed-price"></span>
                                                                            <div>
                                                                                <p class="field-box-label m-0">支付固定价格
                                                                                </p>
                                                                                <small>受欢迎的一次性项目</small>
                                                                            </div>
                                                                        </div>
                                                                    </field-box>
                                                                </div>
                                                            </div>
                                                        </field-boxes>
                                                    </field-job-type>
                                                </div>


                                                <div class="m-md-bottom">
                                                    <label id="pay_title">@if($jobInfo['pay_type'] =='1')
                                                        固定费用 @else 选择计时方式  @endif</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-10">

                                                            <div id="paytypelist" class="selectlist" @if($jobInfo['pay_type'] =='1'
                                                                ) style="display: none" @endif>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hour" name="pay_types"
                                                                            type="radio" value="2" @if($jobInfo['pay_type'] =='2' )
                                                                            checked @endif required>
                                                                        <label for="radio-hour"><span
                                                                                class="radio-label"></span>按时薪</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-day" name="pay_types"
                                                                            type="radio" value="3" @if($jobInfo['pay_type'] =='3' )
                                                                            checked @endif required>
                                                                        <label for="radio-day"><span
                                                                                class="radio-label"></span> 按日薪 </label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-mon" name="pay_types"
                                                                            type="radio" value="4" @if($jobInfo['pay_type'] =='4' )
                                                                            checked @endif required>
                                                                        <label for="radio-mon"><span
                                                                                class="radio-label"></span> 按月薪</label>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-7 col-xs-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="fe-currency"
                                                                    style="width: 100%; margin-bottom: 0;position: relative;">
                                                                    <input id="unit_price" name="unit_price"
                                                                        class="form-control with-border text-right p-sm-right margin-bottom-0"
                                                                        type="text" placeholder="0.00"
                                                                        value="{{$jobInfo['unit_price']}}" autocomplete="off"
                                                                        required>
                                                                </div>
                                                                <span id="chargedAmount" class="m-sm-left nowrap"
                                                                    style="">/@if($jobInfo['pay_type'] == '1') 天 @else 小时
                                                                    @endif</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-md-bottom">
                                                    <label> 预期工作周期</label>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-7 col-xs-8">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    style="width: 100%; margin-bottom: 0;position: relative;">
                                                                    <input id="duration" name="duration"
                                                                        class="form-control with-border text-right p-sm-right margin-bottom-0"
                                                                        type="text" autocomplete="off"
                                                                        value="{{$jobInfo['duration']}}" required>
                                                                </div>
                                                                <span class="m-sm-left nowrap" style="">&nbsp;天</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="worktimepanel" class="m-md-bottom" @if($jobInfo['pay_type'] =='1' )
                                                    style="display: none" @endif>
                                                    <label> 需要每日工作时长</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-10">

                                                            <div id="worktimelist" class="selectlist">
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr1" name="per_day_work_time"
                                                                            type="radio" value="3"
                                                                            @if( $jobInfo['per_day_work_time'] =='3' ) checked @endif
                                                                            required>
                                                                        <label for="radio-hr1"><span
                                                                                class="radio-label"></span>1-3小时</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr3" name="per_day_work_time"
                                                                            type="radio" value="6"
                                                                            @if($jobInfo['per_day_work_time'] =='6' ) checked @endif
                                                                            required>
                                                                        <label for="radio-hr3"><span
                                                                                class="radio-label"></span>3-6小时</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr6" name="per_day_work_time"
                                                                            type="radio" value="8"
                                                                            @if($jobInfo['per_day_work_time'] =='8' ) checked @endif
                                                                            required>
                                                                        <label for="radio-hr6"><span
                                                                                class="radio-label"></span>6-8小时</label>
                                                                    </div>
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

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
                        <a id="btn_backward" href="/jobs/publish?action=previous"
                            class="button gray big ripple-effect backward" @if($edit == true) style="display: none" @endif>上一步</a>
                        <a id="btn_sub" href="javascript:void(0)"
                            class="button big ripple-effect margin-left-20 forward" style="float:right">
                            {{ $edit == true ? '保存' : '下一步' }}</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('step6-js','js/jobs/step6.js') !!}
