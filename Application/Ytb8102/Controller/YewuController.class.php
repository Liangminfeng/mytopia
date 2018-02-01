<?php
namespace Ytb8102\Controller;
use Think\Controller;
class YewuController extends CommonController {
    public function zilan(){
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
            'type' => 'ywbk',
            'er_type' => 'ywzlm'
        ];
        $list = M('yewu')->select();
        $this->assign('list',$list);
        $this->assign('index',$index);
        $this->display('Yewu/zilan');
    }
    public function index(){
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
            'type' => 'djkcy',
            'er_type' => 'ywzlm'
        ];
        $list = M('yewu_index')->find();
        $r=  M("yewu_index")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/index');
    }

    public function index_xiu()
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
    if(M('yewu_index')->where('id = 1')->save($data)){
        $this->ajaxReturn(1);
    }else{
        $this->ajaxReturn(2);
    }
}

    public function tuadmin(){
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
            'type' => 'ywbk',
            'er_type' => 'tpgl'
        ];
        $this->assign('index',$index);
        $this->display('Yewu/tuadmin');
    }
    public function djkcy(){
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
            'type' => 'djkcy',
            'er_type' => 'ywzlm'
        ];
        $list = M('yewu_djkcy')->find();
        $r=  M("yewu_djkcy")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/djkcy');

    }
    public function djkcy_xiu()
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
        if(M('yewu_djkcy')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }



    public function xjr(){
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
            'type' => 'xjr',
            'er_type' => 'ywzlm'
        ];
        $list = M('yewu_xjr')->find();
        $r=  M("yewu_xjr")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/xjr');

    }
    public function xjr_xiu()
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
        if(M('yewu_xjr')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }




    public function yswh(){
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
            'type' => 'yswh',
            'er_type' => 'ywzlm'
        ];
        $list = M('yewu_yswh')->find();
        $r=  M("yewu_yswh")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/yswh');

    }
    public function yswh_xiu()
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
        if(M('yewu_yswh')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function xny(){
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
            'type' => 'yswh',
            'er_type' => 'xny'
        ];
        $list = M('yewu_xny')->find();
        $r=  M("yewu_xny")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/xny');

    }

    public function xny_xiu()
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
        if(M('yewu_xny')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }




    public function kjmy(){
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
            'type' => 'kjmy',
            'er_type' => 'xny'
        ];
        $list = M('yewu_kjmy')->find();
        $r=  M("yewu_kjmy")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/kjmy');

    }
    public function kjmy_xiu()
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
        if(M('yewu_kjmy')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }




    public function ytbxy(){
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
            'type' => 'ytbxy',
            'er_type' => 'xny'
        ];
        $list = M('yewu_ytbxy')->find();
        $r=  M("yewu_ytbxy")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/ytbxy');

    }

    public function ytbxy_xiu()
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
        if(M('yewu_ytbxy')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }


    public function zzpp(){
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
            'type' => 'zzpp',
            'er_type' => 'xny'
        ];
        $list = M('yewu_zzpp')->find();
        $r=  M("yewu_zzpp")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/zzpp');

    }
    public function zzpp_xiu()
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
        if(M('yewu_zzpp')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function csgy(){
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
            'type' => 'zzpcsgyp',
            'er_type' => 'xny'
        ];
        $list = M('yewu_csgy')->find();
        $r=  M("yewu_csgy")->where("id=1")->find();
        $this->assign('list',$list);
        $this->assign('er',$r);
        $this->assign('index',$index);
        $this->display('Yewu/csgy');

    }
    public function csgy_xiu()
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
        if(M('yewu_csgy')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function wanboss()
    {
        $fgh = $_SESSION['id'];
        $role_id = M("admin")->getFieldById($fgh, 'role');
        $right_id = M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
        $rightids = implode('\',\'', $right_id);
        $righta = M("qx")->where("id in ('$rightids') and parent_id=0")->select();
        $rightb = M("qx")->where("id in ('$rightids') and parent_id>0")->select();
        // dump($righta);exit;
        $this->assign("righta", $righta);
        $this->assign("rightb", $rightb);
        $index = [
            'type' => 'wanboss',
            'er_type' => 'xny'
        ];
        $list = M('yewu_wanboss')->find();
        $r = M("yewu_wanboss")->where("id=1")->find();
        $this->assign('list', $list);
        $this->assign('er', $r);
        $this->assign('index', $index);
        $this->display('Yewu/wanboss');
    }


    public function wanboss_edit()
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

        $data['content']=$_POST['content'];
        if(M('yewu_wanboss')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function zhixiu(){
        $fgh=$_SESSION['id'];
        $role_id=M("admin")->getFieldById($fgh,'role');
        $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
        $rightids = implode('\',\'', $right_id);
        $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
        $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
        // dump($righta);exit;
        $this->assign("righta",$righta);
        $this->assign("rightb",$rightb);
        $id=I("get.id");
        $res=M("yewu")->where("id='$id'")->find();
        $this->assign("res",$res);
        $this->display();
    }
    public function savezhi(){
        $id=I("post.id");

        $data['name']=I("post.name");
        $data['url']=I("post.url");
        $res=M("yewu")->where("id='$id'")->save($data);
        if($res){
            $this->success('修改成功！',U('Yewu/zilan'));
        }else{
            $this->success('修改失败！',U('Yewu/zilan'));
        }

    }

}