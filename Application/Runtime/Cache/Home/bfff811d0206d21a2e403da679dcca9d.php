<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=1200">
<meta name="Keywords" content="<?php echo ($ertert['gjz']); ?>,<?php echo ($jtywgjz); ?>">
<meta name="Description" content="<?php echo ($ertert['miaoshu']); ?>">
<title><?php echo ($ertert['title']); ?>-人才队伍</title>
<link href="/sgweb/r/cms/www/sgweb/img/logo.ico" rel="shortcut icon" >
<link href="/Public/Home/css/common.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/talent.css" rel="stylesheet" type="text/css" />
<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
<script src="/Public/Home/js/front.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/js/index.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.superslide.2.1.1.js" ></script>
<style>
    .a1:hover{color: #EE782B;}
    .a2{border-top:2px solid #EE782B;}
    #an{color:#EE782B;}
    a{color: black;}
a:link {color: black}; 
a:visited {color: black};
</style>
<script type="text/javascript">
$(function() {
	Cms.siteFlow("/sgweb", location.href, document.referrer, "true");
	$.cookie("_site_id_cookie","1",{path: '/sgweb' });
});
</script>
</head>
<body>
<div class="header">
	<div class="con"> 
	    <!--logo-->
	     <div class="logo"><a href="/index.php/Home/index.html">
             <img src="/Public/Home/img/logo1.png" class="imgq" /></a></div>
    	<div class="top_div clearfix"> 
    	<a name="gb2big5" id="gb2big5" class="fl">中&nbsp;|</a>
    	<Script Language=Javascript Src="/Public/Home/js/gb2big5.js"></Script>
    	<a href="" class="fl">En </a></div>
	    <!--nav-->
	    <div class="nav clearfix">
	      
<style>
	.a22 a{font-size:16px;color:black;}
	.a22 a:link{color:black;}
   .a22:hover{color: #EE782B;border-top:2px solid #EE782B; background-color:rgb(255,255,255);}
   .na:hover{color: #EE782B;}
    .header_menu{text-align: center;float: left;margin: 0 8px;width: 90px;height: 22px;}
	.header_menu .a22{padding: 44px 0 43px 0;}
	div.lai{line-height:2.6;position:relative;top:11px;background-color:#fff;font-size:15px;}
	div.lai a{font-size: 16px;}
	.header .con a{color:black;}
</style>
 	<?php
 $ss=M('menu')->where("stat=0")->order('id asc')->select(); foreach ($ss as $key => $value) { $ss[$key]['son'] = M('menu')->where("stat=$value[id]")->select(); } foreach($ss as $a3=>$a6){ if($idd==$a6['id']){ echo '<div class="header_menu">'; echo '<div class="dss a22" style="height: 100%;width: 100%;">'; echo '<a href="'.$a6['url'].'?id='.$a6['id'].'" id="an" class="a10">'.$a6["title"].'&nbsp;&nbsp;</a>'; foreach($a6['son'] as $a1=>$a2){ if($a6['id']==$a2['stat']){ echo '<div class="lai"><a   href="'.$a2['url'].'?id='.$a2['id'].'" class="na">'.$a2["title"].'</a>
    </div>'; } } echo '</div>'; echo '</div>'; }else{ echo '<div class="header_menu">'; echo '<div  class="dss a22" style="height: 100%;width: 100%;">'; echo '<a href="'.$a6['url'].'?id='.$a6['id'].'" class="a10">'.$a6["title"].'</a>'; foreach($a6['son'] as $a1=>$a2){ if($a6['id']==$a2['stat']){ echo '<div  class="lai"><a href="'.$a2['url'].'?id='.$a2['id'].'">'.$a2["title"].'</a></div>'; } } echo '</div>'; echo '</div>'; } } ?>
    <script type="text/javascript">
    $(function(){
    	$(".lai").hide();
    	$(".a10").mouseover(function(){
    		$(this).siblings().show();
    	});
    	$(".dss").mouseleave(function(){
    		$(".a10").siblings().hide();
    	});
    });
    </script>

	    </div>
        <audio id="music2" src="/Public/Home/music/ytb.mp3" loop="loop"></audio>
        <div style="width:24px;height:24px;float:left;position:absolute;right:20.6px;top:41px">
            <a href="javascript:playPause();">
                <img src="/Public/Home/img/202.png" width="24" height="24" id="music_btn2" border="0"></a>
        </div>
	    <!--nav end--> 
	</div>
</div><!----banner---->
  <div style="width: 100%;height: 100%;">
      <div class="img_xys">
          <!--<img src="/Public/Home/img/新闻中心.jpg" alt=""/>-->
          <div class="img" id="image_new"></div>
      </div>
    <div class="section_1">
      <div style="font-size: 22px;color: #006fbd;font-weight: bold;">人才发展</div>
      <br />
        <div id="menu_item">
            <a href="talent.html" class="a1" style="color:#EE782B">人才队伍</a>
            <label class="item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <a href="talent_recruitment.html" class="a1">职工培训</a>
            <label class="item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <a href="talent_recu.html" class="a1">人才招聘</a>
            <label class="item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <a href="talent_life.html" class="a1">职工生活</a>
        </div>
      </div>
    <!-- <div class="section_1">

      <a class="section_1_1 b1s">人才发展</a>
      <a class="section_1_1 b2s" href="talent.html">人才队伍</a>
      <a class="section_1_1" href="talent_recruitment.html">职工培训</a>
      <a class="section_1_1" href="talent_recu.html">人才招聘</a>
      <a class="section_1_1 " href="talent_life.html">职工生活</a>
    </div> -->
      <div class="section_2">
       <br />
         <div class="section_3"> <?php echo ($con['cont']); ?></div>
    </div>
    </div>

<!----banner  end----> 
<!--footer 开始-->
  <div class="footer Infooter">
    <div class="con">
      <div class="foot_con">
        <div class="foot_nav"> 
          <a href="/index.php/home/Lianxiw/statement.html" target="_self" style="color: white;">公司声明</a> 
          <a href="/index.php/home/New/news.html" target="_self" style="color: white;">公告启事</a> 
          <a href="/index.php/home/Lianxiw/friends.html" target="_self" style="color: white;">友情链接</a> 
        </div>
            <p> Copyright © 2017 yuntuobang.com, All Rights Reserved   © 云托邦集团 ICP备<?php echo ($ertert['icp']); ?>号 京公网安备 <?php echo ($ertert['jgwab']); ?>号
        </p>
      </div>
    </div>
  </div>
<!--footer 结束-->
<script type="text/javascript">
    function playPause() {
        var music = document.getElementById('music2');
        var music_btn = document.getElementById('music_btn2');
        var langbo = document.getElementById('langbo');
        if (music.paused){
            music.play();
            music_btn.src = 'http://scsc.diankai.me/Public/Home/img/zan.png';
        }
        else{
            music.pause();
            music_btn.src = 'http://scsc.diankai.me/Public/Home/img/202.png';
        }
    }
</script>
</body>
</html>