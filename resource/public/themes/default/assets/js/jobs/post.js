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

//表单验证
// $(function () {
//     $(".common-form").Validform({
//         tiptype: 3,
//         ignoreHidden: true
//     });
// })

jQuery(function ($) {
    //步骤一 Job工期类型 选中效果
    $('#job_time .button-box').on('click', function () {
        $("#job_time .active").removeClass('active');
        $(this).addClass('active');
        $('#job_time input').attr("value", this.dataset.type);
    });

    //设置a标签的Click事件
    $('.categories-container .category-box').on('click', function () {
        $("#category").attr("value", this.dataset.id);
    });

    //步骤3 选择专业类别 点击事件
    $("input:radio[name=category1]").on('click', function () {
        getSkillTag();
    });

    //步骤5 人才类型 选择
    $('.row .margin-bottom-30 .button-box').on('click', function () {
        $(".row .margin-bottom-30 .active").removeClass('active');
        $(this).addClass('active');
        $("#talent_type").attr("value", this.dataset.type);
        $("#freelancers_number").css('display', 'none')
        if (this.dataset.type == '1') {
            $("#freelancers_number").css('display', '')
        }
    });

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
        } else {
            $("#pay_title").text('选择计时方式');
            $("#paytypelist").css('display', '');
            $("#worktimepanel").css('display', '');
            $("#chargedAmount").text('小时/元');
            $("#pay_category input").attr("value", "2");
            $('input[id=radio-hour]').prop('checked', true)
        }
    });

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
});

//获取checkbox选中 的值
function getCheckBoxValue(checkboxDom) {
    var value = "";
    $(checkboxDom).each(function () {
        value += "," + $(this).val()
    });
    if (!!value)
        value = value.substring(1);
    return value;
}

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

