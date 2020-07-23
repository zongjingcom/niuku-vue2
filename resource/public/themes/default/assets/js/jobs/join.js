//添加 milestone
var current_i = 1;


jQuery(function ($) {
    $("#addmilestone").on('click', function () {
        addMilestone();
    });
});

function addMilestone() {
    current_i += 1;
    var milestoneHtml = "<div class=\"row m-md-top\" id=\"milestone_" + current_i + "\" >" +
        "<div class=\"col-md-6 col-xs-12 milestone-description m-sm-top\">" +
        "<div class=\"p-xs-bottom\">" +
        "<a href=\"javascript:\" class=\"pull-right d-sm-inline d-md-none\">" +
        "<span class=\"glyphicon glyphicon-sm air-icon-close text-success m-0\"></span>" +
        "</a>" +
        "<strong>" +
        "<span class=\"d-sm-inline d-md-none ng-binding\">2&nbsp;&nbsp;</span>" +
        "<span>阶段说明</span>" +
        "</strong>" +
        "</div>" +
        "<div class=\"input-group input-group-outside\">" +
        "<div name=\"serial_number\" class=\"input-group-addon milestone-number\">" + current_i + "</div>" +
        "<input type=\"text\" name=\"description[]\" class=\"with-border m-0 form-control milestone-description-field p-sm-left\">" +
        "</div>" +
        "</div>" +
        "<div class=\"col-md-3 col-xs-6 fe-milestone-duedate m-sm-top p-xs-right\">" +
        "<div class=\"p-xs-bottom\"><strong><span>计划交付日期</span></strong></div>" +
        "<div class=\"date input-group\">" +
        "<input class=\"with-border m-0 form-control\" type=\"text\" name=\"due_date[]\">" +
        "<span class=\"input-group-btn\">" +
        "<button class=\"btn btn-default\" type=\"button\">" +
        "<span aria-hidden=\"true\" class=\"glyphicon air-icon-calendar-under1month\"></span>" +
        "</button>" +
        "</span>" +
        "</div>" +
        "</div>" +
        "<div class=\"col-md-3 col-xs-6 fe-milestone-amount m-sm-top\">" +
        "<div class=\"p-xs-bottom\"><strong><span>计划金额</span></strong></div>" +
        "<div class=\"d-flex align-items-center\">" +
        "<div class=\"form-group m-0 has-feedback fe-amount\">" +
        "<input class=\"with-border m-0 form-control text-right p-sm-right\" type=\"number\" inputmode=\"numeric\" pattern=\"[0-9]+([\.,][0-9]+)?\" placeholder=\"0.00\" step=\"0.01\" name=\"amount[]\" oninput=\"calculationTotal()\" onporpertychange=\"calculationTotal()\">" +
        "<span class=\"glyphicon glyphicon-md air-icon-payment text-primary form-control-feedback\" aria-hidden=\"true\"></span>" +
        "</div>" +
        "<a href=\"javascript:void(0);\" onclick=\"removeMilestone(" + current_i + ")\">" +
        "<span class=\"glyphicon icon-line-awesome-close text-success m-0-top-bottom m-sm-left m-sm-right d-none d-sm-none d-md-block\" style=\"position: relative;top: 0px;\"></span>" +
        "</a>" +
        "</div>" +
        "</div>" +
        "</div>"
    $("#milestone_list").append(milestoneHtml);
}

//删除 指定 milestone
function removeMilestone(id) {
    $("#milestone_" + id).remove();
    current_i -= 1;
    adjustmentSerialNumber();
}

//调整milestone序号
function adjustmentSerialNumber(id) {
    var now = 2;
    $("[name=serial_number]").each(function () {
        if (now <= current_i) {
            $(this).text(now++);
        }
    });
}

//调整milestone序号
function calculationTotal() {
  // $("[name=amount]").each(function () {
  //       total =+ $(this).val();
  // });

  
  var total = 0.00;
  var aa = document.getElementsByName("amount[]");
  for(var i =0;i<aa.length;i++){
    total += Number(aa[i].value);
  }



  $("#total").text("￥"+Math.round(total * 100) / 100);
  $("#receive").text("￥"+Math.round(total * 100) / 100);
  
}

