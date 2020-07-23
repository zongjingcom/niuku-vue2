<div class="container listings-page">
    <div class="top-filters">

        <header>
            <ul class="breadcrumbs">
                <li><a href="/"> 牛库网 </a><span class="icon-material-outline-keyboard-arrow-right"></span></li>
                <li><a href="/projects"> 远程工作 </a></li>
            </ul>
            <div class="listings-header">
                <h2>远程工作</h2>
                <div class="helper">
                    <p class="description">我们有2910个远程工作职位，为您提供适合的工作机会，帮您实现技能变现，获取收益</p>
                    <button class="btn-play"><i class="icon-brand-youtube"></i><span>雇主指南</span></button>
                </div>
            </div>
        </header>


        <div style="display:block;width:100%">
            <div class="filter_section">
                <div class="filter_container">
                    <div class="filter_component">

                        <div class="filter_map">
                            <div class="filter_left">
                                <div class="filter_widget">
                                    <div class="filter_menu grouped" style="width: 150px; height: 32px;">
                                        <div class="{!! (isset($merge['jobType']) && $merge['jobType'] != null ) ?'menu-title checked':'menu-title' !!}">
                                            <span>项目类别</span>
                                            <svg aria-hidden="true" class="klk_c_symbol klook-symbol coupon_arrow">
                                                <use xlink:href="#icon-icon-down">
                                                    <svg id="icon-icon-down" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.42 5.47a.75.75 0 0 1 1.06 1.06l-4.95 4.95a.75.75 0 0 1-1.06 0L2.52 6.53a.75.75 0 0 1 1.06-1.06L8 9.888l4.42-4.42z">
                                                        </path>
                                                    </svg>
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="menu-content">
                                            <div class="content-scroll" style="max-height: 680px;">
                                                <div>
                                                    <div class="more-filter-item expanded with-carrot">
                                                        <div class="content-title"> 类别 </div>
                                                        <div id="category" class="checkbox-list">
                                                            @if(!empty($jobstypelist))
                                                            @foreach($jobstypelist as $item)
                                                            <label class="fit-checkbox">
                                                                <input type="checkbox" name="project_category"
                                                                    value={{$item->job_type}} {!!
                                                                    (isset($merge['jobType']) &&
                                                                    in_array($item->job_type,array_map('intval',
                                                                explode(',', $merge['jobType'])))) ? 'checked' : '' !!}>
                                                                <span class="checkmark-box">
                                                                    <span class="fit-icon check-icon"
                                                                        style="width: 10px; height: 10px;">
                                                                        <svg width="11" height="9" viewBox="0 0 11 9"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M3.64489 8.10164L0.158292 4.61504C-0.0511769 4.40557 -0.0511769 4.06594 0.158292 3.85645L0.916858 3.09786C1.12633 2.88837 1.46598 2.88837 1.67545 3.09786L4.02419 5.44658L9.05493 0.41586C9.2644 0.206391 9.60405 0.206391 9.81352 0.41586L10.5721 1.17445C10.7816 1.38392 10.7816 1.72355 10.5721 1.93303L4.40348 8.10166C4.19399 8.31113 3.85436 8.31113 3.64489 8.10164V8.10164Z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <div class="inner-checkbox">
                                                                    <span class="label"> {{$item->name}}</span>
                                                                    <span class="count">({{$item->job_count}})</span>
                                                                </div>
                                                            </label>
                                                            @endforeach
                                                            @endif

                                                        </div>
                                                        <!--<span class="show-more-less">+2 more</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row">
                                                <a class="clear-all">重置</a>
                                                <a class="apply">确定</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter_widget ml-10">
                                    <div class="filter_menu grouped" style="width: 150px; height: 32px;">
                                        <div
                                            class="{!! ((isset($merge['payType']) && $merge['payType'] != null ) || (isset($merge['experienceLevel']) && $merge['experienceLevel'] != null )) ?'menu-title checked':'menu-title' !!}">
                                            <span>工作类型</span>
                                            <svg aria-hidden="true" class="klk_c_symbol klook-symbol coupon_arrow">
                                                <use xlink:href="#icon-icon-down">
                                                    <svg id="icon-icon-down" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.42 5.47a.75.75 0 0 1 1.06 1.06l-4.95 4.95a.75.75 0 0 1-1.06 0L2.52 6.53a.75.75 0 0 1 1.06-1.06L8 9.888l4.42-4.42z">
                                                        </path>
                                                    </svg>
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="menu-content">
                                            <div class="content-scroll" style="max-height: 680px;">
                                                <div>
                                                    <div class="more-filter-item expanded with-carrot">
                                                        <div class="content-title"> 计薪方式 </div>
                                                        <div id="demand" class="checkbox-list">
                                                            @if(!empty($paytypelist))
                                                            @foreach($paytypelist as $item)
                                                            <label class="fit-checkbox">
                                                                <input type="checkbox" name="demand_option"
                                                                    value={{$item->pay_type}} {!!
                                                                    (isset($merge['payType']) &&
                                                                    in_array($item->pay_type,array_map('intval',
                                                                explode(',', $merge['payType'])))) ? 'checked' : '' !!}>
                                                                <span class="checkmark-box">
                                                                    <span class="fit-icon check-icon"
                                                                        style="width: 10px; height: 10px;">
                                                                        <svg width="11" height="9" viewBox="0 0 11 9"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M3.64489 8.10164L0.158292 4.61504C-0.0511769 4.40557 -0.0511769 4.06594 0.158292 3.85645L0.916858 3.09786C1.12633 2.88837 1.46598 2.88837 1.67545 3.09786L4.02419 5.44658L9.05493 0.41586C9.2644 0.206391 9.60405 0.206391 9.81352 0.41586L10.5721 1.17445C10.7816 1.38392 10.7816 1.72355 10.5721 1.93303L4.40348 8.10166C4.19399 8.31113 3.85436 8.31113 3.64489 8.10164V8.10164Z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <div class="inner-checkbox">
                                                                    <span class="label">@if($item->pay_type == 1)固定价格
                                                                        @elseif($item->pay_type == 2)按时计薪
                                                                        @elseif($item->pay_type == 3)按日计薪
                                                                        @elseif($item->pay_type == 4)按月计薪 @endif</span>
                                                                    <span class="count"> ({{$item->job_count}})</span>
                                                                </div>
                                                            </label>
                                                            @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="more-filter-item expanded with-carrot">
                                                        <div class="content-title"> 经验水平 </div>
                                                        <div id="experce" class="checkbox-list">
                                                            @if(!empty($experiencelevellist))
                                                            @foreach($experiencelevellist as $item)
                                                            <label class="fit-checkbox">
                                                                <input type="checkbox" name="experce_option"
                                                                    value={{$item->experience_level}} {!!
                                                                    (isset($merge['experienceLevel']) &&
                                                                    in_array($item->experience_level,array_map('intval',
                                                                explode(',', $merge['experienceLevel'])))) ? 'checked' :
                                                                '' !!}>
                                                                <span class="checkmark-box">
                                                                    <span class="fit-icon check-icon"
                                                                        style="width: 10px; height: 10px;">
                                                                        <svg width="11" height="9" viewBox="0 0 11 9"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M3.64489 8.10164L0.158292 4.61504C-0.0511769 4.40557 -0.0511769 4.06594 0.158292 3.85645L0.916858 3.09786C1.12633 2.88837 1.46598 2.88837 1.67545 3.09786L4.02419 5.44658L9.05493 0.41586C9.2644 0.206391 9.60405 0.206391 9.81352 0.41586L10.5721 1.17445C10.7816 1.38392 10.7816 1.72355 10.5721 1.93303L4.40348 8.10166C4.19399 8.31113 3.85436 8.31113 3.64489 8.10164V8.10164Z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <div class="inner-checkbox">
                                                                    <span class="label">@if($item->experience_level ==
                                                                        1)入门级 @elseif($item->experience_level == 2) 中级
                                                                        @elseif($item->experience_level == 3)专家级
                                                                        @endif</span>
                                                                    <span class="count"> ({{$item->job_count}})</span>
                                                                </div>
                                                            </label>
                                                            @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row">
                                                <a class="clear-all">重置</a>
                                                <a class="apply">确定</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter_widget ml-10">
                                    <div class="filter_menu" style="width: 150px; height: 32px;">
                                        <div
                                            class="{!! (isset($merge['budget']) && $merge['budget'] != null ) ?'menu-title checked':'menu-title' !!}">
                                            <span>项目预算</span> <svg aria-hidden="true"
                                                class="klk_c_symbol klook-symbol coupon_arrow">
                                                <use xlink:href="#icon-icon-down"><svg id="icon-icon-down"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.42 5.47a.75.75 0 0 1 1.06 1.06l-4.95 4.95a.75.75 0 0 1-1.06 0L2.52 6.53a.75.75 0 0 1 1.06-1.06L8 9.888l4.42-4.42z">
                                                        </path>
                                                    </svg></use>
                                            </svg>
                                        </div>

                                        <div class="menu-content" style="width: 300px;">
                                            <div class="content-scroll" style="max-height: 577.125px;">
                                                <div id="budget">
                                                    <div class="margin-top-55"></div>
                                                    <!-- Range Slider -->
                                                    <input class="range-slider" type="text" name="budget_option"
                                                        value="" data-slider-currency="￥" data-slider-min="100"
                                                        data-slider-max="50000" data-slider-step="500"
                                                        data-slider-value="[100,50000]" />
                                                    <div class="price-range-filter margin-top-15">
                                                        <div class="input-wrapper"><label>最小.</label><input
                                                                type="number" name="gig_price_range" class="min"
                                                                placeholder="0" min="0" max="50000" value=""><i>￥</i>
                                                        </div>
                                                        <div class="input-wrapper"><label>最大.</label><input
                                                                type="number" name="gig_price_range" class="max"
                                                                placeholder="0" min="0" max="50000" value=""><i>￥</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row">
                                                <a class="clear-all">重置</a>
                                                <a class="apply">确定</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter_widget ml-10">
                                    <div class="filter_menu" style="width: 150px; height: 32px;">
                                        <div
                                            class="{!! (isset($merge['duration']) && $merge['duration'] != null ) ?'menu-title checked':'menu-title' !!}">
                                            <span>工作周期</span> <svg aria-hidden="true"
                                                class="klk_c_symbol klook-symbol coupon_arrow">
                                                <use xlink:href="#icon-icon-down"><svg id="icon-icon-down"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.42 5.47a.75.75 0 0 1 1.06 1.06l-4.95 4.95a.75.75 0 0 1-1.06 0L2.52 6.53a.75.75 0 0 1 1.06-1.06L8 9.888l4.42-4.42z">
                                                        </path>
                                                    </svg></use>
                                            </svg>
                                        </div>
                                        <div class="menu-content">
                                            <div class="content-scroll" style="max-height: 680px;">
                                                <div id="progress" class="radio-list">
                                                    <label class="fit-radio radio-item">
                                                        <input type="radio" name="delivery_time" value="0,1" {!!
                                                            (isset($merge['duration']) && $merge['duration']=='0,1' )
                                                            ? 'checked' : '' !!}>
                                                        <span class="fit-radio-circle"></span>
                                                        少于1个月
                                                    </label>
                                                    <label class="fit-radio radio-item">
                                                        <input type="radio" name="delivery_time" value="1,3" {!!
                                                            (isset($merge['duration']) && $merge['duration']=='1,3' )
                                                            ? 'checked' : '' !!}>
                                                        <span class="fit-radio-circle"></span>
                                                        1-3个月
                                                    </label>
                                                    <label class="fit-radio radio-item">
                                                        <input type="radio" name="delivery_time" value="3" {!!
                                                            (isset($merge['duration']) && $merge['duration']=='3' )
                                                            ? 'checked' : '' !!}>
                                                        <span class="fit-radio-circle"></span>
                                                        3个月以上
                                                    </label>
                                                    <label class="fit-radio radio-item selected">
                                                        <input type="radio" name="delivery_time" value="0" {!!
                                                            (isset($merge['duration']) && $merge['duration']=='0' )
                                                            ? 'checked' : '' !!}>
                                                        <span class="fit-radio-circle"></span>
                                                        任何周期
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="button-row">
                                                <a class="clear-all">重置</a>
                                                <a class="apply">确定</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter_right">
                                <div class="filter_switch">
                                    <div class="switch-container">
                                        <label class="switch">
                                            <input type="checkbox" name="remote_option" {!! (isset($merge['workType'])
                                                && $merge['workType']=='1' ) ? 'checked' : '' !!}><span
                                                class="switch-button"></span>
                                            只看远程项目</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="selected-filters-wrapper">
                <div class="selected-filters">

                    @if(!empty($labelarr))
                    @foreach($labelarr as $item)
                    <a
                        href="{!! URL('jobs').'?'.http_build_query(array_merge((Arr::except($merge,['page'])),[$item['type'] => $item['id']])) !!}">
                        {!! $item['name'] !!}
                        <span class="remove-icon"> × </span>
                    </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>


        <div style="display:block;width:100%;margin-bottom:15px;margin-top:8px">
            <div class="top-secondary filteresult">
                <div class="number-of-results"><i class="icon-feather-rss"></i>共 {!! $list->total() !!} 个项目</div>
                <div class="sort-by-wrapper">
                    <span class="pre-title">排序方式:</span>
                    <div class="sort-by">
                        <select class="selectpicker hide-tick" id="transactiondate">
                            <option value="begin_at" {!! (isset($merge['desc']) && $merge['desc']=='begin_at' )
                                ? 'selected' : '' !!}>最新发布</option>
                            <option value="budget" {!! (isset($merge['desc']) && $merge['desc']=='budget' ) ? 'selected'
                                : '' !!}>预算(高到低)</option>
                            {{-- <option value="2">即将关闭</option> --}}
                            <option value="hot_status" {!! (isset($merge['desc']) && $merge['desc']=='hot_status' )
                                ? 'selected' : '' !!}>热门项目</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-0">

            <div class="col-xl-12 p-0">


                <!-- Tasks Container -->
                <div class="tasks-list-container compact-list">
                    @if(!empty($list))
                    @foreach($list as $item)
                    <!-- Task -->
                    <a href="{{ URL('jobs/detail',['id'=>$item->id]) }}" class="task-listing">

                        <!-- Job Listing Details -->
                        <div class="task-listing-details">

                            <!-- Details -->
                            <div class="task-listing-description">
                                <h3 class="task-listing-title">{!! $item['title'] !!}<span
                                        class="task-status-button red">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">已结束</font>
                                        </font>
                                    </span></h3>
                                <ul class="ul-task-icons">
                                    <li><i class="icon-material-outline-monetization-on"></i>
                                        @if($item->pay_type ==1)固定价格
                                        @elseif($item->pay_type == 2)按时计薪
                                        @elseif($item->pay_type == 3)按日计薪
                                        @elseif($item->pay_type == 4)按月计薪
                                        @endif
                                    </li>
                                    <li><i class="icon-line-awesome-connectdevelop"></i>@if($item->experience_level ==
                                        1)入门级经验@elseif($item->experience_level == 2)中级经验@elseif($item->experience_level
                                        == 3)专家级经验@endif </li>
                                    <li><i class="icon-line-awesome-calendar-check-o"></i> 周期:{!! $item->duration !!}天
                                    </li>
                                </ul>

                                <p class="task-listing-text">{!! $item->summary !!}</p>

                                <div class="task-list-postime"><i class="icon-material-outline-access-time"></i>{!!
                                    $item->created_at !!} {{-- 6天前发布 --}}
                                </div>

                                <div class="task-tags">
                                    <span>前端开发</span>
                                    <span>Vue Js</span>
                                    <span>ios开发</span>
                                </div>
                            </div>

                        </div>

                        <div class="task-listing-bid">
                            <div class="task-listing-bid-inner">
                                <div class="task-offers">
                                    <strong>@if($item->pay_type == 1)￥{!! $item->budget !!} @elseif($item->pay_type ==
                                        2)时薪 ￥{!! $item->budget !!} @elseif($item->pay_type ==
                                        3)日薪 ￥{!! $item->budget !!} @elseif($item->pay_type ==
                                        4)月薪 ￥{!! $item->budget !!}@endif</strong>
                                    <span>
                                        @if($item->pay_type == 1)固定价格
                                        @elseif($item->pay_type ==2)按时计薪
                                        @elseif($item->pay_type == 3)按日计薪
                                        @elseif($item->pay_type == 4)按月计薪
                                        @endif
                                    </span>
                                </div>
                                <span class="button button-sliding-icon ripple-effect">申请 <i
                                        class="icon-material-outline-arrow-right-alt"></i></span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @endif
                </div>
                <!-- Tasks Container / End -->

                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Pagination -->
                        <div class="pagination-container mt-60 mb-60">
                            <nav class="pagination">
                                <ul>
                                    @if($list->total() > $list->perPage() )
                                    <li class="pagination-arrow"><a
                                            href="{!!  URL('jobs').'?'.http_build_query( array_merge($merge,['page' => $list->currentPage()-1 ]))!!}"
                                            class="ripple-effect"><i
                                                class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                    @for ($i = 1; $i <= $list->total() / $list->perPage(); $i++)
                                        @if ($list->currentPage() == $i)
                                        <li><a href="{!!  URL('jobs').'?'.http_build_query( array_merge($merge,['page' => $i ]))!!}"
                                                class="current-page">{!! $i !!}</a></li>
                                        @else
                                        <li><a href="{!!  URL('jobs').'?'.http_build_query( array_merge($merge,['page' => $i ]))!!}"
                                                class="ripple-effect ripple-effect">{!! $i !!}</a></li>
                                        @endif
                                        @endfor
                                        <li class="pagination-arrow"><a
                                                href="{!!  URL('jobs').'?'.http_build_query( array_merge($merge,['page' => $list->currentPage()+1 ]))!!}"
                                                class="ripple-effect"><i
                                                    class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                        @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination / End -->

            </div>
        </div>
    </div>
</div>
