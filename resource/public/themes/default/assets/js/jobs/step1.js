jQuery(function ($) {
    //步骤一 Job工期类型 选中效果
    $('#job_time .button-box').on('click', function () {
        $("#job_time .active").removeClass('active');
        $(this).addClass('active');
        $('#job_time input').attr("value", this.dataset.type);
    });

    $('#step1_submit').validate({
        errorElement: 'span',
        ignore: '',
        errorPlacement: function (error, element) {
            error.insertAfter(".step");
        },
        messages: {
            types: {
                required: '请选择创建新项目或编辑草稿'
            },
            type: {
                required: '请选择创建项目类型'
            },
        },
    });

    $("#btn_sub").click(function () {
        if ($("#step1_submit").valid()) {
            $("#step1_submit").submit();
        }
    });

});
