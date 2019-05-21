$(document).ready(function(){
  var link = ["https://byogo.taobao.com","https://sauir2.taobao.com","https://shop36273246.taobao.com","https://shop151867511.taobao.com","https://missyyusa.taobao.com",
              "https://abucare.tmall.hk","https://huluoboxiaotao.taobao.com","https://merrylife9.taobao.com","https://shop355814971.taobao.com",
              "https://suvikr.taobao.com","https://52yuyuyu.taobao.com","https://missyu828.taobao.com","https://shop100777437.taobao.com",
              "https://mojelekarna.tmall.hk","https://newlookmarket.tmall.hk","https://yyjparis.taobao.com","https://shop394294293.taobao.com",
              "https://tumaus.taobao.com/","https://abnormalbeauty.taobao.com/","https://shop35213196.taobao.com/"];
  $('.sqs').click(function(){
     $('#sqs').css("display","block");
     $('#img1').attr('src',$('.sqs').eq($('.sqs').index(this)).attr('src').replace('hzdp','sqs').replace('png','jpg'));
     $('#store').attr('href',link[$('.sqs').index(this)]);
  });
  $('.close').click(function(){
     $('#sqs').css("display","none");
  });
  $('#store').click(function(){
     $('#sqs').css("display","none");
  });
});
