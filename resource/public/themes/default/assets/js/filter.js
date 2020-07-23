$(document).ready(function () {

    /*--------------------------------------------------*/
    /*  点击筛选下拉框改变样式
    /*--------------------------------------------------*/
    $(".filter_menu").each(function () {
        var filterMenu = $(this);
        var filterTrigger = $(this).find('.menu-title');
        var filterArrow = $(this).find('.menu-title svg');
        var filterClear = $(this).find('.button-row .clear-all');
        var filterApply = $(this).find('.button-row .apply');

        //点击筛选下拉按钮
        $(filterTrigger).on('click', function (event) {
            event.preventDefault();

            if ($(this).closest(".filter_menu").is(".open")) {
                close_filter_dropdown();
            } else {
                close_filter_dropdown();
                filterMenu.addClass('open');
                filterArrow.addClass('transform');
            }

        });

        //点击重置按钮
        $(filterClear).on('click', function (event) {
            event.preventDefault();

            var filterCategory = $(this).parent().parent().find('#category'); //类别筛选
            if (filterCategory.length) {
                $("input:checkbox[name=project_category]").prop('checked', false); //取消全选
            };

            filterTrigger.removeClass('checked');
            close_filter_dropdown();

        });

        //点击确定按钮
        $(filterApply).on('click', function (event) {
            event.preventDefault();
            var filterCategory = $(this).parent().parent().find('#category'); //项目类别筛选
            var filterDemand = $(this).parent().parent().find('#demand'); //计薪方式筛选
            var filterExperce = $(this).parent().parent().find('#experce'); //经验水平筛选
            var filterBudget = $(this).parent().parent().find('#budget'); //预算范围
            var filterProgress = $(this).parent().parent().find('#progress'); //进度状态筛选
            var url = window.location.href;

            //项目类型
            if (filterCategory.length) {
                //遍历input，获取选中的值
                var filterInputCheck = $("input:checkbox[name=project_category]:checked");

                if (filterInputCheck.length) { //判断checkbox是否有选中值
                    var number = "";
                    filterInputCheck.each(function (k) {
                        console.log(filterInputCheck[k].value);
                        number += filterInputCheck[k].value + ","
                    });
                    filterTrigger.addClass('checked');
                    url = changeURLArg(url, 'jobType', number);
                } else {
                    filterTrigger.removeClass('checked');
                    url = changeURLArg(url, 'jobType', '');
                }
            }

            //计薪方式
            if (filterDemand.length) {
                var filterInputCheck = $("input:checkbox[name=demand_option]:checked");
                if (filterInputCheck.length) { //判断checkbox是否有选中值
                    var number = "";
                    filterInputCheck.each(function (k) {
                        number += filterInputCheck[k].value + ","
                    });
                    filterTrigger.addClass('checked');
                    url = changeURLArg(url, 'payType', number);
                } else {
                    filterTrigger.removeClass('checked');
                    url = changeURLArg(url, 'payType', '');
                }
            }

            //经验水平
            if (filterExperce.length) {
                //遍历input，获取选中的值
                var filterInputCheck = $("input:checkbox[name=experce_option]:checked");
                if (filterInputCheck.length) { //判断checkbox是否有选中值
                    var number = "";
                    filterInputCheck.each(function (k) {
                        number += filterInputCheck[k].value + ","
                    });
                    filterTrigger.addClass('checked');
                    url = changeURLArg(url, 'experienceLevel', number);
                } else {
                    filterTrigger.removeClass('checked');
                    url = changeURLArg(url, 'experienceLevel', '');
                }
            }

            //项目预算范围
            if (filterBudget.length) {
                var filterInputSlide = $("input:text[name=budget_option]");
                if (filterInputSlide.length) {
                    console.log(filterInputSlide.attr("data-value"));
                    url = changeURLArg(url, 'budget', filterInputSlide.attr("data-value"));
                    filterTrigger.addClass('checked');
                } else {
                    filterTrigger.removeClass('checked');
                    url = changeURLArg(url, 'budget', '');
                }
            }

            //工作周期
            if (filterProgress.length) {
                var filterInputCheck = $("input:radio[name=delivery_time]:checked");
                if (filterInputCheck.length) {
                    var number = "";
                    filterInputCheck.each(function (k) {
                        number += filterInputCheck[k].value;
                    });
                    url = changeURLArg(url, 'duration', number);
                }
            }

            close_filter_dropdown();
            $(location).attr('href', url);
        });

    });

    // 关闭下拉框
    function close_filter_dropdown() {
        $(".filter_menu").removeClass("open");
        $(".menu-title svg").removeClass('transform');
    }

    //是否只看远程
    $(".switch-container").each(function () {
        var filterRemote = $(this).find('.switch input');
        $(filterRemote).change(function () {
            var filterInputCheck = $("input:checkbox[name=remote_option]:checked");
            var url = window.location.href;
            if (filterInputCheck.length) {
                url = changeURLArg(url, 'workType', '1');
            } else {
                url = changeURLArg(url, 'workType', '0');
            }
            $(location).attr('href', url);
        });
    });

    //排序
    $('#transactiondate').change(function () {
        var url = window.location.href;
        url = changeURLArg(url, 'desc', $('#transactiondate').val());
        $(location).attr('href', url);
    });

    // 点击页面其它地方关闭浮动筛选
    var mouse_is_inside = false;

    $(".filter_menu").on("mouseenter", function () {
        mouse_is_inside = true;
    });
    $(".filter_menu").on("mouseleave", function () {
        mouse_is_inside = false;
    });

    $("body").mouseup(function () {
        if (!mouse_is_inside) close_filter_dropdown();
    });

    // 按ESC键关闭浮动筛选
    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            close_filter_dropdown();
        }
    });

    /* 
     * url 目标url 
     * arg 需要替换的参数名称 
     * arg_val 替换后的参数的值 
     * return url 参数替换后的url 
     */
    function changeURLArg(url, arg, arg_val) {
        if (arg_val.charAt(arg_val.length - 1) == ',') {
            arg_val = arg_val.substr(0, arg_val.length - 1);
        }
        var pattern = arg + '=([^&]*)';
        var replaceText = arg + '=' + arg_val;
        if (url.match(pattern)) {
            var tmp = '/(' + arg + '=)([^&]*)/gi';
            tmp = url.replace(eval(tmp), replaceText);
            return tmp.replace('page=','');
        } else {
            if (url.match('[\?]')) {
                return (url + '&' + replaceText).replace('page=','');
            } else {
                return (url + '?' + replaceText).replace('page=','');
            }
        }
        var new_url = url + '\n' + arg + '\n' + arg_val;
        return new_url.replace('page=','');
    }

});
