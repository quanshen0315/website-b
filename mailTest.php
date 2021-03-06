<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>联系我们</title>
<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" sizes="16*16">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/test.css" rel="stylesheet">
</head>
<body>
    <div class="menu-bg"></div>
    <div id="btns" style="height: 20px; text-align: right; background-color:rgb(255,255,255);position: fixed;width: 100%;z-index: 100; padding-right: 20px; padding-top: 5px;">
        <a class="btn active" onclick="setlang('default',this)" href="javascript:;">中文</a>
        <a class="btn" onclick="setlang('en',this)" href="javascript:;">English</a> 
    </div>
      <nav class="navbar navbar-default navbar-fixed-top nav-container">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo.jpg" alt="logo"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">关于我们<!--{en}About us--><span class="sr-only">(current)</span></a></li>
              <li><a href="Solution.html">解决方案<!--{en}Solution--></a></li>
              <li><a href="Partner.html">合作伙伴<!--{en}Partner--></a></li>
              <li><a class="active" href="#">联系我们<!--{en}Contact Us--></a></li>
              <li><a href="http://search.byogo.com">商品搜索<!--{en}Search--></a></li>
              <li><a href="http://www.gotoquick.com">快客速递<!--{en}GoToQuick--></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    <!-- navigation bar finish -->
  <div class="clearfix">
  <div class="text-center" style="height:212px; margin-top:120px; position: relative;">
      <div style="position: absolute; color:white; width: 100%;height: inherit;background-color: rgba(3,3,3,0.7);">
        <h1 style="position: absolute; left:0;right: 0; top: 25%; font-size:70px;">联系我们<!--{en}Contact Us--></h1></div>
      <img src="img/lianxi.png" alt="解决方案" width ="100%" height ="212px">
  </div>
  </div>
    
  <div class="text-center row" style="width:60%; margin-left:calc((100% - 60%) * 0.5); margin-top:50px;">
     <div class="col-sm-6">
       <h2>联系方式<!--{en}Call us--></h2>
       <p>电话：<!--{en}Tel：-->+1-905 604 0459</p>
       <p>邮件：<!--{en}E-Mail：-->info@byogo.com </p>
     </div>
     <div class="col-sm-6">
       <h2>联系地址<!--{en}Visit us--></h2>
       <p>Unit 1, 61 Telson Rd. </p>
       <p>Markham ON </p>
     </div>
  </div>

  <div class="container" style="margin-top:50px; margin-bottom:50px; margin-left:calc((100% - 60%) * 0.5); width: 80%">
    <form class="form-horizontal" name="sentMessage" id="contactForm" action="mail/contact_me.php" novalidate>
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">*姓名<!--{en}Name*--></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Name" required data-validation-required-message="Please enter your name.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">*邮箱<!--{en}Email*--></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Email" required data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">*电话<!--{en}Phone*--></label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="phone" placeholder="Phone" required data-validation-required-message="Please enter your phone number.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
 <!--     <div class="form-group">
        <label for="subject" class="col-sm-2 control-label">主题</label><!--{en}Subject-->
 <!--       <div class="col-sm-10">
          <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
        </div>
      </div> -->
      <div class="form-group">
        <label for="Message" class="col-sm-2 control-label">内容<!--{en}Message--></label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="5" style="resize: none;" id="message" placeholder="Message" name="message"></textarea>
        </div>
      </div>
      <div class="col-sm-12 text-center">
        <div id="success"></div>
        <button type="submit" class="col-md-1 col-md-push-7 btn btn-default">Send</button>
      </div>
    </form>
    </div>
    <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d5757.460404252099!2d-79.34513468838169!3d43.81995539090651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d333ff4b3727%3A0x92e49b943de10572!2zQllPR0_nmb7kvJjotK0!5e0!3m2!1szh-CN!2scn!4v1546620098081" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  <footer>
      <div class="container">
    <div class="col-md-10 footer-position">
    <div class="col-md-3">
        <h4>解决方案<!--{en}Solution--></h4>
        <a href="Solution.html#ccwl"><p>-仓储物流<!--{en}-Warehouse Logistics--></p></a>
        <a href="Solution.html#gylfw"><p>-供应链服务<!--{en}-Supply chain service--></p></a>
        <a href="Solution.html#gyljr"><p>-供应链金融<!--{en}-Supply chain finance--></p></a>
        <a href="Solution.html#zzfw"><p>-增值服务<!--{en}-Value-added services--></p></a>
    </div>
    <div class="col-md-3">
        <h4>合作伙伴<!--{en}Partner--></h4>
        <a href="Partner.html#hzpt"><p>-合作平台<!--{en}-Cooperation Platform--></p></a>
        <a href="Partner.html#hzpp"><p>-合作品牌<!--{en}-Cooperation brand--></p></a>
        <a href="Partner.html#hzdp"><p>-合作店铺<!--{en}-Cooperative shop--></p></a>
        <a href="Contact.html"><p>-业务洽谈<!--{en}-Business negotiations--></p></a>
    </div>
    <div class="col-md-6">
        <h4>联系我们<!--{en}Contact Us--></h4>
        <p>Toronto： 61 Telson Rd Unit 1 Markham ON<br>Contact(Toronto)： +1-905 604 0459</p>
        <p>大  连：辽宁省大连市高新园区软件园路1A-4软景中心A座2306室<br>业务咨询(Dalian)： 0411-88802080</p>
    </div>
   </div>
   </div>
   <hr>
   <p class="text-center">辽ICP备17014002号-1 Copyright © 2019 by Byogo Inc.</p>
  </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Contact Form JavaScript -->
<script src="js/contact_me.js"></script>
<!--translater to English-->
<script type="text/javascript" src="js/translater.min.js"></script>
<script type="text/javascript">
    var Translater = new Translater();

    var btns = document.getElementById('btns');

    for (var i = 0; i < btns.childNodes.length; i++) {
        var  str = btns.childNodes[i].outerHTML;
        if(str){
            str = str.match(/onclick=\"setlang\(\'(.*?)\'\,/);
            if(str.length>1 && str[1] === Translater.lang_name){
                btns.childNodes[i].className = 'btn active'
            }else{
                btns.childNodes[i].className = 'btn'
            }
        }
    }

    function setlang(name,self){
        Translater.setLang(name);
        var btns = self.parentNode.children;
        for (var i = 0; i < btns.length; i++) {
            btns[i].className = 'btn';
        }
        self.className = 'btn active';
    }
</script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>