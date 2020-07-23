jQuery(function ($) {
    //步骤3 选择专业类别 点击事件
    $("input:radio[name=category1]").on('click', function () {
        getSkillTag();
    });

    // 表单验证
    $('#step3_submit').validate({
        errorElement: 'span',
        ignore: '',// input type=hidden 也会验证
        errorPlacement: function (error, element) {
            error.insertAfter(".step");
        },
        messages: {
          title: {
                required: '请输入项目标题'
            },
            category1: {
              required: '请选择专业类别'
          }, 
        },
    });

    $("#btn_sub").click(function () {
        if ($("#step3_submit").valid()) {
            $("#step3_submit").submit();
        }
    });

});

// 根据 选中的专业类别 加载专业技能
function getSkillTag() {
    // 请求获取基础数据
    $.ajax({
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/jobs/ajaxGetPostJobinfo',
        data: null,
        dataType: 'json',
        success: function (data) {
            var jobcategoryarr = data['jobcategoryarr'];
            var skilltagarr = data['skillarr'];
            var jobCategoryHtml = "";
            $("#professional_skill").children().remove();
            var filterSkillTagCheck = $("input:radio[name=category1]:checked");
            if (filterSkillTagCheck.length) {
                filterSkillTagCheck.each(function (k) {
                    for (var i = 0; i < jobcategoryarr.length; i++) {
                        if (filterSkillTagCheck[k].value && jobcategoryarr[i]['upid'] == filterSkillTagCheck[k].value) {
                            jobCategoryHtml += "<div class=\"tags-group-list-title\">" +
                                "<h4 class=\"m-0-bottom\"> " + jobcategoryarr[i]['name'] + "<span class=\"note\">(可选)</span> </h4><hr></div>"
                            var skillTagHtml = "";
                            for (var j = 0; j < skilltagarr.length; j++) {
                                if (skilltagarr[j]['job_type_id'] == jobcategoryarr[i]['id']) {
                                    skillTagHtml += "<div class=\"tag\">" +
                                        "<input type=\"checkbox\" name=\"skill_tag[]\" id=\"tag" + skilltagarr[j]['id'] + "\"  value=\"" + skilltagarr[j]['id'] + "\">" +
                                        "<label for=\"tag" + skilltagarr[j]['id'] + "\">" + skilltagarr[j]['name'] + "</label>" +
                                        "</div>"
                                }
                            }
                            skillTagHtml = "<div class=\"tags-group-list-attributes\"> <div class=\"tags-container\">" + skillTagHtml + "</div></div>";
                            jobCategoryHtml += skillTagHtml;
                        }
                    }
                    $("#professional_skill").append(jobCategoryHtml);
                });
            }
        },
        complete: function () {

        }
    })
}
