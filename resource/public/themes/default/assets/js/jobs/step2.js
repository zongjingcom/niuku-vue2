jQuery(function ($) {
    //步骤2 设置a标签的Click事件
    $('.categories-container .category-box').on('click', function () {
        $("#category").attr("value", this.dataset.id);
    });

    $('#step2_submit').validate({
        errorElement: 'span',
        ignore: '',
        errorPlacement: function (error, element) {
            error.insertAfter(".step");
        },
        messages: {
          category: {
                required: '请选择项目类别'
            },
        },
    });

    $("#btn_sub").click(function () {
        if ($("#step2_submit").valid()) {
            $("#step2_submit").submit();
        }
    });

});
