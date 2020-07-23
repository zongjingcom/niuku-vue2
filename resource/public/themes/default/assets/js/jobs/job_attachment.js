var filearr = new Array(); //附件文件数组

jQuery(function ($) {
    //自动加载已添加附件
    getAttachmentByJobID();

    //上传文件 监听
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
        data.append('job_id', $('#job_id').val());

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
                    filearr = data['data'];
                    loadAttachments();
                } else {
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

});

// 根据附件id 删除附件 index 主要处理本地数组中删除
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

//根据job_id 获取所有附件
function getAttachmentByJobID() {
    $.ajax({
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/jobs/getAttachmentByJobID',
        data: {
          job_id: $('#job_id').val()
        },
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        //成功返回之后调用的函数             
        success: function (data) {
            if (data['errCode'] == 1) {
                filearr = data['data'];
                loadAttachments();
            } else {
                alert(data['errMsg']);
            }
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

// 局部更新/加载 附件显示
function loadAttachments() {
  var attachmentHtml = "";
  $("#attachments").children().remove();
  for (var i = 0; i < filearr.length; i++) {
      var filename = filearr[i]['name'];
      var index = filename.lastIndexOf(".");
      var suffix = filename.substr(index + 1);
      attachmentHtml += "<div class=\"attachment-box ripple-effect\">" +
          "<span>" + filename.substr(0, index) + "</span>" +
          "<i>" + suffix.toUpperCase() + "</i>" +
          "<button type=\"button\" class=\"remove-attachment\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Remove\" onclick=\"deleteAttachment(" + i + ',' + filearr[i]['id'] + ")\"></button></div>"
  }
  $("#attachments").append(attachmentHtml);
}
