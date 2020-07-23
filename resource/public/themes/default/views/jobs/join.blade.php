<div class="container card-page">
    <div class="row">
        <!-- Content -->
        <div class="n-card p-0-top-bottom m-0-top-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <header>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="m-0-bottom" style="line-height: 32px;">申请工作</h2>
                            </div>

                            <div class="col-md-8">
                                <h4 class="pull-right m-0 d-none d-md-block" style="line-height: 32px;">
                                    <strong class="text-muted">
                                        <span>雇主预算: ￥{!! $jobinfo->budget !!} </span>
                                    </strong>
                                </h4>
                                <div class="m-0 d-md-none">
                                    <span class="text-muted">
                                        <span>雇主预算: ￥{!! $jobinfo->budget !!} </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </header>
                    <section>
                        <div class="row">
                            <div class="col-md-9">
                                <h4 class="m-md-bottom">{{ $jobinfo->title }}</h4>
                                <div class="m-sm-bottom d-none d-lg-block">
                                    <span class="d-xs-block m-sm-bottom">
                                        <span class="prefix-tag m-0-bottom">{{ $categoryName }}</span>
                                    </span>
                                    <span class="d-xs-block">
                                        <small class="o-support-info text-muted p-sm-right">
                                            @if(date('d',strtotime($jobinfo->created_at)) == date('d'))
                                            {!! (int)(date('H')) - (int)(date('H',strtotime($jobinfo->created_at))) !!}
                                            小时前发布 @else
                                            发布时间: {!! $jobinfo->created_at !!} @endif
                                        </small>
                                    </span>
                                </div>

                                <div class="break text-pre-line m-0">
                                    {{  $jobinfo->description }}
                                </div>
                                <a class="d-block m-sm-top" target="_blank"
                                    href="{{ URL('jobs/detail',['id'=>$jobinfo->id]) }}">
                                    查看详情
                                </a>
                            </div>
                            <div
                                class="list-unstyled ncard-job-overview p-md-left col-md-3 d-none d-sm-none d-md-block">
                                <div class="row m-md-bottom">
                                    <div class="col-xs-1 m-sm-right">
                                        <span class="glyphicon air-icon-expertise"></span>
                                    </div>
                                    <div class="col-xs-9 p-xs-left">
                                        <div>
                                            <strong>
                                                @if($jobinfo->experience_level ===1)入门级
                                                @elseif($jobinfo->experience_level == 2)中级
                                                @elseif($jobinfo->experience_level== 3)专家级
                                                @endif
                                            </strong>
                                        </div>
                                        <div>
                                            <small class="text-muted experience-level-nowrap">经验等级</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-md-bottom">
                                    <div class="col-xs-1 m-sm-right">
                                        <span class="glyphicon air-icon-fixed-price"></span>
                                    </div>
                                    <div class="col-xs-9 p-xs-left">
                                        <strong>
                                            @if($jobinfo->pay_type == 1)固定价格
                                            @elseif($jobinfo->pay_type ==2)按时计薪
                                            @elseif($jobinfo->pay_type == 3)按日计薪
                                            @elseif($jobinfo->pay_type == 4)按月计薪
                                            @endif
                                        </strong>
                                    </div>
                                </div>
                                <div class="row m-md-bottom">
                                    <div class="col-xs-1 m-sm-right">
                                        <span class="glyphicon air-icon-calendar-up-to-3months"></span>
                                    </div>
                                    <div class="col-xs-9 p-xs-left">
                                        <strong class="ng-binding">{!! $jobinfo->duration !!}天</strong><br>
                                        <small class="text-muted">项目时长</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-md-top-bottom d-none d-lg-block">
                        <form id="join_submit" method="post" action="{!! url('jobs/join') !!}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="job_id" value="{{$jobinfo->id}}">
                            <div class="row d-lg-block job-join-term">
                                <div class="col-lg-12">
                                    <div class="form-group m-lg-bottom">
                                        <label class="control-label">您想如何付款？</label>
                                        <div class="radio">
                                            <input id="milestoneMode1" name="deliver_type" type="radio" value="1" checked>
                                            <label for="milestoneMode1">
                                                <span class="radio-label"></span> 按里程碑
                                                <div class="text-muted m-sm-top">将项目分为较小的部分，称为里程碑。当里程碑完成并获得批准时，您将获得付款。
                                                </div>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <input id="milestoneMode2" name="deliver_type" type="radio" value="2"">
                                            <label for="milestoneMode2">
                                                <span class="radio-label"></span> 按项目
                                                <div class="text-muted m-sm-top">完成所有工作后，在最后获得全部付款。</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="m-md-bottom">你想添加几个阶段?</label>
                                            <div class="p-md-left" id="milestone_list">

                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12 milestone-description m-sm-top">
                                                        <div class="p-xs-bottom">
                                                            <a href="javascript:"
                                                                class="pull-right d-sm-inline d-md-none">
                                                                <span aria-hidden="true"
                                                                    class="glyphicon glyphicon-sm air-icon-close text-success m-0"></span>
                                                            </a>
                                                            <strong><span
                                                                    class="d-sm-inline d-md-none">1&nbsp;&nbsp;</span><span>阶段说明</span></strong>
                                                        </div>
                                                        <div class="input-group input-group-outside">
                                                            <div class="input-group-addon milestone-number">
                                                                1
                                                            </div>
                                                            <input type="text" name="description[]"
                                                                class="with-border m-0 form-control milestone-description-field p-sm-left"
                                                                required="required">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-3 col-xs-6 fe-milestone-duedate m-sm-top p-xs-right">
                                                        <div class="p-xs-bottom"><strong><span>计划交付日期</span></strong>
                                                        </div>
                                                        <div class="date input-group">
                                                            <input type="text" class="form-control m-0 with-border"
                                                                name="due_date[]">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-th"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-6 fe-milestone-amount m-sm-top">
                                                        <div class="p-xs-bottom"><strong><span>计划金额</span></strong>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-group m-0 has-feedback fe-amount">
                                                                <input class="m-0 with-border text-right p-sm-right"
                                                                    type="number" inputmode="numeric" placeholder="0.00"
                                                                    step="0.01" name="amount[]"
                                                                    oninput="calculationTotal()"
                                                                    onporpertychange="calculationTotal()">
                                                                <span
                                                                    class="glyphicon glyphicon-md air-icon-payment text-primary form-control-feedback"></span>
                                                            </div>
                                                            <span
                                                                class="glyphicon air-icon-close text-success m-0-top-bottom m-sm-left d-none d-sm-none d-md-block"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="row m-md-top">
                                                    <div class="col-md-6 col-xs-12 milestone-description m-sm-top">
                                                        <div class="p-xs-bottom">
                                                            <a href="javascript:"
                                                                class="pull-right d-sm-inline d-md-none">
                                                                <span
                                                                    class="glyphicon glyphicon-sm air-icon-close text-success m-0"></span>
                                                            </a>
                                                            <strong>
                                                                <span
                                                                    class="d-sm-inline d-md-none ng-binding">2&nbsp;&nbsp;</span>
                                                                <span>阶段说明</span>
                                                            </strong>
                                                        </div>
                                                        <div class="input-group input-group-outside">
                                                            <div class="input-group-addon milestone-number">2</div>
                                                            <input type="text" name="milestoneDescription_1"
                                                                class="with-border m-0 form-control milestone-description-field p-sm-left">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-3 col-xs-6 fe-milestone-duedate m-sm-top p-xs-right">
                                                        <div class="p-xs-bottom"><strong><span>计划交付日期</span></strong>
                                                        </div>
                                                        <div class="date input-group">
                                                            <input class="with-border m-0 form-control" type="text"
                                                                name="milestoneDuedate_1">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button">
                                                                    <span aria-hidden="true"
                                                                        class="glyphicon air-icon-calendar-under1month"></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-6 fe-milestone-amount m-sm-top">
                                                        <div class="p-xs-bottom"><strong><span>计划金额</span></strong>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-group m-0 has-feedback fe-amount">
                                                                <input
                                                                    class="with-border m-0 form-control text-right p-sm-right"
                                                                    type="number" inputmode="numeric"
                                                                    pattern="[0-9]+([\.,][0-9]+)?" placeholder="0.00"
                                                                    step="0.01" name="milestoneAmount_1">
                                                                <span
                                                                    class="glyphicon glyphicon-md air-icon-payment text-primary form-control-feedback"
                                                                    aria-hidden="true"></span>
                                                            </div>
                                                            <span
                                                                class="glyphicon icon-line-awesome-close text-success m-0-top-bottom m-sm-left m-sm-right d-none d-sm-none d-md-block"
                                                                style="position: relative;top: 0px;"></span>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            </div>
                                            <div class="fe-milestone-add-milestone-button m-lg-top">
                                                <a id="addmilestone" href="javascript:void(0);">+ 添加阶段</a>
                                            </div>
                                            <hr class="m-lg-bottom">
                                            <div class="row fe-milestone-total">
                                                <div
                                                    class="col-md-4 text-center p-sm-top p-md-right p-lg-left d-none d-sm-none d-md-block">
                                                    <up-c-illustration
                                                        class="up-proposals-shield-logo m-md-bottom sc-up-c-illustration-h sc-up-c-illustration-s hydrated"
                                                        name="shield">
                                                        <up-c-load-svg class="sc-up-c-illustration hydrated"><svg
                                                                role="img" viewBox="0 0 145 130"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M72.5.5L16.8 17.6v61c0 5.6 1.4 11.2 4.2 16.1 6.1 10.8 20.3 27.5 51.5 34.8 31.2-7.2 45.4-24 51.5-34.8 2.8-4.9 4.2-10.5 4.2-16.1v-61L72.5.5z"
                                                                    fill="#6fda44"></path>
                                                                <path
                                                                    d="M128.2 78.6v-61L72.5.5v129c31.2-7.2 45.4-24 51.5-34.8 2.8-4.9 4.2-10.4 4.2-16.1z"
                                                                    fill="#34ba08"></path>
                                                                <path
                                                                    d="M75.9 75.9c2.8-.4 4.4-1.6 4.4-4 0-2-1.2-3.2-4.4-4.9l-6.1-1.6C61 62.9 56.5 59.7 56.5 52c0-6.9 5.3-11.3 13.3-12.5v-3.6h6.5v3.6c4.4.4 8.1 2 11.7 4.4l-4 7.3c-2.4-1.6-5.3-2.8-7.7-3.6 0 0-2-.8-6.1-.4-3.2.4-4.4 2-4.4 4s.8 3.2 4.4 4.4l6.1 1.6C86 59.6 90 63.7 90 70.5c0 6.9-5.3 11.7-13.3 12.5v4h-6.5v-4c-6.1-.4-11.3-2.4-15.4-5.7l4.9-7.3c3.2 2.4 6.5 4.4 10.1 5.3 4.1 1 6.1.6 6.1.6z"
                                                                    fill="#fff"></path>
                                                            </svg></up-c-load-svg>
                                                    </up-c-illustration>
                                                    <div class="text-muted">
                                                        包括Upwork固定价格保护 <br>
                                                        <a href="https://support.upwork.com/hc/en-us/articles/211063748"
                                                            target="_blank">了解更多</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-offset-1 col-md-7">
                                                    <up-rate-widget-wrapper>
                                                        <div class="up-rate-widget-wrapper">
                                                            <div>
                                                                <up-rate-widget-milestone>
                                                                    <div>
                                                                        <div class="form-group m-0">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <div class="m-sm-bottom">
                                                                                        <strong>项目总价</strong></div>
                                                                                    <div
                                                                                        class="text-muted m-sm-bottom m-0-bottom-md m-0-bottom-xl">
                                                                                        这包括所有里程碑，是您的客户将看到的金额
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 text-right">
                                                                                    <div
                                                                                        class="input-group input-group-outside">
                                                                                        <div id="total"
                                                                                            class="m-0 font-normal">
                                                                                            ￥0.00
                                                                                            <input type="hidden"
                                                                                                id="chargedAmount"
                                                                                                name="chargedAmount"
                                                                                                class="form-control has-form-message width-xs text-right fs-lg"
                                                                                                required="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group m-0">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-md-8 m-0-bottom p-0-right">
                                                                                    <strong class="m-sm-top d-block">
                                                                                        <span>20%</span>服务费
                                                                                        <a href="" class="m-xs-left">
                                                                                            <span>Explain this</span>
                                                                                        </a>
                                                                                    </strong>
                                                                                </div>
                                                                                <div class="col-md-4 text-right">
                                                                                    <div
                                                                                        class="input-group m-sm-top input-group-outside">
                                                                                        <span>
                                                                                            ￥0.00
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group m-0">
                                                                            <div class="row">
                                                                                <div class="col-md-8 p-0-right">
                                                                                    <strong
                                                                                        class="m-sm-bottom d-block">你会收到</strong>
                                                                                    <div
                                                                                        class="m-sm-bottom m-0-bottom-md m-0-bottom-xl">
                                                                                        <span class="text-muted">
                                                                                            <span> 您的预计付款，不含服务费</span>
                                                                                            <span>由于四舍五入的关系，金额可能会略有不同。
                                                                                                扣除服务费后您将获得的估计金额，也反映在客户的最低每周付款中</span>
                                                                                        </span>&nbsp;
                                                                                        <a href=""
                                                                                            class="d-none d-md-inline">
                                                                                            <span
                                                                                                class="glyphicon air-icon-question-circle m-0"></span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div id="receive" class="nowrap">
                                                                                        ￥0.00
                                                                                        <input type="hidden"
                                                                                            id="earnedAmount"
                                                                                            name="earnedAmount"
                                                                                            class="form-control has-form-message width-xs text-right fs-lg">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </up-rate-widget-milestone>
                                                            </div>
                                                        </div>
                                                    </up-rate-widget-wrapper>
                                                </div>
                                                <div class="col-md-4 p-sm-top p-md-right p-lg-left d-block d-md-none">
                                                    <up-c-illustration
                                                        class="up-proposals-shield-logo small sc-up-c-illustration-h sc-up-c-illustration-s hydrated"
                                                        name="shield">
                                                        <up-c-load-svg class="sc-up-c-illustration hydrated">
                                                        </up-c-load-svg>
                                                    </up-c-illustration>
                                                    <div class="text-muted">
                                                        Includes Upwork Fixed-Price Protection.
                                                        <a href="https://support.upwork.com/hc/en-us/articles/211063748"
                                                            target="_blank" class="d-inline-block">Learn more</a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="m-lg-bottom">

                            <div class="form-group m-0-bottom">
                                <label class="m-md-bottom">这个项目需要多长时间？</label>
                                <div style="max-width:218px">
                                    <select name="duration" class="selectpicker with-border">
                                        <option value="">请选择...</option>
                                        <option value="1">少于一周</option>
                                        <option value="2">不到一个月</option>
                                        <option value="3">1至3个月</option>
                                        <option value="4">3至6个月</option>
                                        <option value="5">6个月以上</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="m-lg-bottom">

                            <div class="form-group">
                                <label class="m-md-bottom">求职信</label>
                                <div>
                                    <div class="up-disintermediation-container">
                                        <div class="up-disintermediation-highlighter"
                                            style="z-index: 0; box-sizing: border-box; position: absolute; border-width: 1px; width: 960px; height: 208px; padding: 13px 19px; margin: 0px; background-color: rgb(255, 255, 255);">
                                            <br><br><br>
                                        </div>
                                        <textarea id="coverLetter" name="cover_letter"
                                            class="form-control with-border vertical-resizable" rows="10"
                                            equired="required"
                                            style="position: relative; z-index: 1; background-color: transparent;"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group fe-apply-questions">
                                <label for="question2" class="control-label">您对职位描述有疑问吗？</label>
                                <textarea id="question2" name="doubt"
                                    class="form-control with-border vertical-resizable" rows="10"></textarea>
                            </div>
                            <div class="form-group m-0-bottom b-multiple-attachments eo-block-wrapper">
                                <label for="attachment" class="control-label">
                                    附件 <span class="text-muted d-none d-sm-none">(Optional)</span>
                                </label>
                                <div class="eo-block-wrapper">
                                    <div class="m-sm-top">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div>
                                    <up-multiple-attachments-drop-box id="attachments" name="attachments"
                                        max-count="10">
                                        <div>
                                            <div class="drop-box p-md-top-bottom eo-image-drop">
                                                拖动或<a href="javascript:">上传</a>项目文件
                                            </div>
                                        </div>
                                        <input id="fileInput" type="file" class="hidden" multiple="multiple">
                                    </up-multiple-attachments-drop-box>
                                </div>
                                <p class="help-block m-0-bottom m-md-top">
                                    您最多可以附加10个文件，每个文件的大小为<b>25MB</b>。包括工作样本或其他文档以支持您的应用程序。不要附加您的简历-Upwork个人资料会随您的提案自动转发给客户。
                                </p>
                            </div>
                        </form>


                    </section>
                    <footer class="d-none d-sm-none d-md-block">
                        <a onclick="document.getElementById('join_submit').submit();">提交提案</a>
                        <a class="btn btn-link m-0" href="/ab/jobs/search/">取消</a>
                    </footer>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="margin-top-75"></div>
{!! Theme::asset()->container('custom-js')->usePath()->add('join-js','js/jobs/join.js') !!}
