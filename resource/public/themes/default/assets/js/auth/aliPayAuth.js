$(function(){

  var demo=$(".alipay-form").Validform({
      btnSubmit:"#btn_sub",
      tiptype:3,
      label:".label",
      showAllError:true,
      datatype:{
          "zh2-4":/^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
          "ali": /\S/,
      }
  });

})