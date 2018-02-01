<?php
namespace Ytb8102\Controller;
use Think\Controller;
class MokuaiController extends CommonController {
    public function qiwen(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
            $qiwen = [
            'type' => 'Mokuai',
            'er_type' => 'qiwen'
        ];
    	$list = M('qiwen')->select();
    	$this->assign('list',$list);
    	$this->display('Mokuai/qiwen');
    }

    public function rencai(){ 
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$list = M('rencai')->select();
    	$this->assign('list',$list);
    	$this->display('Mokuai/rencai');
    }
 
     //人才队伍
     public function rcdw(){ 
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $list=  M("rcfa")->where("code=1")->find();
    $this->assign('er',$list);
        $this->display('Mokuai/rcdw');
    }

     public function rcdwxiu()
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
        if(M('rcfa')->where('code = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }





     //职工培训
     public function zgpx(){ 
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $list=  M("rcfa")->where("code=2")->find();
    $this->assign('er',$list);
    $this->display('Mokuai/zgpx');

}
      
   public function zgpxxiu(){
    $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('rcfa')->where('code = 2')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }





     //人才招聘
     public function rczp(){ 
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
       $list=  M("rcfa")->where("code=3")->find();
    $this->assign('er',$list);
        $this->display('Mokuai/rczp');
    }


    public function rczpxiu()
    {
     $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('rcfa')->where('code = 3')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }



       //职工生活
     public function zgsh(){ 
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
     $list=  M("rcfa")->where("code=4")->find();
    $this->assign('er',$list);
    $this->display('Mokuai/zgsh');
    }

        public function zgshxiu()
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
        if(M('rcfa')->where('code = 4')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }
                                     //企业文化
//-----------------------------------------------------------------------------------------------------

       //文化体系
     public function whtx(){ 
       
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
     $list=  M("qywenhua")->where("code=1")->find();
    $this->assign('er',$list);
    $this->display('Mokuai/whtx');
    }

      public function whtxxiu()
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
        if(M('qywenhua')->where('code = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }




       //文化成果
     public function whcg(){ 
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
     $list=  M("qywenhua")->where("code=2")->find();
    $this->assign('er',$list);
    $this->display('Mokuai/whcg');
    }
     public function whcgxiu()
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
        if(M('qywenhua')->where('code = 2')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }







       //云托邦故事
     public function ytbgs(){ 
        // echo 22;die;
           $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
     $list=  M("qywenhua")->where("code=3")->find();
    $this->assign('er',$list);
    $this->display('Mokuai/ytbgs');
    }

    public function ytbxiu()
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
        if(M('qywenhua')->where('code = 3')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }







}