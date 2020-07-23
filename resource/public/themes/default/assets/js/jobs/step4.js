jQuery(function ($) {
  // 表单验证
  $('#step4_submit').validate({
      errorElement: 'span',
      ignore: '',// input type=hidden 也会验证
      errorPlacement: function (error, element) {
          error.insertAfter(".step");
      },
      messages: {
        description: {
              required: '请详细描述工作内容'
          }, 
      },
  });

  $("#btn_sub").click(function () {
      if ($("#step4_submit").valid()) {
          $("#step4_submit").submit();
      }
  });
});


