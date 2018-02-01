<?php
namespace Home\Controller;
use Think\Controller;
class LianxiwController extends Controller {

    public function contact(){
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
        $res=M("lianxiw")->find();
        $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);

	    $this->assign("vo",$res);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
	$this->display();
}
    }

    public function friends(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
    	$res=M("blogroll")->select();
    	$this->assign("res",$res);
    	$resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {}
        $this->assign("ertert",$value);
        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display();
    }
    }

    public function statement(){
    
       @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{

       $res= M("content")->find();
       $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
            # code...
        }
        $this->assign("ertert",$value);

       $this->assign("res",$res);
       $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
        $this->display();
    }
    }
}
