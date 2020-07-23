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
$(function () {
    $(".common-form").Validform({
        tiptype: 3,
        ignoreHidden: true
    });
})

//定义数组变量
var skilltagarr = new Array(); //子类对应标签数组
var jobtypearr = new Array();
var jobcategoryarr = new Array();
var filearr = new Array(); //附件文件数组
var jobinfo = {}; //存储表单提交数据

jQuery(function ($) {
    var validate = {
        errorPlacement: function (error, element) {
            if (element.is(":radio") || element.is(":checkbox")) {
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        },
        errorClass: "myError",
        errorElement: "p",
        errorLabelContainer: $("#errorSpan"),
        messages: {
            //步骤1 必须项 验证
            type: {
                required: "请选择工作类型！"
            },
            //步骤2 必须项 验证
            category: {
                required: "请选择项目分类！"
            },
            //步骤3 必须项 验证
            title: {
                required: "请填写项目标题！"
            },
            professional: {
                required: "请选择专业类别！"
            },
            //步骤4 必须项 验证
            description: {
                required: "请填写详细工作内容！"
            },
            //步骤5 必须项 验证
            talent_type: {
                required: "请选择人才类型！"
            },
            talent_number: {
                required: "请填写人才数量！"
            },
            area: {
                required: "请选择省市区！"
            },
            talent_level: {
                required: "请选人才级别！"
            },
            //步骤6 必须项 验证
            chargedAmount: {
                required: "请填写时薪！"
            },
            duration: {
                required: "请填工作周期！"
            },
            per_day_work_time: {
                required: "请选择工作时长！"
            }
        }
    };

    //步骤一 Job工期类型 选中效果
    $('#job_time .button-box').on('click', function () {
        $("#job_time .active").removeClass('active');
        $(this).addClass('active');
        $('#job_time input').attr("value", this.dataset.type);
    });

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
            jobtypearr = data['jobtypearr'];
            jobcategoryarr = data['jobcategoryarr'];
            skilltagarr = data['skillarr'];
        },
        complete: function(){

        }
    });

    // 初始化向导
    $("#job-post-form").wizard({
        submit: ".submit",

        //左侧向导选中切换
        beforeSelect: function (event, state) {
            var step_status = $(".stepmenu li");
            $(".stepmenu li i").removeClass('completed');
            step_status.eq(state.stepIndex).removeClass('disabled').addClass('active').siblings().removeClass('active').addClass('disabled');
            step_status.eq(state.stepIndex).find("i").addClass('completed');

            // 设置 下一步按钮 或 提交按钮 
            if (state.stepIndex == 6) {
                $("#btn_sub").css('display', '');
                $("#next_sub").css('display', 'none');
            } else {
                $("#btn_sub").css('display', 'none');
                $("#next_sub").css('display', '');
            }
        },

        //点击下一步前触发
        beforeForward: function (event, state) {

            if (state.stepIndex == 1) {
                // 渲染项目类别
                var jobtypeHTML = "";
                $(".categories-container").children().remove();
                for (var i = 0; i < jobtypearr.length; i++) {
                    jobtypeHTML += "<a class=\"category-box\" href=\"javascript:void(0);\" data-id=\"" + jobtypearr[i]['id'] + "\"  >" +
                        "<div class=\"category-box-icon\">" +
                        "<i class=\"" + jobtypearr[i]['icon'] + "\"></i>" +
                        "</div>" +
                        "<div class=\"category-box-content\">" +
                        "<h5>" + jobtypearr[i]['name'] + "</h5>" +
                        "</div>" +
                        "</a>"
                }
                $(".categories-container").append(jobtypeHTML); // 添加拼接的HTML

                //设置a标签的Click事件
                $('.categories-container .category-box').on('click', function () {
                    $("#category").attr("value", this.dataset.id);
                });

                //保存当前页面选项
                jobinfo['type'] = $("#type").val();

            } else if (state.stepIndex == 2) {
                // 渲染二级分类
                var jobcategoryHtml = "";
                $("#categorylist").children().remove();
                for (var i = 0; i < jobcategoryarr.length; i++) {
                    if ($("#type").val() && jobcategoryarr[i]['upid'] == $("#type").val()) {
                        jobcategoryHtml += "<label class=\"selectlist-option\" style=\"width: calc((100% - 36px) / 4); margin-right: 8px;\">" +
                            "<div class=\"radio\">" +
                            "<input type=\"radio\" id=\"radio-" + jobcategoryarr[i]['id'] + "\" name=\"professional\" value=\"" + jobcategoryarr[i]['id'] + "\" onclick=\"getSkillTag()\" required>" +
                            "<label for=\"radio-" + jobcategoryarr[i]['id'] + "\"><span class=\"radio-label\"></span>" + jobcategoryarr[i]['name'] + "</label>" +
                            "</div></label>"
                    }
                }
                $("#categorylist").append(jobcategoryHtml);

                //保存当前页面选项
                jobinfo['category'] = $("#category").val();

            } else if (state.stepIndex == 3) {
                //保存当前页面选项
                jobinfo['title'] = $("#title").val();
                jobinfo['skill_tag'] = getCheckBoxValue("input:checkbox[name=skill_tag]:checked");
                draftsJobSave();
            } else if (state.stepIndex == 4) {
                //保存当前页面选项
                jobinfo['description'] = $("#description").val();
                draftsJobSave();
            } else if (state.stepIndex == 5) {
                //保存当前页面选项
                // jobinfo['talent_type'] = $("#talent_type").val();
                jobinfo['talent_number'] = $("#talent_number").val();
                jobinfo['deposit_area'] = $("#province").val() + "," + $("#city").val() + "," + $("#area").val();
                jobinfo['work_record'] = getCheckBoxValue("input:radio[name=work_record]:checked");
                jobinfo['experience_level'] = getCheckBoxValue("input:radio[name=talent_level]:checked");

                draftsJobSave();
            } else if (state.stepIndex == 6) {
                //保存当前页面选项
                var unit_price = parseFloat($("#unit_price").val());
                var duration = parseInt($("#duration").val());
                var per_day_work_time = parseInt(getCheckBoxValue("input:radio[name=per_day_work_time]:checked"));
                jobinfo['pay_type'] = $("#pay_types").val();
                jobinfo['duration'] = $("#duration").val();
                jobinfo['per_day_work_time'] = getCheckBoxValue("input:radio[name=per_day_work_time]:checked");
                if ($("#pay_types").val() == "1") {
                    jobinfo['budget'] = $("#unit_price").val();
                }
                if ($("#pay_types").val() == "2") {
                    // jobinfo['unit_price'] = $("#unit_price").val();
                    jobinfo['budget'] = unit_price * duration * per_day_work_time;
                }
                if ($("#pay_types").val() == "3") {
                    // jobinfo['unit_price'] = $("#unit_price").val();
                    jobinfo['budget'] = unit_price * duration;
                }
                if ($("#pay_types").val() == "4") {
                    // jobinfo['unit_price'] = $("#unit_price").val();
                    jobinfo['budget'] = unit_price * duration / 20;
                }
                draftsJobSave();
            } else if (state.stepIndex == 7) {
                draftsJobSave();
            }
            return $(this).wizard("form").valid();
        }
    }).wizard("form").submit(function (event) {
        event.preventDefault();
    }).validate(validate);

    $("#upload").on("change", function () {
        // 创建一个form类型的数据
        if (filearr.length > 4) {
            alert('您最多可以附加 5个文件');
            return;
        }
        //上传附件 成功后 返回 附件id
        var files = $('#upload').prop('files');
        var data = new FormData();
        data.append('file', files[0]);

        $.ajax({
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/jobs/fileUpload',
            data: data,
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            //在请求之前调用的函数
            beforeSend: function () {
                // $("loading").show();
                $('<div id="loadingWrap" style="position:fixed;right:40%;top:40%;" ><div class="sk-bounce"><div class="sk-bounce-dot"></div><div class="sk-bounce-dot"></div></div></div>').appendTo($('.dashboard-content-inner'));
            },
            //成功返回之后调用的函数             
            success: function (data) {
                if (data['errCode'] == 1) {
                    var file = $("#upload")[0].files;
                    file['id'] = data['id'];
                    filearr.push(file);
                    loadAttachments();
                }else{
                    alert(data['errMsg']);
                }

            },
            //调用执行后调用的函数
            complete: function (XMLHttpRequest, textStatus) {
                console.log(XMLHttpRequest.responseText);
                console.log(textStatus);
            },
            //调用出错执行的函数
            error: function () {
                //请求出错处理
            }
        });
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

    //步骤6 计时方式 选择
    $('input[type=radio][name=pay_type]').on('change', function () {
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

function getSkillTag() {
    var jobCategoryHtml = "";
    $("#professional_skill").children().remove();
    var filterSkillTagCheck = $("input:radio[name=professional]:checked");
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
                                "<input type=\"checkbox\" name=\"skill_tag\" id=\"tag" + skilltagarr[j]['id'] + "\"  value=\"" + skilltagarr[j]['id'] + "\">" +
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
}

// 中间步骤保存草稿
function draftsJobSave(status = 0) {
    // var type = $(obj).attr('data-values');
    // var id = $(obj).parent('div').attr('data-id');
    jobinfo['attachment_ids'] = new Array();
    filearr.forEach(function(item) {
        jobinfo['attachment_ids'].push(item['id']);
    }) 
    jobinfo['status'] = status;
    $.ajax({
        type: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/jobs/post',
        data: jobinfo,
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                jobinfo['id'] = data['id'];
                if (data.status == 1) {
                    window.location.replace(location.protocol + '//' + location.hostname + '/jobs');
                }
            } else {
                alert('失败');
            }
        }
    });
}


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


function loadAttachments() {
    var attachmentHtml = "";
    $("#attachments").children().remove();
    for (var i = 0; i < filearr.length; i++) {
        var filename = filearr[i][0]['name'];
        var index = filename.lastIndexOf(".");
        var suffix = filename.substr(index + 1);
        attachmentHtml += "<div class=\"attachment-box ripple-effect\">" +
            "<span>" + filename.substr(0, index) + "</span>" +
            "<i>" + suffix.toUpperCase() + "</i>" +
            "<button class=\"remove-attachment\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Remove\" onclick=\"deleteAttachment(" + i + ',' + filearr[i]['id'] + ")\"></button></div>"
    }
    $("#attachments").append(attachmentHtml);
}

function deleteAttachment(index, id) {
    $.ajax({
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/jobs/fileDelete',
        data: {
            id: id
        },
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        //在请求之前调用的函数
        beforeSend: function () {
            // $("loading").show();
            $('<div id="loadingWrap" style="position:fixed;right:40%;top:40%;" ><div class="sk-bounce"><div class="sk-bounce-dot"></div><div class="sk-bounce-dot"></div></div></div>').appendTo($('.dashboard-content-inner'));
        },
        //成功返回之后调用的函数             
        success: function () {
            filearr.splice(index, 1);
            loadAttachments();
        },
        //调用执行后调用的函数
        complete: function (XMLHttpRequest, textStatus) {
            console.log(XMLHttpRequest.responseText);
            console.log(textStatus);
            //HideLoading();
        },
        //调用出错执行的函数
        error: function () {
            //请求出错处理
        }
    });
}
