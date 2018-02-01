<?php
namespace Ytb8102\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    $id=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($id,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

    	$this->display('Index/index');
    }
    //获取要清楚的目录和目录所在的绝对路径
    public function cache(){
        $rtim=del_dir(APP_PATH.'/Runtime');
        if($rtim){
            echo 1;
        }else{
            echo 2;
        }
    }
}