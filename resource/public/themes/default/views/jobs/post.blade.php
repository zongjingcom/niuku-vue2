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
                <form name="job-post-form" class="form-wrap">

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
                                                <input id="radio-new" name="jobtype" value="new" type="radio">
                                                <label class="subtitile" for="radio-new"><span
                                                        class="radio-label"></span>
                                                    创建一个新项目</label>
                                            </div>
                                            <div class="margin-bottom-20 margin-left-10 m-xs-top row">
                                                <input type="hidden" name="type" value="1" aria-required="true" aria-invalid="false">
                                                <div class="col-md-6">
                                                    <div class="button-box button-box-radio active">
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
                                                    <div class="button-box button-box-radio">
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
                                                <input id="radio-draft" name="jobtype" value="draft" type="radio">
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
                                            <div class="categories-container">

                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-file-code-o"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>网站/APP开发</h5>
                                                    </div>
                                                </a>
                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-image"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>UI &amp; 交互设计</h5>
                                                    </div>
                                                </a>

                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-pencil"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>文案撰稿 &amp; 翻译</h5>
                                                    </div>
                                                </a>
                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-bullhorn"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>动画&amp;视频创意</h5>
                                                    </div>
                                                </a>
                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-bullhorn"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>数字营销和网络推广</h5>
                                                    </div>
                                                </a>

                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-cloud-upload"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>客户服务</h5>
                                                    </div>
                                                </a>

                                                <!-- Category Box -->
                                                <a class="category-box">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-suitcase"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>品牌&amp;包装设计</h5>
                                                    </div>
                                                </a>

                                                <!-- Category Box -->
                                                <a class="category-box popup-with-zoom-anim" href="#small-dialog-3">
                                                    <div class="category-box-icon">
                                                        <i class="icon-line-awesome-pie-chart"></i>
                                                    </div>
                                                    <div class="category-box-content">
                                                        <h5>电商专区</h5>
                                                    </div>
                                                </a>
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
                                            <input type="text" class="with-border margin-bottom-30"
                                                placeholder="示例. 建设一个网站">
                                        </div>
                                        <label class="subtitile"> 请选择所需专业类别 </label>
                                        <div>
                                            <div id="jobtypelist" class="selectlist">
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-21" name="radio-cycle" type="radio">
                                                        <label for="radio-21"><span class="radio-label"></span>
                                                            网站/APP开发</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-22" name="radio-cycle" type="radio">
                                                        <label for="radio-22"><span class="radio-label"></span> UI &amp;
                                                            交互设计</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-23" name="radio-cycle" type="radio">
                                                        <label for="radio-23"><span class="radio-label"></span> 文案撰稿
                                                            &amp; 翻译</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 0px;">
                                                    <div class="radio">
                                                        <input id="radio-24" name="radio-cycle" type="radio">
                                                        <label for="radio-24"><span class="radio-label"></span>
                                                            动画&amp;视频创意</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-25" name="radio-cycle" type="radio">
                                                        <label for="radio-25"><span class="radio-label"></span>
                                                            数字营销和网络推广</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-26" name="radio-cycle" type="radio">
                                                        <label for="radio-26"><span class="radio-label"></span>
                                                            品牌&amp;包装设计</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 8px;">
                                                    <div class="radio">
                                                        <input id="radio-27" name="radio-cycle" type="radio">
                                                        <label for="radio-27"><span class="radio-label"></span>
                                                            客户服务</label>
                                                    </div>
                                                </label>
                                                <label class="selectlist-option"
                                                    style="width: calc((100% - 36px) / 4); margin-right: 0px;">
                                                    <div class="radio">
                                                        <input id="radio-28" name="radio-cycle" type="radio">
                                                        <label for="radio-28"><span class="radio-label"></span>
                                                            事务助理</label>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="subtitile"> 请选择所需专业技能 </label>
                                        <div>
                                            <div class="tags-group-list-title">
                                                <h4 class="m-0-bottom"> UI & 交互设计 <span class="note">(可选)</span> </h4>
                                                <hr>
                                            </div>
                                            <div class="tags-group-list-attributes">
                                                <div class="tags-container">
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag1">
                                                        <label for="tag1">front-end dev</label>
                                                    </div>
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag2">
                                                        <label for="tag2">angular</label>
                                                    </div>
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag3">
                                                        <label for="tag3">react</label>
                                                    </div>
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag4">
                                                        <label for="tag4">vue js</label>
                                                    </div>
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag5">
                                                        <label for="tag5">web apps</label>
                                                    </div>
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag6">
                                                        <label for="tag6">网页设计</label>
                                                    </div>
                                                    <div class="tag">
                                                        <input type="checkbox" id="tag7">
                                                        <label for="tag7">wordpress模版开发</label>
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
                                                    <textarea cols="30" rows="8" name="description" class="with-border"
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
                                                <div class="attachments-container margin-top-0 margin-bottom-0">
                                                    <div class="attachment-box ripple-effect">
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
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <!-- Upload Button -->
                                                <div class="uploadButton margin-top-0">
                                                    <input class="uploadButton-input" type="file"
                                                        accept="image/*, application/pdf" id="upload" multiple="">
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
                                            <input type="hidden" name="type" value="1">
                                            <div class="col-sm-4">
                                                <div class="button-box button-box-radio p-lg-top-bottom active">
                                                    <span
                                                        class="glyphicon glyphicon-md icon-line-awesome-tasks m-sm-top"></span>
                                                    <h4>独立自由职业者</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="button-box button-box-radio p-lg-top-bottom">
                                                    <span
                                                        class="glyphicon glyphicon-md air-icon-calendar-over3months m-sm-top"></span>
                                                    <h4>团队或公司</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-30">
                                            <div class="col-sm-6 col-md-5">
                                                <label class="subtitile" for="freelancersToHire">招募人才数量</label>
                                                <input class="with-border margin-bottom-0" id="freelancersToHire"
                                                    name="freelancersToHire" type="number" min="1" max="20" required=""
                                                    style="">
                                            </div>
                                        </div>

                                        <label class="subtitile"> 人才所在地 </label>
                                        <div class="row margin-bottom-30">
                                            <div style="padding:0 15px;">
                                                <div id="workArea" style="display:inline;max-width:100%"></div>
                                                <input type="hidden" id="province" name="province" value="">
                                                <input type="hidden" id="city" name="city" value="">
                                                <input type="hidden" id="area" name="area" nullmsg="请选择省市区！"
                                                    datatype="*" errormsg="请选择省市区" value="">
                                                <span class="Validform_checktip vilid-wrprg"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-20">
                                            <div class="col-sm-6 col-md-4">
                                                <label class="subtitile" for="freelancersToHire">远程工作记录</label>
                                                <div class="radio">
                                                    <input id="radio-1" name="radio" type="radio" checked=""
                                                        style="z-index:-1">
                                                    <label for="radio-1"><span class="radio-label"></span> 所有人才</label>
                                                </div>
                                                <br>
                                                <div class="radio">
                                                    <input id="radio-2" name="radio" type="radio" style="z-index:-1">
                                                    <label for="radio-2"><span class="radio-label"></span>
                                                        有工作成功交付记录</label>
                                                </div>

                                                <div class="radio">
                                                    <input id="radio-3" name="radio" type="radio" style="z-index:1">
                                                    <label for="radio-3"><span class="radio-label"></span>
                                                        工作交付率90%</label>
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
                                                                        <input id="radio-l1" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-l1"><span
                                                                                class="radio-label"></span>普通级</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-l3" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-l3"><span
                                                                                class="radio-label"></span> 资深级
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-l6" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-l6"><span
                                                                                class="radio-label"></span>
                                                                                专家级</label>
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
                                                            <div class="row">
                                                                <div class="col-sm-4 field-box-col m-md-bottom">
                                                                    <field-box item="item">
                                                                        <div class="button-box p-lg-top-bottom  align-description active"
                                                                            title="按小时付款" tabindex="0" style="">
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
                                                                            title="支付固定价格" tabindex="0" style="">
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
                                                    <label> 选择计时方式</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-10">

                                                            <div id="paytypelist" class="selectlist">
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hour" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-hour"><span
                                                                                class="radio-label"></span>按时薪</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-day" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-day"><span
                                                                                class="radio-label"></span> 按日薪 </label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-mon" name="radio-cycle"
                                                                            type="radio">
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
                                                                    <input
                                                                        class="form-control with-border text-right p-sm-right margin-bottom-0"
                                                                        id="chargedAmount" name="chargedAmount"
                                                                        type="text" placeholder="0.00"
                                                                        autocomplete="off" required="" style="">
                                                                </div>
                                                                <span class="m-sm-left nowrap" style="">/小时</span>
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
                                                                    <input
                                                                        class="form-control with-border text-right p-sm-right margin-bottom-0"
                                                                        type="text" autocomplete="off" required=""
                                                                        style="">
                                                                </div>
                                                                <span class="m-sm-left nowrap" style="">/&nbsp;天</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-md-bottom">
                                                    <label> 需要每日工作时长</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-10">

                                                            <div id="worktimelist" class="selectlist">
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr1" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-hr1"><span
                                                                                class="radio-label"></span>1-3小时</label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr3" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-hr3"><span
                                                                                class="radio-label"></span> 3-6小时
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <label class="selectlist-option"
                                                                    style="width: calc((100% - 36px) / 3); margin-right: 8px;">
                                                                    <div class="radio">
                                                                        <input id="radio-hr6" name="radio-cycle"
                                                                            type="radio">
                                                                        <label for="radio-hr6"><span
                                                                                class="radio-label"></span>
                                                                            6-8小时</label>
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
                    
                    <div class="step" style="display:none">
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
                                        <div class="review-item"> <label>工作类别</label> <div >CMS开发 </div> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block" style="padding:0 30px;">
                        <a href="#" class="button gray big ripple-effect backward">上一步</a>
                        <a id="btn_sub" href="#" class="button big ripple-effect margin-left-20 forward">下一步</a>
                        <a name="submit"  class="button big ripple-effect submit" style="float:right">发布</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

{!! Theme::asset()->container('specific-js')->usePath()->add('jquery-ui-js','js/plugins/jquery-ui-1.10.4.custom.min.js')!!}
{!! Theme::asset()->container('specific-js')->usePath()->add('wizard-js','js/plugins/jquery.wizard.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('iPicker-js','js/plugins/ipicker/dist/iPicker.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('validform-js','js/plugins/Validform_v5.3.2.js') !!}
{!! Theme::asset()->container('custom-js')->usePath()->add('post-js','js/jobs/post.js') !!}