jQuery(function ($) {
    //步骤6 付费类型 选择
    $('#pay_category  .button-box').on('click', function () {
        $("#pay_category .active").removeClass('active');
        $(this).addClass('active');
        $("#pay_category input").attr("value", this.dataset.category);

        if (this.dataset.category == "1") {
            $("#pay_title").text('固定费用');
            $("#chargedAmount").text('元');
            $("#paytypelist").css('display', 'none');
            $("#worktimepanel").css('display', 'none');
            $("input:radio[name=pay_types]").addClass('ignore');
            $("input:radio[name=per_day_work_time]").addClass('ignore');
        } else {
            $("#pay_title").text('选择计时方式');
            $("#paytypelist").css('display', '');
            $("#worktimepanel").css('display', '');
            $("#chargedAmount").text('小时/元');
            $("#pay_category input").attr("value", "2");
            $('input[id=radio-hour]').prop('checked', true)
            $("input:radio[name=pay_types]").removeClass('ignore');
            $("input:radio[name=per_day_work_time]").removeClass('ignore');
        }
    });

    if ($('#pay_type').val() == '1') {
        $("input:radio[name=pay_types]").addClass('ignore');
        $("input:radio[name=per_day_work_time]").addClass('ignore');
    } else {
        $("input:radio[name=pay_types]").removeClass('ignore');
        $("input:radio[name=per_day_work_time]").removeClass('ignore');
    }

    //步骤6 计时方式 选择category1
    $('input[type=radio][name=pay_types]').on('change', function () {
        if (this.value == '2') {
            $("#chargedAmount").text('小时/元');
            $("#pay_category input").attr("value", "2");
        } else if (this.value == '3') {
            $("#chargedAmount").text('日/元');
            $("#pay_category input").attr("value", "3");
        } else if (this.value == '4') {
            $("#chargedAmount").text('月/元');
            $("#pay_category input").attr("value", "4");
        }
    });
    // 表单验证
    $('#step6_submit').validate({
        errorElement: 'span',
        ignore: '.ignore', // input type=hidden 也会验证
        errorPlacement: function (error, element) {
            error.insertAfter(".step");
        },
        messages: {
            pay_type: {
                required: '请选择计薪方式'
            },
            pay_types: {
                required: '请选择时薪计薪方式'
            },
            unit_price: {
                required: '请填写时薪'
            },
            duration: {
                required: '请填写预计工作周期'
            },
            per_day_work_time: {
                required: '请选择每日工作时长'
            },


        },
    });

    $("#btn_sub").click(function () {
        if ($("#step6_submit").valid()) {
            $("#step6_submit").submit();
        }
    });
});
