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

                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>标题名称 </span>
                        <i class="completed-icon stepicon fa fa-check-circle completed"></i>
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
                <form id="step3_submit" method="post"  class="form-wrap" action="{!! url('jobs/step3') !!}">
                    {!! csrf_field() !!}
                    <div class="step">
                        <div class="headline">
                            <h3>标题名称</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第3步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <label class="subtitile"> 请输入工作标题 </label>
                                        <div>
                                            <input type="text" id="title" name="title" maxlength="100"
                                                class="with-border margin-bottom-30" placeholder="示例. 建设一个网站"
                                                value="{{ isset($jobInfo['title'])  ?  $jobInfo['title']  : '' }}" required>
                                        </div>
                                        <label class="subtitile"> 请选择所需专业类别 </label>
                                        <div>
                                            <div id="categorylist" class="selectlist">
                                                @if(!empty($category1))
                                                @foreach($category1 as $item)
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-{!! $item->id !!}" name="category1"
                                                            type="radio" value="{!! $item->id !!}"
                                                            @if( isset($jobInfo['category1']) && $jobInfo['category1'] == $item->id) checked @endif required>
                                                        <label for="radio-{!! $item->id !!}"><span
                                                                class="radio-label"></span>{!! $item->name !!}</label>
                                                    </div>
                                                </label>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <label class="subtitile"> 请选择所需专业技能 </label>
                                        <div id="professional_skill">
                                            {{-- js 加载技能标签 --}}
                                            @if(!empty($category2) )
                                            @foreach($category2 as $item)
                                            <div class="tags-group-list-title">
                                                <h4 class="m-0-bottom"> {{$item->name}} <span class="note">(可选)</span>
                                                </h4>
                                                <hr>
                                            </div>
                                            <div class="tags-group-list-attributes">
                                                <div class="tags-container">
                                                    @foreach($skillArr as $skill)
                                                    @if($skill['job_type_id'] == $item->id)
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag{{$skill['id']}}"
                                                            name="skill_tag[]" value="{{$skill['id']}}"
                                                            @if( isset($jobInfo['skill_tag']) && in_array($skill['id'],explode(',', $jobInfo['skill_tag'])) ) checked @endif>
                                                        <label for="tag{{$skill['id']}}">{{$skill['name']}}</label>
                                                    </div>
                                                    @endif

                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
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
                            class="button big ripple-effect margin-left-20 forward"
                            style="float:right">{{ $edit == '1' ? '保存' : '下一步' }}</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('step3-js','js/jobs/step3.js') !!}
