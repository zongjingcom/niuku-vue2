/**
 * Created by kuke on 2016/4/29.
 */
$(function () {

    var demo = $(".registerform").Validform({
        btnSubmit: "#btn_sub",
        tiptype: 3,
        label: ".label",
        showAllError: true,
        datatype: {
            "zh2-4": /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
            "idcard": function (gets, obj, curform, datatype) {
                //该方法由佚名网友提供;

                var Wi = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1]; // 加权因子;
                var ValideCode = [1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2]; // 身份证验证位值，10代表X;

                if (gets.length == 15) {
                    return isValidityBrithBy15IdCard(gets);
                } else if (gets.length == 18) {
                    var a_idCard = gets.split(""); // 得到身份证数组
                    if (isValidityBrithBy18IdCard(gets) && isTrueValidateCodeBy18IdCard(a_idCard)) {
                        return true;
                    }
                    return false;
                }
                return false;

                function isTrueValidateCodeBy18IdCard(a_idCard) {
                    var sum = 0; // 声明加权求和变量
                    if (a_idCard[17].toLowerCase() == 'x') {
                        a_idCard[17] = 10; // 将最后位为x的验证码替换为10方便后续操作
                    }
                    for (var i = 0; i < 17; i++) {
                        sum += Wi[i] * a_idCard[i]; // 加权求和
                    }
                    valCodePosition = sum % 11; // 得到验证码所位置
                    if (a_idCard[17] == ValideCode[valCodePosition]) {
                        return true;
                    }
                    return false;
                }

                function isValidityBrithBy18IdCard(idCard18) {
                    var year = idCard18.substring(6, 10);
                    var month = idCard18.substring(10, 12);
                    var day = idCard18.substring(12, 14);
                    var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));
                    // 这里用getFullYear()获取年份，避免千年虫问题
                    if (temp_date.getFullYear() != parseFloat(year) || temp_date.getMonth() != parseFloat(month) - 1 || temp_date.getDate() != parseFloat(day)) {
                        return false;
                    }
                    return true;
                }

                function isValidityBrithBy15IdCard(idCard15) {
                    var year = idCard15.substring(6, 8);
                    var month = idCard15.substring(8, 10);
                    var day = idCard15.substring(10, 12);
                    var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));
                    // 对于老身份证中的你年龄则不需考虑千年虫问题而使用getYear()方法
                    if (temp_date.getYear() != parseFloat(year) || temp_date.getMonth() != parseFloat(month) - 1 || temp_date.getDate() != parseFloat(day)) {
                        return false;
                    }
                    return true;
                }
            }
        },
    });

    $("#id-input-file-3").change(function (e) {
        var card_front_side_tip = document.getElementById('card_front_side_tip');
        card_front_side_tip.style.display = "none";

        var card_front_side_img = document.getElementById('card_front_side_img');
        card_front_side_img.style.display = "block";

        updateImg("#card_front_side_img", e.target);
    });

    $("#id-input-file-4").change(function (e) {
        var card_back_dside_tip = document.getElementById('card_back_dside_tip');
        card_back_dside_tip.style.display = "none";

        var card_back_dside_img = document.getElementById('card_back_dside_img');
        card_back_dside_img.style.display = "block";

        updateImg("#card_back_dside_img", e.target);
    });

    $("#id-input-file-5").change(function (e) {
        var validation_img_tip = document.getElementById('validation_img_tip');
        validation_img_tip.style.display = "none";

        var validation_img_img = document.getElementById('validation_img_img');
        validation_img_img.style.display = "block";

        updateImg("#validation_img_img", e.target);
    });


})

function updateImg(img_name, imgFile) {
    //拿到文件数据
    var file = imgFile.files[0];
    //截取图片名称小数点后的字符串
    var ftype = file.name.substring(file.name.lastIndexOf(".") + 1);
    //校验格式是否是图片类型
    if (ftype == "jpg" || ftype == "gif" || ftype == "jpeg" || ftype == "bmp" || ftype == "png" || ftype == "JPG" || ftype == "GIF" || ftype == "JPEG" || ftype == "BMP" || ftype == "PNG") {
        // 实例化一个阅读器对象
        var reader = new FileReader();
        // 读取文件的路径，没有返回值,结果在reader.result里
        reader.readAsDataURL(file);
        // 读取需要时间，读完后再修改图片路径
        reader.onload = function (e) {
            $(img_name).attr("src", e.target.result);
        }
    } else {
        alert("图片格式不对，请重新选择！");
        return false;
    }
}
