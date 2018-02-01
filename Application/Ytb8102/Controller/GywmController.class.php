<?php
namespace Ytb8102\Controller;
use Think\Controller;
class GywmController extends CommonController {

        public function gsjj(){
                $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'gsjj',
            'er_type' => 'ywzlm'
        ];
        $list = M('gsjj')->find();
      $r=  M("gsjj")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Gywm/gsjj');
    }

    public function xiu()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('gsjj')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }


   public function qylc(){

                $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'qylc',
            'er_type' => 'ywzlm'
        ];
        $list = M('qylc')->find();
      $r=  M("qylc")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Gywm/qylc');
    }
    public function qylcxiu()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('qylc')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function zc(){

    $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'qylc',
            'er_type' => 'ywzlm'
        ];
        $list = M('zici')->find();
      $r=  M("zici")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Gywm/zici');
    }

    public function zcxiu()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('zici')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }





    public function zlbj(){

                $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'zlbj',
            'er_type' => 'ywzlm'
        ];
        $list = M('zlbj')->find();
      $r=  M("zlbj")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Gywm/zlbj');
    }
    public function zlbjxiu()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('zlbj')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

   
}