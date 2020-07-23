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
                    <li class="active">
                        <span><i class="stepicon far fa-layer-group"></i>详情描述 </span>
                        <i class="completed-icon stepicon fa fa-check-circle completed"></i>
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
                <form id="step4_submit" method="post"  class="form-wrap"
                    action="{!! url('jobs/step4') !!}">
                    {!! csrf_field() !!}
                    <input type="hidden" id='job_id' value="{{isset($jobInfo['id'])  ?  $jobInfo['id']  : ''}}">
                    <div class="step">
                        <div class="headline">
                            <h3>详情描述</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第4步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <div class="m-md-bottom">
                                            <label class="subtitile"> 请详细描述工作内容: </label>
                                            <div>
                                                <div class="up-disintermediation-container">
                                                    <textarea cols="30" rows="8"  maxlength="1500" 
                                                    onKeyDown='if (this.value.length>=1500){event.returnValue=false}' id="description" name="description"
                                                        class="with-border"  required
                                                        style="margin:0;padding:15px;height: 160px; min-height: 160px; overflow-y: hidden;position: relative; z-index: 1; background-color: transparent;"
                                                        placeholder="请尽量详细描述您的项目需求，以及期望的交付成果，以吸引更多有相关开发经验的自由职业者报名（50 个字符以上）">{{isset($jobInfo['description'])  ?  $jobInfo['description']  : ''}}</textarea>
                                                </div>
                                                <div class="text-right m-xs-top">
                                                    <small class="text-muted">142/5000个字符（至少50个字符）</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-md-bottom">
                                            <label class="subtitile"> 相关文档（可选）</label>
                                            <div class="submit-field">

                                                <!-- Attachments -->
                                                <div id="attachments"
                                                    class="attachments-container margin-top-0 margin-bottom-0">
                                                    {{-- <div class="attachment-box ripple-effect">
                                                      <span>Cover Letter</span>
                                                      <i>PDF</i>
                                                      <button class="remove-attachment" data-tippy-placement="top"
                                                          data-tippy="" data-original-title="Remove"></button>
                                                  </div>
                                                  <div class="attachment-box ripple-effect">
                                                      <span>Contract</span>
                                                      <i>DOCX</i>
                                                      <button class="remove-attachment" data-tippy-placement="top"
                                                          data-tippy="" data-original-title="Remove"></button>
                                                  </div>
                                                  <div class="attachment-box ripple-effect">
                                                      <span>Contract</span>
                                                      <i>PNG</i>
                                                      <button class="remove-attachment" data-tippy-placement="top"
                                                          data-tippy="" data-original-title="Remove"></button>
                                                  </div>
                                                  <div class="attachment-box ripple-effect">
                                                      <span>Contract</span>
                                                      <i>PNG</i>
                                                      <button class="remove-attachment" data-tippy-placement="top"
                                                          data-tippy="" data-original-title="Remove"></button>
                                                  </div>
                                                  <div class="attachment-box ripple-effect">
                                                      <span>Contract</span>
                                                      <i>PNG</i>
                                                      <button class="remove-attachment" data-tippy-placement="top"
                                                          data-tippy="" data-original-title="Remove"></button>
                                                  </div> --}}
                                                </div>
                                                <div class="clearfix"></div>

                                                <!-- Upload Button -->
                                                <div class="uploadButton margin-top-0">
                                                    <input type="file" id="upload" class="uploadButton-input"
                                                        accept="image/*,application/msword,application/vnd.ms-excel,application/vnd.ms-powerpoint,audio/mpeg,audio/mp4,video/mp4,application/pdf"
                                                        multiple="">
                                                    <label class="uploadButton-button ripple-effect" for="upload"
                                                        style="margin:0!important;">上传文件</label>
                                                </div>
                                                <div><small>* 您最多可以附加 5个文件，每个文件的大小不超过100 MB</small></div>
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
                            class="button gray big ripple-effect backward" @if($edit == '1') style="display: none" @endif>上一步</a>
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
{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-validate-js','js/plugins/jquery.validate.min.js')!!}
{!! Theme::asset()->container('custom-js')->usePath()->add('step4-js','js/jobs/step4.js') !!}
{!! Theme::asset()->container('custom-js')->usePath()->add('job_attachment-js','js/jobs/job_attachment.js') !!}

