<!-- Page Content
================================================== -->
<div class="container listings-page">
    <div class="row">

        <div class="page-box p-0-top-bottom m-0-top-bottom">
            <div class="row">
                <div class="content col-lg-9">
                    <header>
                        <h2 class="m-0-bottom" style="line-height: 32px;">{{ $jobinfo->title }}</h2>
                    </header>

                    <section class="box-desc-layer">
                        <ol class="breadcrumb m-xs-right m-0-top-bottom d-inline-block">
                            <li class="m-0-bottom"><a href="/jobs/categroy">{{$categoryName}}</a></li>
                        </ol>

                        <div class="nowrap text-muted"><span>@if(date('d',strtotime($jobinfo->created_at)) == date('d'))
                                {!! (int)(date('H')) - (int)(date('H',strtotime($jobinfo->created_at))) !!} 小时前发布 @else
                                发布时间: {!! $jobinfo->created_at !!} @endif </span></div>
                        @if($jobinfo->work_type == 2)
                        {{-- 驻场才有地区限制 --}}
                        <div class="m-sm-top">
                            <div class="justify-xs-md">
                                <span class="primary">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span class="text-muted">国家或地区限制：中国 上海</span>
                                </span>
                            </div>
                        </div>
                        @endif
                    </section>


                    <section class="box-desc-layer">
                        <div class="job-description break">
                            {!! $jobinfo->summary !!}<br><br>
                            <p>{!! $jobinfo->description !!}<br></p>
                        </div>
                    </section>

                    <section class="box-desc-layer">
                        <ul class="job-features p-0">


                            <li>
                                <i class="icon-material-outline-monetization-on"></i>
                                <strong>
                                    @if($jobinfo->pay_type == 1)￥{!! $jobinfo->budget !!}
                                    @elseif($jobinfo->pay_type ==2)￥{!! $jobinfo->budget !!}/小时
                                    @elseif($jobinfo->pay_type == 3)￥{!! $jobinfo->budget !!}/日
                                    @elseif($jobinfo->pay_type == 4)￥{!! $jobinfo->budget !!}/月
                                    @endif
                                </strong>
                                <small class="text-muted">
                                    @if($jobinfo->pay_type == 1)固定价格
                                    @elseif($jobinfo->pay_type ==2)按时计薪
                                    @elseif($jobinfo->pay_type == 3)按日计薪
                                    @elseif($jobinfo->pay_type == 4)按月计薪
                                    @endif
                                </small>
                            </li>
                            <li>
                                <i class="icon-line-awesome-calendar-check-o"></i>
                                <strong>
                                    <span class="d-none d-lg-inline">
                                        {!! $jobinfo->duration !!}天
                                    </span>
                                    <span class="d-lg-none">1-3个月</span>
                                </strong>
                                <small class="text-muted">
                                    <span class="d-none d-lg-inline">项目周期</span>
                                    <span class="d-lg-none">持续时间</span>
                                </small>
                            </li>

                            <li>
                                <i class="icon-material-outline-layers"></i>
                                <strong>
                                    <span>
                                        @if($jobinfo->experience_level ===1)入门级
                                        @elseif($jobinfo->experience_level == 2)中级
                                        @elseif($jobinfo->experience_level== 3)专家级
                                        @endif
                                    </span>
                                </strong>
                                <small class="text-muted">
                                    <span class="d-none d-lg-inline">
                                        经验等级
                                    </span>
                                    <span class="d-lg-none">经验等级</span>
                                </small>
                            </li>

                        </ul>
                    </section>

                    <section class="box-desc-layer">
                        <div>
                            <h4 class="m-sm-bottom mb-20">附件 ({{ count($attachmentArr) }})</h4>
                            <div class="attachments-container">
                                @if(!empty($attachmentArr))
                                @foreach ($attachmentArr as $item)
                                <a href="{{ URL('jobs/download',['id'=>$item['id']]) }}" target="_blank"
                                    class="attachment-box ripple-effect"><span>{{ str_replace(strrchr($item['name'], "."),"",$item['name']) }}</span><i>{{strtoupper($item['type'])}}</i></a>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </section>
                    <section class="box-desc-layer">
                        <ul class="list-unstyled m-lg-bottom">
                            <li class="justify-xs-md">
                                <strong class="m-sm-right primary">工作类型:</strong>
                                <span>
                                    @if($jobinfo->type == '1')短期项目
                                    @elseif($jobinfo->type == '2') 长期项目 @endif
                                </span>
                            </li>
                        </ul>
                        <div class="m-md-top">
                            <p class="m-sm-bottom"><strong>
                                    申请此工作时，雇主会要求你回答以下问题：:
                                </strong></p>
                            <ol class="break">
                                <li>1、你是否精通 Angular 和 .NET?</li>
                            </ol>
                        </div>
                    </section>

                    <section class="box-desc-layer">


                        <h4 class="mb-20">所需技能</h4>
                        <div>
                            <div class="row">
                                @if(!empty($jobSkillArr))
                                @foreach ($jobSkillArr as $item)
                                <div class="col-sm-6 m-md-bottom">
                                    <div class="m-xs-bottom"><strong>{{$item->name}}</strong></div>
                                    @if(!empty($skillTagArr))
                                    @foreach ($skillTagArr as $skill)
                                    @if($skill->job_type_id == $item->id)
                                    <span class="o-tag disabled m-0-left m-0-top m-xs-bottom">{{$skill->name}}</span>
                                    @endif
                                    @endforeach
                                    @endif

                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </section>

                    <section class="box-desc-layer">
                        <div class="row">
                            <div class="col-lg-6">

                                <h4 class="mb-20">优先申请条件</h4>

                                <ul class="list-unstyled">
                                    <li class="justify-xs-md">
                                        <span class="text-muted primary">申请者类型:</span>
                                        @if($jobinfo['talent_type'] == 1)
                                        独立自由职业者
                                        @elseif($jobinfo['talent_type'] == 2)
                                        团队或公司
                                        @endif
                                        <span class="text-success glyphicon air-icon-complete-circle m-0-right"
                                            title="You meet this qualification"></span>
                                    </li>

                                    <li class="justify-xs-md">
                                        <span class="primary text-muted">人才工作记录:</span>
                                        @if($jobinfo['work_record'] == 1)
                                        所有人才
                                        @elseif($jobinfo['work_record'] == 2)
                                        有工作成功交付记录
                                        @elseif($jobinfo['work_record'] == 3)
                                        工作交付率90%
                                        @endif
                                        <span aria-hidden="true"
                                            class="text-danger glyphicon air-icon-exclamation-circle m-0-right"
                                            title="You do not meet this qualification"></span></li>



                                    <li class="justify-xs-md">
                                        <span class="primary text-muted nowrap">
                                            英语水平:
                                            <a class="help-icon">
                                                <span
                                                    class="text-success glyphicon air-icon-question-circle m-0-left"></span>
                                            </a>
                                        </span>
                                        @if($jobinfo['english_level'] == 1)
                                        普通
                                        @elseif($jobinfo['english_level'] == 2)
                                        流利
                                        @endif
                                        <span aria-hidden="true"
                                            class="text-danger glyphicon air-icon-exclamation-circle m-0-right"
                                            title="You do not meet this qualification"></span></li>



                                    <li class="justify-xs-md">
                                        <span class="primary text-muted">所在地区:</span>
                                        上海<span class="text-danger glyphicon air-icon-exclamation-circle m-0-right"
                                            title="You do not meet this qualification"></span></li>

                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <h4 class="mb-20">工作动态</h4>
                                <ul class="list-unstyled">
                                    <li class="justify-xs-md">
                                        <span class="text-muted primary">
                                            申请人数:
                                            <a><i class="fas fa-question-circle"></i></a>
                                        </span>
                                        15 to 20
                                    </li>
                                    <li class="d-flex d-md-block justify-space-between">
                                        <span class="text-muted">
                                            雇主上次查看时间:
                                        </span>
                                        <span>

                                            <i class="fas fa-question-circle"></i></a>
                                            <span>{{$jobinfo['last_time'] }}</span>
                                        </span>
                                    </li>
                                    <li class="justify-xs-md">
                                        <span class="primary text-muted">审核通过:</span>
                                        1
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <aside class="sidebar-actions col-lg-3">
                    <div class="sidebar m-0-top p-0-top-bottom">
                        <section class="p-0-bottom">
                            <div class="cta cta-desktop d-none d-md-block m-md-bottom">
                                <div class="jobsProviderAction">
                                    <div class="row buttons">
                                        <div class="primary col-lg-12 col-sm-6 col-xs-6">
                                            <a href="{{ URL('jobs/join',['id'=>$jobinfo['id']]) }}"
                                                class="button btn-jobs-apply move-on-hover ripple-effect">提交申请</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-md-top-bottom d-none d-lg-block" style="font-size:13px;margin-left:2px">
                                <div class="no-close-lg connects eo-popover-helper">
                                    <span class="primary">
                                        申请工作需要 6 个工分点数 </span>
                                    <a class="no-close-lg"><i class="fas fa-question-circle"></i></a>
                                </div>
                                <div class="m-sm-top">
                                    可用工分余额: 20
                                </div>
                            </div>
                            <hr class="d-none d-lg-block my-10" style="border: 0;border-top: 1px solid #e0e0e0;">
                        </section>
                    </div>
                </aside>

                <aside class="sidebar-reg col-lg-3 d-none d-lg-block p-0-top ">
                    <div class="sidebar p-0-top">
                        <section id="registration-form" class="std-init-reg-form padding-top-10"
                            style="padding-bottom:30px">
                            <div class="std-init-reg-form-container ng-scope">
                                <div class="text-center">
                                    <h3 class="title mb-10 ">
                                        注册牛库账号，<br>即刻开始远程工作
                                    </h3>
                                    <p class="subtitle mb-20 ">
                                        现在就加入顶尖自由职业者平台~
                                    </p>
                                </div>




                                <div>

                                    <button name="signup_bogus_form"
                                        class="up-btn-primary up-btn-submit up-btn m-0 up-btn-block"
                                        value="加入牛库">加入牛库</button>
                                </div>


                            </div>
                        </section>

                    </div>
                </aside>

                <aside class="sidebar-extra col-lg-3">
                    <div class="sidebar m-0-top p-0-top">
                        <section class="air-card-divider-sm">
                            <h4 class="mb-20">关于雇主</h4>
                            <div class="m-md-bottom">
                                <h4 class="niuku-plus">
                                    <img src="/themes/default/assets/images/plus-badge.svg" alt="Niuku-Plus"
                                        class="margin-right-4 vertical-align-middle">
                                    <span style="vertical-align: middle;">
                                        企业会员
                                    </span>
                                </h4>
                            </div>
                            <div class="m-md-bottom">
                                <span class="fa fa-badge-check text-success margin-right-5"></span>
                                <strong>
                                    保证金已验证
                                </strong>
                            </div>

                            <div class="rating m-md-bottom text-muted justify-xs-md">
                                <span class="star-rating af" data-rating="4.2"></span>
                            </div>

                            <ul class="list-unstyled m-0-bottom">
                                <li class="justify-xs-md" style="margin-bottom: 10px;">
                                    <span class="fa fa-map-marker-alt text-success margin-right-5"></span>
                                    <strong class="primary">中国 上海</strong>
                                </li>
                                <li class="m-0-bottom">
                                    <small class="text-muted">
                                        2020年5月20日加入
                                    </small>
                                </li>
                            </ul>
                        </section>

                        <section class="air-card-divider-sm">
                            <job-details-copy-link>
                                <div>
                                    <h4 class="mb-20"> 分享链接</h4>
                                    <div class="m-xs-top">
                                        <input type="text" class="form-control" readonly
                                            value="https://www.upwork.com/jobs/~0125e730ab53ac42d8">
                                    </div>
                                    <div class="m-sm-top">
                                        <button class="btn btn-link p-0 m-0-bottom">复制链接</button>
                                    </div>
                                </div>
                            </job-details-copy-link>
                        </section>
                    </div>
                </aside>


            </div>
        </div>

    </div>
</div>
<div class="margin-top-75"></div>
