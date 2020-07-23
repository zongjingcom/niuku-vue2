//省市区组件 初始化
var $pre = $("pre");
var $picker = $(".picker");
$.getJSON("/themes/default/assets/js/plugins/ipicker/json/area.json").done(function (res) {
    $("#workArea").iPicker({
        data: res,
        level: 3,
        width: 130,
        onSelect: function (v, t, set) {
            document.getElementById("province").value = "";
            document.getElementById("city").value = "";
            document.getElementById("area").value = "";

            if (v.length == 3) {
                document.getElementById("province").value = v[0];
                document.getElementById("city").value = v[1];
                document.getElementById("area").value = v[2];
            }
        }
    });
})

jQuery(function ($) {
    //步骤5 人才类型 选择
    $('.row .margin-bottom-30 .button-box').on('click', function () {
        $(".row .margin-bottom-30 .active").removeClass('active');
        $(this).addClass('active');
        $("#talent_type").attr("value", this.dataset.type);
        $("#freelancers_number").css('display', 'none')
        $("#talent_number").addClass('ignore');
        if (this.dataset.type == '1') {
            $("#freelancers_number").css('display', '')
            $("#talent_number").removeClass('ignore');
        }
    });
    if($('#talent_type').val() == 2 ){
      $("#freelancers_number").css('display', 'none')
      $("#talent_number").addClass('ignore');
    }
    // 表单验证
    $('#step5_submit').validate({
        errorElement: 'span',
        ignore: '.ignore', // input type=hidden 也会验证
        errorPlacement: function (error, element) {
            error.insertAfter(".step");
        },
        messages: {
            talent_type: {
                required: '请选择人才类型'
            },
            talent_number: {
                required: '请选择人才数量'
            },
            area: {
                required: '请选择人才所在地'
            },
            work_record: {
                required: '请选择人才工作记录'
            },
            experience_level: {
                required: '请选择人才级别'
            },
        },
    });

    $("#btn_sub").click(function () {
        if ($("#step5_submit").valid()) {
            $("#step5_submit").submit();
        }
    });
});
