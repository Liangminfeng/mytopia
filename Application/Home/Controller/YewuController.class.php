<?php
namespace Home\Controller;
use Think\Controller;
class YewuController extends Controller {
    public function index(){
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
    	$list = M('yewu')->select();
    	$this->assign('list',$list);
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
           $kohu=M("yewu_index")->find();
        $this->assign("kos",$kohu);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/index');
    }
    }

    public function business_health(){
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
        $kohu=M("yewu_djkcy")->find();
        $this->assign("kos",$kohu);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_health');
    }
    }

    public function business_financial(){
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
          $kohu=M("yewu_xjr")->find();
        $this->assign("kos",$kohu);
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_financial');
    }
    }

    public function business_unicom(){
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
        $con=M("zc_tl")->where("code=2")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_unicom');
    }
    }

    public function business_movie(){
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
          $kohu=M("yewu_yswh")->find();
        $this->assign("kos",$kohu);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_movie');
    }
    }

    public function business_trading(){
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
          $kohu=M("yewu_xny")->find();
        $this->assign("kos",$kohu);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_trading');
    }
    }

    public function business_energy(){
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
          $kohu=M("yewu_kjmy")->find();
        $this->assign("kos",$kohu);
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_energy');
    }
    }

    public function business_school(){
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
          $kohu=M("yewu_ytbxy")->find();
        $this->assign("kos",$kohu);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_school');
    }
    }

    public function business_brand(){
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
          $kohu=M("yewu_zzpp")->find();
        $this->assign("kos",$kohu);
        $this->assign("jtywgjz",$mlx);
        $this->display('Yewu/business_brand');
        }
    }

    public function business_charitable()
    {
        @header('Content-type: text/html;charset=UTF-8');
        $code = M("jbsz")->find();
        if ($code['code'] == 1) {
            echo($code['gbwz']);
            die;
        } else {
            $resdgg = M("jbsz")->select();
            foreach ($resdgg as $key => $value) {
                # code...
            }
            $this->assign("ertert", $value);
            $jdct = M("jtyw")->select();
            $vas = array();
            foreach ($jdct as $ke => $va) {
                $vas[] = $va['gjc'];
            };
            $mlx = implode(",", $vas);
            $kohu = M("yewu_csgy")->find();
            $this->assign("kos", $kohu);
            $this->assign("jtywgjz", $mlx);
            $this->display('Yewu/business_charitable');
        }
    }
    public function business_wanboss()
    {
        @header('Content-type: text/html;charset=UTF-8');
        $code = M("jbsz")->find();
        if ($code['code'] == 1) {
            echo($code['gbwz']);
            die;
        } else {
            $resdgg = M("jbsz")->select();
            foreach ($resdgg as $key => $value) {
                # code...
            }
            $this->assign("ertert", $value);
            $jdct = M("jtyw")->select();
            $vas = array();
            foreach ($jdct as $ke => $va) {
                $vas[] = $va['gjc'];
            };
            $mlx = implode(",", $vas);
            $con = M("yewu_wanboss")->find();
            $this->assign("con", $con);
            $this->assign("jtywgjz", $mlx);
            $this->display('Yewu/business_wanboss');
        }
    }


}
