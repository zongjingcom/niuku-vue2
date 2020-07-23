

var InterValObj; //timer变量，控制时间
var count = 60; //间隔函数，1秒执行
var curCount; //当前剩余秒数


/* 极验验证通过后发送短信验证码 */

$(function () {

    var register = $(".phoneauth-form").Validform({
        btnSubmit: "#btn_sub",
        tiptype: 3,
        label: ".label",
        showAllError: true,
    });

    register.eq(0).config({
        ajaxurl:{
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        }
    });

    var handler = function (captchaObj) {
        captchaObj.onReady(function () {
            $("#wait").hide();
        }).onSuccess(function () {
            var result = captchaObj.getValidate();
            if (!result) {
                $("#notice")[0].className = "show";
                    setTimeout(function () {
                        $("#notice")[0].className = "hide";
                    }, 2000);
                    e.preventDefault();
                    return false;
            }
            
            var mobile = $("input[name='mobile']").val();
            curCount = count;
            if (mobile) {
                //设置button效果，开始计时
                var token = $('#sendMobileCode').attr('token');
        
                $.post('/user/mobilecode', {
                    '_token': token,
                    'mobile': mobile,
                    geetest_challenge: result.geetest_challenge,
                    geetest_validate: result.geetest_validate,
                    geetest_seccode: result.geetest_seccode
                }, function (msg) {
                    /**if (msg.success){
                        $("#sendMobileCode").attr('disabled', true);
                        $("#sendMobileCode").val("重新获取(" + curCount + ")");
                        InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                    }**/
                    if (msg.info == 0) {
                        $("#sendMobileCode").text(msg.msg);
                        return false;
                    }
                    if (msg.code == 1001) {
                        $('.mobile_check').addClass('Validform_wrong').text(msg.msg);
                    } else {
                        if (msg.code == 1000) {
                            $("#sendMobileCode").attr('disabled', true);
                            $("#sendMobileCode").text("重新获取(" + curCount + ")");
                            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                        } else {
                            thisPos.html('重新发送');
                            thisPos.removeClass('btn-default-upload').addClass('btn-green-bg');
                        }
                    }
                }, 'json');
            } else {
                if (!$('input[name="mobile"]').val()) {
                    $('input[name="mobile"]').siblings('.Validform_checktip').addClass('Validform_wrong').text('请先输入手机号');
                }
            }

        });
    
        $('#sendMobileCode').click(function () {
            // 调用之前先通过前端表单校验
    
            captchaObj.verify();
        });
        // 更多接口说明请参见：http://docs.geetest.com/install/client/web-front/
    };
    
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "/StartCaptchaServlet?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: data.new_captcha,
                product: "bind", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success// 表示用户后台检测极验服务器是否宕机，一般不需要关注
                // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
            }, handler);
        }
    });

});

//timer处理函数
function SetRemainTime() {
    if (curCount == 0) {
        window.clearInterval(InterValObj); //停止计时器
        $("#sendMobileCode").removeAttr("disabled"); //启用按钮
        $("#sendMobileCode").text("重新获取");
    } else {
        curCount--;
        $("#sendMobileCode").text("重新获取(" + curCount + ")");
    }
}