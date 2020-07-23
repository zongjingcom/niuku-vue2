<!-- Dashboard Sidebar
	================================================== -->
<div class="dashboard-sidebar">
    {!! Theme::partial('sidebar') !!}
</div>
<!-- Dashboard Sidebar / End -->

<!-- Dashboard Content
	================================================== -->
<div class="dashboard-content-container" style="position:relative" data-simplebar>
    <div class="dashboard-content-inner">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>收支明细</h3>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="/">主页</a></li>
                    <li><a href="{{'user/dashboard'}}">工作台</a></li>
                    <li>财务管理</li>
                </ul>
            </nav>
        </div>


        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-line-awesome-reorder"></i> 账户明细</h3>
                <div class="sort-by">
                    <select class="selectpicker hide-tick" id="transactiondate" onChange="getcashlist();">
                        <option value="0">全部记录</option>
                        <option value="1">半年内</option>
                        <option value="2">三个月内</option>
                        <option value="3">本月内</option>
                    </select>
                </div>
            </div>

            <!--筛选-->
            <div class="records-DOuKL" style="padding: 30px 30px 0 30px;">
                <div class="row">
                    <div class="filters-trans" style="padding: 0px 25px 0 32px;">
                        <div class="filter-transtype">
                            <em class="filter-title-1bdtS">交易类型：</em>
                            <div class="filter-content" style="padding-top: 12px;">
                                <div>
                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox1" name="action[]" value=1>
                                        <label for="chekcbox1"><span class="checkbox-icon"></span>
                                            入账</label>
                                    </div>
                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox2" name="action[]" value=2>
                                        <label for="chekcbox2"><span class="checkbox-icon"></span>
                                            付款</label>
                                    </div>
                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox3" name="action[]" value=3>
                                        <label for="chekcbox3"><span class="checkbox-icon"></span>
                                            提现</label>
                                    </div>

                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox4" name="action[]" value=4>
                                        <label for="chekcbox4"><span class="checkbox-icon"></span>
                                            其它</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-transtype" style="margin: 0;">
                            <em class="filter-title-1bdtS">交易状态：</em>
                            <div class="filter-content" style="padding-top: 12px;">
                                <div>
                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox5" name="status[]" value=1>
                                        <label for="chekcbox5"><span class="checkbox-icon"></span>
                                            处理中</label>
                                    </div>
                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox6" name="status[]" value=2>
                                        <label for="chekcbox6"><span class="checkbox-icon"></span>
                                            已完成</label>
                                    </div>
                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox7" name="status[]" value=3>
                                        <label for="chekcbox7"><span class="checkbox-icon"></span>
                                            已取消</label>
                                    </div>

                                    <div class="checkbox" style="width: 78px;">
                                        <input type="checkbox" id="chekcbox8" name="status[]" value=4>
                                        <label for="chekcbox8"><span class="checkbox-icon"></span>
                                            已失败</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content with-padding padding-bottom-0">
                <div class="row">
                    <div class="records-trans">
                        <table class="sheets-records">
                            <thead>
                                <tr>
                                    <th class="align-left">时间</th>
                                    <th class="align-left">详情</th>
                                    <th class="align-right">金额</th>
                                    <th class="align-right">状态</th>
                                    <th class="align-right">余额</th>
                                </tr>
                            </thead>
                            <tbody id="test">
                            </tbody>
                        </table>
        
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <section>
            {!! Theme::partial('footer') !!}
        </section>
        <!-- Footer / End -->

    </div>
</div>
{{-- {!! Theme::asset()->container('specific-js')->usepath()->add('缩写', '当前路径是assets下') !!}    specific-js 指第三方的 js--}}
{!!Theme::asset()->container('specific-js')->usepath()->add('Validform_v5','plugins/js/validform/js/Validform_v5.3.2.js')!!}
{!! Theme::asset()->container('custom-js')->usepath()->add('ajaxGetRecord','js/finance/ajaxGetRecord.js') !!}
{{-- {!! Theme::asset()->container('specific-css')->usepath()->add('validform-style','plugins/jquery/validform/css/style.css') !!} --}}
{!! Theme::asset()->container('custom-css')->usepath()->add('loading','css/loading.css') !!}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
