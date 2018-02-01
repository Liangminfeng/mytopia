<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        @header('Content-type: text/html;charset=UTF-8');
        $code=M("jbsz")->find();
        if($code['code']==1){
        echo($code['gbwz']);die;
        }else{
        if($_GET){
            $idd=$_GET['id'];
            if($idd){
                $this->assign('idd',$idd);
            }
        }
    	$res=M("slider")->select();
    	$ress=M("slider")->where("id=1")->find();
    	// dump($ress['pic']);exit;
        $resdgg=M("jbsz")->select();
        foreach ($resdgg as $key => $value) {
        	# code...
        }
        $this->assign("ertert",$value);
    	$this->assign("asd",$res);
    	$this->assign("asds",$ress);

        $jdct=M("jtyw")->select();
        $vas=array();
        foreach ($jdct as $ke => $va) {
        $vas[]=$va['gjc'];
        };
        $mlx=implode(",",$vas);
        $this->assign("jtywgjz",$mlx);
    	$this->display('Index/index'); 
          }   
    }

}
