
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta property="og:title" content="Ispeech 愛聽講"/>
<meta property="og:image" content="../static/imgs/logo.jpg"/>
<meta property="og:site_name" content="Ispeech 愛聽講"/>
<meta property="og:description" content="我們都曾因為聽了某些名人或素人的演講，而開始改變了自己的想法與目標。此刻，希望能讓更多人在這平台上找到屬於你的方向，思考人生。"/>
<title>Ispeech</title>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lora:400,700"/>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"/>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="static/css/application.css"/>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="bower_components/angular/angular.js"></script>
<script type="text/javascript" src="bower_components/angular-facebook/lib/angular-facebook.js"></script>
<script type="text/javascript" src="static/js/ui-bootstrap.js"></script>
<script type="text/javascript" src="http://code.angularjs.org/1.2.1/angular-sanitize.js"></script>
<script type="text/javascript" src="bower_components/jquery-waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="static/js/tw_cn.js"></script>
<script type="text/javascript" src="bower_components/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.js"></script>
<script type="text/javascript" src="http://www.littleco.com/wp-content/themes/littlecompany/js/bootstrap.min.js?ver=20130926"></script>
<script type="text/javascript" src="http://www.littleco.com/wp-content/themes/littlecompany/js/jquery.validity.min.js?ver=20130926"></script>
<script type="text/javascript" src="static/js/ispeech.js"></script>
<script type="text/javascript" src="static/js/app.js"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-54846095-1', 'auto');
  ga('send', 'pageview');
  
  //<![CDATA[
    (function() {
      var shr = document.createElement('script');
      shr.setAttribute('data-cfasync', 'false');
      shr.src = '//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js';
      shr.type = 'text/javascript'; shr.async = 'true';
      shr.onload = shr.onreadystatechange = function() {
        var rs = this.readyState;
        if (rs && rs != 'complete' && rs != 'loaded') return;
        var site_id = 'b4f5521bda9a7625942a7c9c84b7a6fc';
        try { Shareaholic.init(site_id); } catch (e) {}
      };
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(shr, s);
    })();
  //]]>
  
  var defaultEncoding = 1;
  var translateDelay = 0;
  var cookieDomain = '//localhost';
  var msgToTraditionalChinese = "切換简体";
  var msgToSimplifiedChinese = "切換繁體";
  var translateButtonId = "translateLink";
  translateInitilization();
  
  $(window).on({
      load: ISPEECH.event.load,
      resize: ISPEECH.event.resize,
      scroll: ISPEECH.event.scroll
  });
  
</script>