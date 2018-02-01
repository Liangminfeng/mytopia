<?php
namespace Ytb8102\Controller;
use Think\Controller;
class MenuController extends CommonController {
	//菜单管理首页
    public function index(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

    	$index = [
    		'type' => 'hdp',
    		'er_type' => 'hdpll'
    	];
      $total = M('menu')->Count();
      $page = new \Think\Page($total,33);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("menu")->limit($page->firstRow,$page->listRows)->select();

      $this->assign("res",$res);
      $this->assign("index",$index);
	    $this->display();
	  // $this->display('Lunbo/index');
    }
//    //菜单管理修改详情
    public function updetails(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$id=I("get.id");
        $res=M("menu")->where("id='$id'")->find();
        $this->assign("res",$res);
	    $this->display();
	  // $this->display('Lunbo/index');
    }
     //菜单管理修改
    public function update(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

      $id=I("post.id");
      $data['title']=I("post.title");
      $data['url']=I("post.url");
      $ss=M("menu")->where("id='$id'")->save($data);
	    if($ss){
	      $this->success('修改成功！',U('Menu/index'));
	    }else{
	      $this->success('修改失败！',U('Menu/index'));
	    }
    }
}