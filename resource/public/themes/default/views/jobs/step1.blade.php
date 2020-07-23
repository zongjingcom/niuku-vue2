<div class="container job-post">
    <div class="row">

        <!-- Content -->
        <div class="col-xl-3 col-lg-3 content-right-offset">
            <div class="side">
                <ul class="stepmenu">
                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>雇佣方式 </span>
                        <i class="completed-icon stepicon fas fa-check-circle completed"></i>
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
                    <li class="disabled">
                        <span><i class="stepicon far fa-layer-group"></i>预览发布 </span>
                        <i class="completed-icon stepicon fa fa-check-circle"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div id="job-post-form" class="post-content">
                <form id="step1_submit"  class="form-wrap" method="post"  action="{!! url('jobs/step1') !!}">
                    {!! csrf_field() !!}
                    <div class="step">
                        <div class="headline">
                            <h3>工作类型</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第1步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-10 margin-bottom-10">
                                        <label class="subtitile"> 你希望创建什么样类型的工作? </label>
                                        <div>
                                            <div class="radio">
                                                <input type="radio" id="radio-new" name="types" value="new" checked required>
                                                <label class="subtitile" for="radio-new">
                                                    <span class="radio-label"></span>
                                                    创建一个新项目</label>
                                            </div>
                                            <div id="job_time" class="margin-bottom-20 margin-left-10 m-xs-top row">
                                                <input type="hidden" id="type" name="type" value="{{ isset($jobInfo['type'])  ?  $jobInfo['type']  : '1' }}" required>
                                                <div class="col-md-6">
                                                    <div class="button-box button-box-radio  {{ (isset($jobInfo['type'])  && $jobInfo['type'] == '1') ? 'active' : '' }} "
                                                        data-type="1">
                                                        <span
                                                            class="glyphicon glyphicon-md icon-line-awesome-tasks m-sm-top"></span>
                                                        <h4>短期项目</h4>
                                                        <ul class="m-md-top">
                                                            <li class="m-xs-bottom">为完成某一特定的产品、服务设立的短期工作</li>
                                                            <li class="m-xs-bottom">短期项目周期少于90天</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="button-box button-box-radio {{ (isset($jobInfo['type']) && $jobInfo['type']  == '2') ? 'active' : '' }}"
                                                        data-type="2">
                                                        <span
                                                            class="glyphicon glyphicon-md air-icon-calendar-over3months m-sm-top"></span>
                                                        <h4>长期工作</h4>
                                                        <ul class="m-md-top">
                                                            <li class="m-xs-bottom">工作会持续一定的时间</li>
                                                            <li class="m-xs-bottom">工作周期大于90天</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="radio">
                                                <input type="radio" id="radio-draft" name="types" value="draft"
                                                    required>
                                                <label class="subtitile" for="radio-draft"><span
                                                        class="radio-label"></span>
                                                    编辑已存在的草稿</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($edit)
                        <input type="hidden"  name="edit" value="true">
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
                    <label class="error" style="color:red"></label>
                    <div class="d-none d-md-block" style="padding:0 30px;">
                        <a id="btn_backward" href="#" class="button gray big ripple-effect backward"></a>
                        <a id="btn_sub" href="javascript:void(0)" class="button big ripple-effect margin-left-20" style="float:right">{{ $edit == '1' ? '保存' : '下一步' }}</a>
                </form>
            </div>
        </div>

    </div>
</div>

{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('iPicker-js','js/plugins/ipicker/dist/iPicker.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('step1-js','js/jobs/step1.js') !!}
