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
                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>工作类别 </span>
                        <i class="completed-icon stepicon fa fa-check-circle completed"></i>
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
                <form id="step2_submit" method="post"  class="form-wrap"
                    action="{!! url('jobs/step2') !!}">
                    {!! csrf_field() !!}
                    <div class="step">
                        <div class="headline">
                            <h3>项目类别</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第2步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <label class="subtitile"> 你希望创建什么样类型的工作? </label>
                                        <div>
                                            <input type="hidden" id="category" name="category" value="{{ isset($jobInfo['category'])  ?  $jobInfo['category']  : '' }}" required>
                                            <div class="categories-container">
                                                @if(!empty($category0))
                                                @foreach($category0 as $item)
                                                <a class="category-box" href="javascript:void(0);"
                                                    data-id="{!! $item->id !!}">
                                                    <div class="category-box-icon">
                                                        <i class="{!! $item->icon !!}"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>{!! $item->name !!}</h5>
                                                    </div>
                                                </a>
                                                @endforeach
                                                @endif
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
                        <a id="btn_backward" href="/jobs/publish?action=previous"
                            class="button gray big ripple-effect backward" @if($edit=='1' ) style="display: none"
                            @endif>上一步</a>
                        <a id="btn_sub" href="javascript:void(0)"
                            class="button big ripple-effect margin-left-20"
                            style="float:right">{{ $edit == '1' ? '保存' : '下一步' }}</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

{!!Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('step2-js','js/jobs/step2.js') !!}
