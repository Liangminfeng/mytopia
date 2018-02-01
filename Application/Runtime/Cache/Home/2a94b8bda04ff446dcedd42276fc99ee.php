<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=1200">
<meta name="Keywords" content="<?php echo ($ertert['gjz']); ?>,<?php echo ($jtywgjz); ?>">
<meta name="Description" content="<?php echo ($ertert['miaoshu']); ?>">
<title><?php echo ($ertert['title']); ?>-首页</title>
<link href="/sgweb/r/cms/www/sgweb/img/logo.ico" rel="shortcut icon" >
<link href="/Public/Home/css/common.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/index1.css" rel="stylesheet" type="text/css" />

<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
<script src="/Public/Home/js/front.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/js/index.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.superslide.2.1.1.js" ></script>
<style>
@media (min-width: 1200px) {
    .a{width: 1200px}
}
    .a1:hover{color: #EE782B;}
    .a10:hover{height: 1px;}
    .a2{border-top:2px solid #EE782B;}
    #an{color:#EE782B;}
    a{color: black;}
    a:link {color: rgb(6,110,183)};
    a:visited {color: rgb(6,110,183)};
   .btnns{
    margin-left: 65%;
    margin-top:2.5%;
    /*width: 100%;*/
    width: 30px;
    height:30px;
   }
.connt div#banners1{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners2{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners3{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners4{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners5{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}

@media (min-width: 1920px) {
.connt div#banners1{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners2{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners3{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners4{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
.connt div#banners5{display:block;width:100%;height:100%;background-position:center ;position:fixed;background-repeat:no-repeat;background-size: cover;}
}
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
      <div class="logo">
          <a href="/index.php/Home/index.html">
              <img src="/Public/Home/img/logo1.png" class="imgq" />
          </a>
      </div>

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

      <div class="top_div clearfix">
          <a name="gb2big5" id="gb2big5" class="fl" style="font-weight:bolder">中&nbsp;|</a>
          <Script Language=Javascript Src="/Public/Home/js/gb2big5.js"></Script>
          <a href="" class="fl">En </a>
      </div>

        <audio id="music2" src="/Public/Home/music/ytb.mp3" autoplay="autoplay" loop="loop"></audio>
        <div style="width:24px;height:24px;float:left;position:absolute;right:20.6px;top:41px"><a href="javascript:playPause();">
            <img src="/Public/Home/img/zan.png" width="24" height="24" id="music_btn2" border="0"></a>
        </div>
      </div>

      <!--nav end--> 
  </div>
    <div class="InCon">
        <!--播放音乐信息-->
        <div class="music_infos">

        </div>
        <!--播放播放音乐结束-->
        <!-- 轮播图开始区域 -->
        <div class="connt content_middle">
            <div class="common_da"> <a class="common btnLeft"href="javascript:;"></a>
                <a class="common btnRight" href="javascript:;"></a>
            </div>
            <ul>
                <?php if(is_array($asd)): $i = 0; $__LIST__ = $asd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$as): $mod = ($i % 2 );++$i;?><li><a href=""><div id="banners<?php echo ($as['id']); ?>" style="background-image:url(/Public/uploads/<?php echo ($as['pic']); ?>)"></div></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="table clearfix">
                <?php if(is_array($asd)): foreach($asd as $key=>$res): ?><div class="list" >
                        <div class="list_before">
                            <img id="dd<?php echo ($key); ?>" src="/Public/Home/img/42.png" style="width: 100%;height: 100%;border: 0px solid rgba(0,0,0,0);" onclick="window.location.href='<?php echo ($res['url']); ?>'" />
                            <!-- <a href=""> -->
                            <a  href="<?php echo ($res['url']); ?>"><p class="dt"><?php echo ($res[title]); ?></p></a>
                            <!-- </a> -->
                        </div>
                    </div><?php endforeach; endif; ?>
            </div>
        </div>
        <!-- 轮播图开始区域 结束  -->
    </div>
<!--footer 开始-->
<div class="footer Infooter">
    <div class="con">
        <div class="foot_con">
            <div class="foot_nav">
                <a href="/index.php/home/Lianxiw/statement.html" target="_self">公司声明</a>
                <a href="/index.php/home/New/news.html" target="_self">公告启事</a>
                <a href="/index.php/home/Lianxiw/friends.html" target="_self">友情链接</a>
            </div>
            <p> Copyright © 2017 yuntuobang.com, All Rights Reserved   © 云托邦集团 备案号：<?php echo ($ertert['icp']); ?>号</p>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
function playPause() {
    var music = document.getElementById('music2');
    var music_btn = document.getElementById('music_btn2');
    var langbo = document.getElementById('langbo');
    if (music.paused){
        music.play();
        music_btn.src = 'http://scsc.diankai.me/Public/Home/img/zan.png';
        langbo.src = 'http://scsc.diankai.me/Public/Home/img/music.gif';
    }
    else{
        music.pause();
        music_btn.src = 'http://scsc.diankai.me/Public/Home/img/202.png';
        langbo.src = 'http://scsc.diankai.me/Public/Home/img/ting.png';
    }
}

$(function(){

    var aSmall = $('.content_middle .table .list');
    var aLi = $('.content_middle ul li');
    var iNow = 0;
    function tanC() {
        aLi.eq(iNow).fadeIn(1000).siblings().fadeOut(1000);
        aSmall.eq(iNow).addClass('on1').siblings().removeClass('on1');
        document.getElementById("dd0").src = "./Public/Home/img/41.png";
    }
    tanC();
});
</script>
</html>