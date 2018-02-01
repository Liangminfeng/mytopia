<?php
namespace Home\Controller;
use Think\Controller;
class MokuaiController extends Controller {
    public function rencai(){

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

    	$list = M('rencai')->select();
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
                 $con=M("rcfa")->where("code=1")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/rencai');
    }
    }
    public function qiwen(){
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
    	$list = M('qiwen')->select();
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
             $con=M("qywenhua")->where("code=1")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/qiwen');
    }
    }

    public function talent(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('rencai')->select();
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
        $con=M("rcfa")->where("code=1")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/talent');
    }
    }

    public function talent_recruitment(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('rencai')->select();
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
        $con=M("rcfa")->where("code=2")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/talent_recruitment');
    }
    }

    public function talent_recu(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('rencai')->select();
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
        $con=M("rcfa")->where("code=3")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/talent_recu');
    }
    }

    public function talent_life(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('rencai')->select();
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
        $con=M("rcfa")->where("code=4")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/talent_life');
    }
    }

    public function culture(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('qiwen')->select();
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
        $con=M("qywenhua")->where("code=1")->find();
        $this->assign("con",$con);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/culture');
    }
    }

    public function culture_results(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('qiwen')->select();
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
        $con=M("qywenhua")->where("code=2")->find();
        $this->assign("con",$con);
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/culture_results');
    }
    }

    public function culture_story(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('qiwen')->select();
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
        $con=M("qywenhua")->where("code=3")->find();
        $this->assign("con",$con);
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/culture_story');
    }
    }

    public function we(){
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
        $list = M('we')->select();
        $this->assign('list',$list);
         $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
       $afs= M("gsjj")->where("id=1")->find();
       $this->assign("aasl",$afs);
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/we');
    }
    }

    public function we_speech(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('we')->select();
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
          $afs= M("zici")->where("id=1")->find();
        $this->assign("zlbj",$afs);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/we_speech');
    }
    }

    public function we_course(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('we')->select();
        $this->assign('list',$list);
         $resdgg=M("jbsz")->select();

        foreach ($resdgg as $key => $value) {
            # code...
        }
         $afs= M("qylc")->where("id=1")->find();
        $this->assign("qylc",$afs);
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/we_course');
    }
    }

    public function we_layout(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        $list = M('we')->select();
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
          $afs= M("zlbj")->where("id=1")->find();
        $this->assign("zlbj",$afs);
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display('Mokuai/we_layout');
    }
    }
    public function cha(){
        $id=$_POST['id'];
        $lai=M('menu')->where("stat=$id")->select();
        echo json_encode($lai);
    }
    }
