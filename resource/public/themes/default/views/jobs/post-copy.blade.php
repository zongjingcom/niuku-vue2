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
                <form id="job_submit" method="post" name="job-post-form" class="form-wrap"
                    action="{!! url('jobs/post') !!}">
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
                                                <input type="radio" id="radio-new" name="type" value="new" required>
                                                <label class="subtitile" for="radio-new"><span
                                                        class="radio-label"></span>
                                                    创建一个新项目</label>
                                            </div>
                                            <div id="job_time" class="margin-bottom-20 margin-left-10 m-xs-top row">
                                                <input id="type" name="type" aria-required="true" aria-invalid="false"
                                                    value="1" class="validate_hidden" required>
                                                <div class="col-md-6">
                                                    <div class="button-box button-box-radio active" data-type="1">
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
                                                    <div class="button-box button-box-radio" data-type="2">
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
                                                <input type="radio" id="radio-draft" name="type" value="draft" required>
                                                <label class="subtitile" for="radio-draft"><span
                                                        class="radio-label"></span>编辑已存在的草稿</label>
                                                <select name="pets" id="pet-select">
                                                    <option value="">--Please choose an option--</option>
                                                    <option value="dog">Dog</option>
                                                    <option value="cat">Cat</option>
                                                    <option value="hamster">Hamster</option>
                                                    <option value="parrot">Parrot</option>
                                                    <option value="spider">Spider</option>
                                                    <option value="goldfish">Goldfish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step" style="display:none">
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
                                            <input type="text" id="category" name="category" class="validate_hidden"
                                                required>
                                            <div class="categories-container">
                                                {{-- 根据数据渲染项目类别 --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step" style="display:none">
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
                                            <input type="text" id="title" name="title"
                                                class="with-border margin-bottom-30" placeholder="示例. 建设一个网站" required>
                                        </div>
                                        <label class="subtitile"> 请选择所需专业类别 </label>
                                        <div>
                                            <div id="categorylist" class="selectlist">
                                                {{-- 根据返回数据渲染项目分类 --}}
                                            </div>
                                        </div>
                                        <label class="subtitile"> 请选择所需专业技能 </label>
                                        <div id="professional_skill">
                                            {{-- 根据专业选择渲染专业技能 --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step" style="display:none">
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
                                                    <textarea cols="30" rows="8" id="description" name="description"
                                                        class="with-border" required
                                                        style="margin:0;padding:15px;height: 160px; min-height: 160px; overflow-y: hidden;position: relative; z-index: 1; background-color: transparent;"
                                                        placeholder="请尽量详细描述您的项目需求，以及期望的交付成果，以吸引更多有相关开发经验的自由职业者报名（50 个字符以上）"></textarea>
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

                    <div class="step" style="display:none">
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
                                            <input id="talent_type" name="talent_type" value="1" class="validate_hidden"
                                                required>
                                            <div class="col-sm-4">
                                                <div class="button-box button-box-radio p-lg-top-bottom active"
                                                    data-type="1">
                                                    <span
                                                        class="glyphicon glyphicon-md icon-line-awesome-tasks m-sm-top"></span>
                                                    <h4>独立自由职业者</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="button-box button-box-radio p-lg-top-bottom" data-type="2">
                                                    <span
                                                        class="glyphicon glyphicon-md air-icon-calendar-over3months m-sm-top"></span>
                                                    <h4>团队或公司</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="freelancers_number" class="row margin-bottom-30">
                                            <div class="col-sm-6 col-md-5">
                                                <label class="subtitile" for="freelancersToHire">招募人才数量</label>
                                                <input class="with-border margin-bottom-0" id="talent_number"
                                                    name="talent_number" type="number" min="1" max="20" required>
                                            </div>
                                        </div>

                                        <label class="subtitile"> 人才所在地 </label>
                                        <div class="row margin-bottom-30">
                                            <div style="padding:0 15px;">
                                                <div id="workArea" style="display:inline;max-width:100%"></div>
                                                <input class="validate_hidden" id="province" name="province" value="">
                                                <input class="validate_hidden" id="city" name="city" value="">
                                                <input class="validate_hidden" id="area" name="area" value="" required>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-20">
                                            <div class="col-sm-6 col-md-4">
                                                <label class="subtitile" for="freelancersToHire">远程工作记录</label>
                                                <div class="radio">
                                                    <input id="radio-1" name="work_record" type="radio"
                                                        style="z-index:-1" value="1" checked="" required>
                                                    <label for="radio-1"><span class="radio-label"></span> 所有人才</label>
                                                </div>
                                                <br>
                                                <div class="radio">
                                                    <input id="radio-2" name="work_record" type="radio"
                                                        style="z-index:-1" value="2" required>
                                                    <label for="radio-2"><span
                                                            class="radio-label"></span>有工作成功交付记录</label>
                                                </div>

                                                <div class="radio">
                                                    <input id="radio-3" name="work_record" type="radio"
                                                        style="z-index:1" value="3" required>
                                                    <label for="radio-3"><span
                                                            class="radio-label"></span>工作交付率90%</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-md-bottom">
                                            <label> 人才级别</label>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-10">

                                                    <div id="talentlist" class="selectlist">
                                                        <label class="selectlist-option"
                                                            style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                            <div class="radio">
                                                                <input id="radio-l1" name="talent_level" type="radio"
                                                                    value="1" required>
                                                                <label for="radio-l1"><span
                                                                        class="radio-label"></span>入门级</label>
                                                            </div>
                                                        </label>
                                                        <label class="selectlist-option"
                                                            style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                            <div class="radio">
                                                                <input id="radio-l3" name="talent_level" type="radio"
                                                                    value="2" required>
                                                                <label for="radio-l3"><span
                                                                        class="radio-label"></span>资深级</label>
                                                            </div>
                                                        </label>
                                                        <label class="selectlist-option"
                                                            style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                            <div class="radio">
                                                                <input id="radio-l6" name="talent_level" type="radio"
                                                                    value="3" required>
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

                    <div class="step" style="display:none">
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
                                                                <input id="pay_types" name="pay_types" value="2"
                                                                    class="validate_hidden" required>
                                                                <div class="col-sm-4 field-box-col m-md-bottom">
                                                                    <field-box item="item">
                                                                        <div class="button-box p-lg-top-bottom  align-description active"
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
                                                                        <div class="button-box p-lg-top-bottom  align-description"
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
                                                    <label id="pay_title"> 选择计时方式</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-10">

                                                            <div id="paytypelist" class="selectlist">
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hour" name="pay_type"
                                                                            type="radio" checked value="2">
                                                                        <label for="radio-hour"><span
                                                                                class="radio-label"></span>按时薪</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-day" name="pay_type"
                                                                            type="radio" value="3">
                                                                        <label for="radio-day"><span
                                                                                class="radio-label"></span> 按日薪 </label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-mon" name="pay_type"
                                                                            type="radio" value="4">
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
                                                                        autocomplete="off" required>
                                                                </div>
                                                                <span id="chargedAmount" class="m-sm-left nowrap"
                                                                    style="">/小时</span>
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
                                                                        type="text" autocomplete="off" required>
                                                                </div>
                                                                <span class="m-sm-left nowrap" style="">/&nbsp;天</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="worktimepanel" class="m-md-bottom">
                                                    <label> 需要每日工作时长</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-10">

                                                            <div id="worktimelist" class="selectlist">
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr1" name="per_day_work_time"
                                                                            type="radio" value="3" required>
                                                                        <label for="radio-hr1"><span
                                                                                class="radio-label"></span>1-3小时</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr3" name="per_day_work_time"
                                                                            type="radio" value="6" required>
                                                                        <label for="radio-hr3"><span
                                                                                class="radio-label"></span>3-6小时</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr6" name="per_day_work_time"
                                                                            type="radio" value="8" required>
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

                    <div class="submit step wizard-step" style="display:none">
                        <div class="headline">
                            <h3>预览发布</h3>
                            <font style="vertical-align: inherit;font-size:13px"> 第7步，共7步 </font>
                        </div>
                        <div class="form-group">
                            <div class="content no-border">
                                <div class="row">
                                    <div class="col-md-12 margin-bottom-10">
                                        <label class="subtitile"> 请输入工作标题 </label>
                                        <div>需要创建响应式WordPress主题的开发人员</div>
                                        <div class="review-item"> <label>工作类别</label>
                                            <div>CMS开发 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span id="errorSpan"></span>
                    <div class="d-none d-md-block" style="padding:0 30px;">
                        <a id="btn_backward" href="javascript:void(0)"
                            class="button gray big ripple-effect backward">上一步</a>
                        <a id="next_sub" href="javascript:void(0)"
                            class="button big ripple-effect margin-left-20 forward" style="float:right">下一步</a>
                        <a id="btn_sub" href="javascript:void(0)" class="button big ripple-effect margin-left-20 submit"
                            style="float:right;display:none" onclick="draftsJobSave(1)">提交</a>
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
