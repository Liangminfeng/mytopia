<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=1200">
<meta name="Keywords" content="<?php echo ($ertert['gjz']); ?>,<?php echo ($jtywgjz); ?>">
<meta name="Description" content="<?php echo ($ertert['miaoshu']); ?>">
<title><?php echo ($ertert['title']); ?>-行业动态</title>
<link href="/sgweb/r/cms/www/sgweb/img/logo.ico" rel="shortcut icon" >
<link href="/Public/Home/css/common.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/group.css" rel="stylesheet" type="text/css" />
<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
<script src="/Public/Home/js/front.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/js/index.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.superslide.2.1.1.js" ></script>
<style>
.page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}  
.page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}  
.page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}  
.page .next,.page .prev{font-family:"宋体"}
    .a1:hover{color: #EE782B;}
    .a2{border-top:2px solid #EE782B;}
    #an{color:#EE782B;}
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
       <div class="logo"><a href="/index.php/Home/index.html"><img src="/Public/Home/img/logo1.png" class="imgq" /></a></div>
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
  <div style="width: 100%;background-color: rgb(255,255,255);">
      <div class="img_xys">
          <!--<img src="/Public/Home/img/新闻中心.jpg" alt=""/>-->
          <div class="img" id="image_new"></div>
      </div>
    <div class="section_1" style="width: 1200px;margin: auto; height: 5%;background-color: white;margin-top: 2%;">
      <div style="color: #006FBD;font-size: 22px;font-weight: bold;">新闻中心</div>
      <br />
      <div style="width: 100%;">
         <a href="/index.php/home/New/news_group.html" class="a1" style="font-size:16px;">集团要闻</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/index.php/home/New/news_industry.html" class="a1" style="color: orange;font-size:16px;">行业动态</a>
      </div>
    </div>
<!--     <div class="section1">
      
      <?php if(is_array($lai)): $i = 0; $__LIST__ = $lai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="section2">
          <div class="section3">
            <div class="section4"><?php echo (date('d',$row['edittime'])); ?></div>
            <div class="section4_1"><?php echo (date('Y/m',$row['edittime'])); ?></div>
          </div>
          <div class="section5">
              <a class="section6" href="/index.php/Home/New/wy/id/<?php echo ($row['id']); ?>"><?php echo ($row['title']); ?></a>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>  <center><div class="result page"><?php echo ($page); ?></div></center>

    </div>   -->
   

       <div  style="" class="section1">
      
      <?php if(is_array($lai)): $i = 0; $__LIST__ = $lai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="section2">
          <div class="section3">
            <div class="section4_1"><font style="font-size:20px;line-height: 75px"><?php echo (date('Y/m/d',$row['edittime'])); ?></font></div>
          </div>
          <div  class="section5">
              <a class="section6" href="/index.php/Home/New/wy/id/<?php echo ($row['id']); ?>"><font style="font-size:15px"><?php echo ($row['title']); ?></font></a>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
   <center><div class="result page"><?php echo ($page); ?></div></center>    

    </div> 
    
    
     <br>
     <br>  
 
   



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