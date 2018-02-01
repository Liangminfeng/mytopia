<?php
namespace Home\Controller;
use Think\Controller;
class NewController extends Controller {
    public function news(){
        if($_GET){
            $idd=$_GET['id'];
            if($idd){
                $this->assign('idd',$idd);
            }
        }
           @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

        $jtyw = M('jtyw')->where('code = 1 and stat=1')->limit("1","5")-> order('edittime desc')->select()[0];
        $hydt = M('hydt')->where('code = 1')->order('edittime desc')->select()[0];
        $xcp = M('xcp')->where('id = 1')->find();
        $xwzx = M('jtyw')->where('code = 1')->limit(5)->select();
        $this->assign('jtyw',$jtyw['content']);
        $this->assign('hydt',$hydt);
        $this->assign('xcp',$xcp);
        $this->assign('xwzx',$xwzx);
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $list1=M("zhongxin")->where("id=1")->find();
        $list2=M("zhongxin")->where("id=2")->find();
        // dump($list2['content']);die;
        $soContent = $list2['content'];
        preg_match_all("|<[^>]+>(.*)</[^>]+>|U",$soContent,
    $out, PREG_PATTERN_ORDER);
// echo $out[0][0] . ", " . $out[0][1] . "\n";
    $sn= $out[1][0] . " " . $out[1][1] . "\n";
    $this->assign("sn",$sn);
      $soContentx = $list1['content'];
        preg_match_all("|<[^>]+>(.*)</[^>]+>|U",$soContentx,
    $out, PREG_PATTERN_ORDER);
// echo $out[0][0] . ", " . $out[0][1] . "\n";
    $xc= $out[1][0] . " " . $out[1][1] . "\n";
    $this->assign("xc",$xc);

        $this->assign("list1",$list1);
        $this->assign("list2",$list2);
        $this->display('New/news');
    }
    }

    public function we_speech()
    {
          @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
         $con=M("zc_tl")->where("code=1")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/we_speech');
    }
    }

    public function business_unicom()
    {   @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
         $con=M("zc_tl")->where("code=2")->find();
        $this->assign("con",$con);
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/business_unicom');
    }
    }
        
 	public function news_group(){ 
      @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

        $total = M('jtyw')->where('code = 1 and stat = 1')->count();
        $page = new \Think\Page($total,5);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $lai = M('jtyw')->limit($page->firstRow,$page->listRows)->where('code = 1 and stat = 1 ')->order("id_id asc")->select();
        $this->assign('lai',$lai);

        $this->assign('page',$page->show());
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/news_group');
    }
    }

    public function yw(){   @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

        $data = M('jtyw')->where('id = '.I('get.id'))->find();
        
        $this->assign('data',$data);
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };

        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/group_news');
    }
    }

    public function wy()
    {   @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

        $data = M('hydt')->where('id = '.I('get.id'))->find();
        $this->assign('data',$data);
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/industry_news');
    }
    }
       public function wys()
    {   @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

        $data = M('jtyw')->where('id = '.I('get.id'))->find();
        $this->assign('data',$data);
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/industry_news');
    }
    }


    public function news_subordinate(){
           @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/news_subordinate');
    }
    }

    public function news_industry(){
           @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

        $total = M('hydt')->where('code = 1 and stat = 1')->count();
        $page = new \Think\Page($total,20);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $lai = M('hydt')->limit($page->firstRow,$page->listRows)->where('code = 1 and stat = 1')->order("id_id asc")->select();

        $this->assign('lai',$lai);
        $this->assign('page',$page->show());
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $con=M("zc_tl")->where("code=1")->find();
        
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/news_industry');
      }
    }

    public function news_media(){
           @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('New/news_media');
    }
}




}
